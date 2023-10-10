<?php
class Matakuliah extends CI_Controller
{
    public function index()
    {
        // Memuat tampilan form matakuliah
        $this->load->view('view-form-matakuliah');
    }

    public function cetak()
    {
        // Validasi input
        $this->form_validation->set_rules('kode', 'Kode Matakuliah', 'required');
        $this->form_validation->set_rules('nama', 'Nama Matakuliah', 'required');
        $this->form_validation->set_rules('sks', 'SKS', 'required|numeric');

        if ($this->form_validation->run() == false) {
            // Jika validasi gagal, tampilkan kembali form dengan pesan kesalahan
            $this->load->view('view-form-matakuliah');
        } else {
            // Jika validasi berhasil, ambil data dari input dan tampilkan
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks')
            ];
            $this->load->view('view-data-matakuliah', $data);
        }
    }
}

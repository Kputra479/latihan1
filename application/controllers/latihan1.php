<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class latihan1 extends CI_Controller {

	public function index()
	{
		$this->load->view('latihan1');
	}
    public function penjumlahan($nilai1, $nilai2)
 {
 $this->load->model('models_latihan1');
 $data['nilai1'] = $nilai1;
 $data['nilai2'] = $nilai2;
 $data['hasil'] = $this->models_latihan1->jumlah($nilai1, $nilai2);
 $this->load->view('view-latihan', $data);
 }
}


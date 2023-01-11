<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi extends CI_Controller {

	public function index()
	{
		$data['judul'] = "Prestasi Siswa";
		$tmp['konten'] = $this->load->view('prestasi/prestasi',$data,TRUE);
		$this->load->view('template',$tmp);
	}
}

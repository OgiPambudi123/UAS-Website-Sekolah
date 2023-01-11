<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

	public function index()
	{
		$data['judul'] = "Tenaga Pendidik";
		$tmp['konten'] = $this->load->view('page/guru',$data,TRUE);
		$this->load->view('template',$tmp);
	}
}

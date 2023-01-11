<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logo extends CI_Controller {

	public function index()
	{
		$data['judul'] = "Logo Sekolah";
		$tmp['konten'] = $this->load->view('page/logo',$data,TRUE);
		$this->load->view('template',$tmp);
	}
}

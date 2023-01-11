<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tujuan extends CI_Controller {

	public function index()
	{
		$data['judul'] = "Tujuan Sekolah";
		$tmp['konten'] = $this->load->view('page/tujuan',$data,TRUE);
		$this->load->view('template',$tmp);
	}
}

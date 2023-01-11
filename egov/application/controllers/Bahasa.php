<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bahasa extends CI_Controller {

	public function index()
	{
		$data['judul'] = "PROGRAM BAHASA";
		$tmp['konten'] = $this->load->view('page/bahasa',$data,TRUE);
		$this->load->view('template',$tmp);
	}
}

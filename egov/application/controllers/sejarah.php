<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sejarah extends CI_Controller {

	public function index()
	{
		$data['judul'] = "Sejarah";
		$tmp['konten'] = $this->load->view('page/sejarah',$data,TRUE);
		$this->load->view('template',$tmp);
	}
}

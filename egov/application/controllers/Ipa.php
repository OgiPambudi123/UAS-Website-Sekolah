<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ipa extends CI_Controller {

	public function index()
	{
		$data['judul'] = "PROGRAM ILMU PENGETAHUAN ALAM";
		$tmp['konten'] = $this->load->view('page/ipa',$data,TRUE);
		$this->load->view('template',$tmp);
	}
}

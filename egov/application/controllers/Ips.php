<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ips extends CI_Controller {

	public function index()
	{
		$data['judul'] = "PROGRAM ILMU PENGETAHUAN SOSIAL";
		$tmp['konten'] = $this->load->view('page/ips',$data,TRUE);
		$this->load->view('template',$tmp);
	}
}

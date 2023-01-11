<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ekskul extends CI_Controller {

	public function index()
	{
		$data['judul'] = "Ekskul";
		$tmp['konten'] = $this->load->view('ekskul/ekskul',$data,TRUE);
		$this->load->view('template',$tmp);
	}
}

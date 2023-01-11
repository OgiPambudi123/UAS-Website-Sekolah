<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['judul'] = "Home";
		$tmp['konten'] = $this->load->view('home/home',$data,TRUE);
		$this->load->view('template',$tmp);
	}
}

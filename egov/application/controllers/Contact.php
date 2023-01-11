<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$data['judul'] = "Contact";
		$tmp['konten'] = $this->load->view('contact/contact',$data,TRUE);
		$this->load->view('template',$tmp);
	}
}

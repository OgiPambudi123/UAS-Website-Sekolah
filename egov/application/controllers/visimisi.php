<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visimisi extends CI_Controller {

	public function index()
	{
		$data['judul'] = "Visi & Misi";
		$tmp['konten'] = $this->load->view('page/visimisi',$data,TRUE);
		$this->load->view('template',$tmp);
	}
}

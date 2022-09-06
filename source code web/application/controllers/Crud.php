<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

    
    public function __construct(){
		parent::__construct();
		$this->load->model('M_Sensor');
	}

    public function index()
	{
		$this->load->view('datauser');
	}

	function tambah(){
		$this->load->view('datauser');
	}

    function tambah_aksi(){
		$nama = $this->input->post('nama');
		$status = $this->input->post('status');
		
 
		$data = array(
			'nama' => $nama,
			'status' => $status
			);
	
        $this->M_Sensor->input($data);
	}
}
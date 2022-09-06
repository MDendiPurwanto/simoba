<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datauser extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_Sensor');
		$this->load->library('form_validation');
		
	}

    public function index()
	{
	
		$queryAllUser = $this->M_Sensor->getDataUser();
		$DATA = array('queryUser' => $queryAllUser);
		$this->load->view('datauser', $DATA);
		
	}
	
	public function halaman_tambah() 
	{
		$this->load->view('halaman_tambah_user');
	}
	public function halaman_edit($id)
	{
		$queryUserDetail = $this->M_Sensor->getDataUserDetail($id);
		$DATA = array('queryUserEdit' => $queryUserDetail);
		$this->load->view('halaman_edit', $DATA);
	}

	public function fungsiEdit()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$password = $this->input->post('password');
		$status = $this->input->post('status');

		$ArrUpdate = array(
			'nama' => $nama,
			'password' => $password,
			'status' => $status
		);

		$this->M_Sensor->updateDataUser($id, $ArrUpdate);
		redirect(base_url('datauser'));

	}

    public function tambah_aksi(){
		$nama = $this->input->post('nama');
		$password = $this->input->post('password');
		$status = $this->input->post('status');
 
		$data = array(
			'nama' => $nama,
			'password' => $password,
			'status' => $status
			);
        $this->M_Sensor->input_data($data);
		
		redirect(base_url('datauser'));
	}
	public function fungsiDelete($id)
	{
		$this->M_Sensor->deleteUser($id);
		redirect(base_url('datauser'));
	}

	
}
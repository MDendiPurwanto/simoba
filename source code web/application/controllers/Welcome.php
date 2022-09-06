<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_Sensor');
	}

	public function index()
	{
		$this->load->view('dashboard');
	}

	public function ceksuhu()
	{
		//cara panggil function di model
		$recordSensor = $this->M_Sensor->getDataSensorLast();
		$DATA = array('data_sensor' => $recordSensor);

		$this->load->view('ceksuhu', $DATA);		
	}

	public function cekkelembaban()
	{
		//cara panggil function di model
		$recordSensor = $this->M_Sensor->getDataSensorLast();
		$DATA = array('data_sensor' => $recordSensor);

		$this->load->view('cekkelembaban', $DATA);		
	}

	public function update()
	{
		$suhu =  $this->uri->segment(3);
  		$kelembaban =  $this->uri->segment(4);
		
		$DataInsert = array(
			'suhu' => $suhu,
			'kelembaban' => $kelembaban,
		);
		
		$this->M_Sensor->EditDataSensor($DataInsert);
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datagrafik extends CI_Controller {

    public function index()
	{
		$this->load->view('datagrafik');
	}

	public function cekbanjir()
    {
        $recordSensor = $this -> M_Sensor->getDataSensorlast();
        $DATA = array('data_sensor' => $recordSensor);

        $this -> load->view('cekbanjir', $DATA);
    }
}
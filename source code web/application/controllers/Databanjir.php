<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Databanjir extends CI_Controller {

    public function __construct(){
		parent::__construct();
		$this->load->model('M_Sensor');
	}

    public function index()
	{
		$this->load->view('databanjir');
	}

    public function cekbanjir()
    {
        $recordBanjir = $this->M_Sensor->getDataSensorlast();
     
        // return $this->output->set_content_type('application/json')->set_output(json_encode($recordSensor->banjir));
   
        return $this->output->set_content_type('application/json')->set_output(json_encode(['banjir' => $recordBanjir->banjir, 'flow' => $recordBanjir->flow]));
        
    }

    public function cekflow()
    {
        $recordSensor = $this->M_Sensor->getDataSensorlast();
        $DATA = array('data_sensor' => $recordSensor);

        $this -> load->view('cekflow', $DATA);
    }

    public function update()
	{
        date_default_timezone_set("Asia/Jakarta");
		$banjir =  $this->uri->segment(3);
  		$flow =  $this->uri->segment(4);
        $tanggal = date("Y-m-d H:i:s");
		$DataInsert = array(
			'banjir' => $banjir,
			'flow' => $flow,
            'date' => $tanggal
		);
		
		$this->M_Sensor->EditDataSensor($DataInsert);
	}

    public function insert()
    {
      date_default_timezone_set("Asia/Jakarta");
      $jarak =  $this->uri->segment(3);
      $debit =  $this->uri->segment(4);
      $date = date("Y-m-d H:i:s");
        $Insert = array(
          'jarak' => $banjir,
          'flow' => $debit,
          'date' => $date
      );
      
      $this->M_Sensor->MasukDataSensor($Insert);
    }

    public function notifikasi ()
    {
       
        
    }
}
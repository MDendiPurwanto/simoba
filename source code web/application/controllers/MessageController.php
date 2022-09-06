<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MessageController extends BaseController
{
    public function __construct(){
		parent::__construct();
		$this->load->model('M_Sensor');
	}
    public function index()
	{
		$this->load->view('databanjir');
	}
   
    
	public function showSweetAlertMessages()
	{
		// Flash messages settings

		session()->setFlashdata("success", "This is success message");

		session()->setFlashdata("warning", "This is warning message");

		session()->setFlashdata("info", "This is information message");

		session()->setFlashdata("error", "This is error message");

		return view("sweetalert-notification");
	}
}
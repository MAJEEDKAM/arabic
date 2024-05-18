<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // $this->load->library('Middleware');
    }
	public function index()
	{
        $this->data = $this->middleware->decryptReqData();
        print_r($this->data);exit;

		echo $data;
		// $this->load->view('welcome_message');
	}
}

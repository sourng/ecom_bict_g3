<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()

    {
    	$data['body'] ='backend/v_dashboard';
    	$data['c_name'] =   'dashboard';
    	$data['frm_name']  = 'Manage Dashboard ';
    	$data['page_title']="Dashboard";
    	$data['page_name']  = 'Dashboard';

    	$this->load->view('backend/desktop_list',$data);
    }







}


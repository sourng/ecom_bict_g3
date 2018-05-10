<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('index');	
	}
	
	public function category()
	{
		$this->load->view('category');
		
	}
		public function detail()
	{
		$this->load->view('detail');
		
	}
		public function text()
	{
		$this->load->view('text');
		
	}
		public function category_full()
		{
			$this->load->view('category_full');
		}
		public function category_right()
		{
			$this->load->view('category_right');
		}
			public function register()
		{
			$this->load->view('register');
		}
			public function contact()
		{
			$this->load->view('contact');
		}
			public function customer_orders()
		{
			$this->load->view('customer_orders');
		}



}

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
		public function category_full
		{
			$this->load->view('category-full');
		}
		public function category_right
		{
			$this->load->view('category-right');
		}


}

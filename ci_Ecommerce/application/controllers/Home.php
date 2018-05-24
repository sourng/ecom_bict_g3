<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		// $data['title']="Hotel List Search Result";			
		// $data['body']= 'v_home';
		// $data['dest_count']=$this->m_sourng->count_by_sql("SELECT count(dest_id) as count_dest FROM hotels GROUP BY dest_id",false);
		//$data['hotel_count']=$this->M_impact->("SELECT * FROM tbl_dow);
		
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
			public function customer_wishlist()
		{
			$this->load->view('customer_wishlist'); 
		}
			public function customer_account()
		{
			$this->load->view('customer_account');
		}
			public function basket()
		{
			$this->load->view('basket');
		}
			public function faq()
		{
			$this->load->view('faq');
		}
			public function post()
		{
			$this->load->view('post');
		}
			public function blog()
		{
			$this->load->view('blog');
		}
			public function checkout1()
		{
			$this->load->view('checkout1');
		}
			public function checkout2()
		{
			$this->load->view('checkout2');
		}
			public function checkout3()
		{
			$this->load->view('checkout3');
		}
			public function checkout4()
		{
			$this->load->view('checkout4');
		}





}

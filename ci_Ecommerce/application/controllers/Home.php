<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	  public function __construct()
{
    parent::__construct();

    $this->load->model('M_Crud','mcrud');        
}

	public function index()
	{
	
		$data=array();
		$hotThisWeek="SELECT * FROM tbl_products";
		$data['hotThisWeek']=$this->mcrud->get_by_sql($hotThisWeek);
		
		$this->load->view('index',$data);
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

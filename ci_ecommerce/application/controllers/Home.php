<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	 function __construct() {
	  
        parent::__construct();
 
        $this->load->helper('form');
 
        $this->load->helper('url');
		
		$this->load->model('m_impact', '', true);

    }

	public function index(){

		$data['title']="Resort Booking";
        $data['meta_keywords']="Resort, Booking, Star, Hotel, Information, keywords";
        $data['meta_description']="Star Hotel Information Home description";

// Show Slider 
            /*data['get_slides'] =$this->m_impact->get_by_sql("SELECT * 
                                                              FROM rooms 
                                                              WHERE status=1 
                                                              AND position=1 
                                                              AND deleted=1");*/
             $data['get_products'] =$this->m_impact->get_by_sql("SELECT *
                                                              FROM products
                                                              ");
// Get rooms
             // $data['rooms'] =$this->m_impact->get_by_sql("SELECT rooms.*,room_rates.price 
             //                                                  FROM rooms 
             //                                                  inner join room_rates 
             //                                                  ON rooms.rate_id=room_rates.rate_id 
             //                                                  WHERE status=1 
             //                                                  AND position=1
             //                                                  AND deleted=1
             //                                                  LIMIT 4
             //                                                  ");

            $data['body']= 'index';
            $this->load->view('front/index',$data);
	}
	
	public function category(){

		$this->load->view('front/category');
		
	}

		public function detail(){

		$this->load->view('front/detail');
		
	}
		public function text(){

		$this->load->view('front/text');
		
	}
		public function category_full(){

			$this->load->view('front/category_full');
		}
		public function category_right(){

			$this->load->view('front/category_right');
		}
			public function register(){

			$this->load->view('front/register');
		}
			public function contact(){

			$this->load->view('front/contact');
		}
		
			public function customer_orders(){

			$this->load->view('front/customer_orders');
		}
			public function customer_wishlist(){

			$this->load->view('front/customer_wishlist'); 
		}
			public function customer_account(){

			$this->load->view('front/customer_account');
		}
			public function basket(){

			$this->load->view('front/basket');
		}
			public function faq(){

			$this->load->view('front/faq');
		}
			public function post(){

			$this->load->view('front/post');
		}
			public function blog(){

			$this->load->view('front/blog');
		}
			public function checkout1(){

			$this->load->view('front/checkout1');
		}
			public function checkout2(){

			$this->load->view('front/checkout2');
		}
			public function checkout3(){

			$this->load->view('front/checkout3');
		}
			public function checkout4(){

			$this->load->view('front/checkout4');
		}
}

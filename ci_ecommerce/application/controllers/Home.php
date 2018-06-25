<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	 function __construct() {
	  
        parent::__construct();
 
        $this->load->helper('form');
 
        $this->load->helper('url');
$this->load->library('cart');
		
		$this->load->model('m_impact', '', true);

    }

	public function index(){

		// $wheres = array('rate' => 1 );
		$data['get_banners'] =$this->m_impact->get_by_sql("SELECT * FROM banner");
		$data['get_inpired'] = $this->m_impact->get_by_sql("SELECT * FROM inspired");
	    $data['get_products'] =$this->m_impact->get_by_sql("SELECT * FROM products");
        $data['body']= 'index';

        $this->load->view('front/index',$data);      
	}
	
	public function category(){
		 $data['getcategory'] = $this->m_impact->get_by_sql("SELECT c.*, p.* FROM category AS c JOIN products AS p ON c.category_id=p.category_id");
		// $data['get_products'] = $this->m_impact->get_by_sql("SELECT * FROM products where id=".$id);
		$data['body']= 'index';
		$this->load->view('front/category',$data);
	}
			public function detail($id){

		$data['get_products'] =$this->m_impact->get_by_sql("SELECT * FROM products where id=".$id);
		$data['get_relative'] =$this->m_impact->get_by_sql("SELECT * FROM products WHERE id<>".$id ."	LIMIT 4 " 	);
		$data['body']= 'index';
		$this->load->view('front/detail',$data);		
	}
		public function text(){
		$this->load->view('front/text');		
	}
		public function category_full(){

			$this->load->view('front/category_full');
		}
		public function category_right(){			
			$data['get_shoes'] = $this->m_impact->get_by_sql("SELECT c.*, p.* FROM category AS c JOIN products AS p ON c.category_id=p.category_id WHERE c.category_id=7");
			$data['body']= 'index';
			$this->load->view('front/category_right',$data);
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

			$data['get_products'] =$this->m_impact->get_by_sql("SELECT * FROM products");
			$data['relate_products'] =$this->m_impact->get_by_sql("SELECT * FROM products
																			LIMIT 4");
			$data['body']= 'index';

			$data['cart']  = $this->cart->contents();

			$this->load->view('front/basket',$data);

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

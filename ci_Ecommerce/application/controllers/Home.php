<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	 function __construct() {	  
        parent::__construct(); 
        $this->load->helper('form'); 
        $this->load->helper('url');     
        $this->load->library('cart');		
		$this->load->model('cart_model');
		$this->load->model('m_impact', '', true);
		// Load form helper library
		$this->load->helper('form');

		// Load form validation library
		$this->load->library('form_validation');

		// Load session library
		$this->load->library('session');
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
		
		$data['getOtherPro'] =$this->m_impact->get_by_sql("SELECT * FROM products WHERE id<>".$id);
		$data['body']= 'index';
		$this->load->view('front/detail',$data);		
	}
		public function text(){
		$this->load->view('front/text');		
	}
		public function category_full(){
			$this->load->view('front/category_full');
		}
		public function category_right()
		{			
			$data['get_shoes'] = $this->m_impact->get_by_sql("SELECT c.*, p.* FROM category AS c JOIN products AS p ON c.category_id=p.category_id WHERE c.category_id=7");
			$data['body']= 'index';
			$this->load->view('front/category_right',$data);
		}	
		public function man_cloth()
		{			
			$data['get_cloth'] = $this->m_impact->get_by_sql("SELECT c.*, p.* FROM category AS c JOIN products AS p ON c.category_id=p.category_id WHERE c.category_id=2");
			$data['body']= 'index';
			$this->load->view('front/man_cloth',$data);
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
			$data['body']= 'index';
			$data['cart']  = $this->cart->contents();
			$this->load->model("shopping_cart_model");			
			$data["product"] = $this->shopping_cart_model->fetch_all();	
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
				$data['cart']  = $this->cart->contents();
			$this->load->model("shopping_cart_model");			
			$data["product"] = $this->shopping_cart_model->fetch_all();
			$this->load->view('front/checkout1');
		}


		// 	public function check_login(){
		// 		// $data['get_login'] =$this->m_impact->get_by_sql("SELECT * FROM tbl_login where id=".$id);
		// 		$data['cart']  = $this->cart->contents();
		// 	$this->load->model("shopping_cart_model");			
		// 	$data["product"] = $this->shopping_cart_model->fetch_all();
		// 	$this->load->view('front/check_login',$data);
		// }


			public function checkout2(){
			$this->load->view('front/checkout2');
		}
			public function checkout3(){
			$this->load->view('front/checkout3');
		}
			public function checkout4(){
			$data['cart']  = $this->cart->contents();
			$this->load->model("shopping_cart_model");			
			$data["product"] = $this->shopping_cart_model->fetch_all();
			$this->load->view('front/checkout4', $data);
		}
		
	public function save_order()
	{
	// This will store all values which inserted from user.
	$customer = array(
	'f_name' => $this->input->post('f_name'),
	'l_name' => $this->input->post('l_name'),
	'name' => $this->input->post('name'),
	'email' => $this->input->post('email'),
	'address' => $this->input->post('address'),
	'phone' => $this->input->post('phone')
	);
	// And store user information in database.
	$cust_id = $this->cart_model->insert_customer($customer);
	$order = array(
	'date' => date('Y-m-d'),
	'customerid' => $cust_id
	);
	$ord_id = $this->cart_model->insert_order($order);
	if ($cart = $this->cart->contents()):
	foreach ($cart as $item):
	$order_detail = array(
	'orderid' => $ord_id,
	'productid' => $item['id'],
	'quantity' => $item['qty'],
	'price' => $item['price'],
	'image' => $item['image'],
	'total' => $item['subtotal']
	);
	// Insert product imformation with order detail, store in cart also store in database.
	$cust_id = $this->cart_model->insert_order_detail($order_detail);
	endforeach;
	endif;
	$this->cart->destroy();
	// After storing all imformation in database load "billing_success".
		$this->index();	
	}

	// login

	function login()  
      {  
           //http://localhost/tutorial/codeigniter/main/login  
           $data['title'] = 'CodeIgniter Simple Login Form With Sessions';  
           $this->load->view('front/check_login', $data);  
      }  
      function login_validation()  
      {  
         


           $this->load->library('form_validation');  
           $this->form_validation->set_rules('username', 'Username', 'required');  
           $this->form_validation->set_rules('password', 'Password', 'required');  
           if($this->form_validation->run())  
           {  
                //true  
                $username = $this->input->post('username');  
                $password = $this->input->post('password');  
                //model function  
                $this->load->model('main_model');  
                if($this->main_model->can_login($username, $password))  
                {  
                     $session_data = array(  
                          'username'     =>     $username  
                     );  
                     $this->session->set_userdata($session_data);  
                     redirect(base_url() . 'home/checkout2');  
                }  
                else  
                {  
                     $this->session->set_flashdata('error', 'Invalid Username and Password Pleaase Check And Try Again');  
                     redirect(base_url() . 'home/login');  
                }  
           }  
           else  
           {  
                //false  
                $this->login();  
               
             
           }  
      }  
      function enter(){  
           if($this->session->userdata('username') != '')  
           {  
                echo '<h2>Welcome - '.$this->session->userdata('username').'</h2>';  
                echo '<label><a href="'.base_url().'home/checkout2">Logout</a></label>';  
           }  
           else  
           {  
                redirect(base_url() . 'home/check_login');  
           }  
      }  
      function logout()  
      {  
           $this->session->unset_userdata('username');  
           redirect(base_url() . 'main/login');  
      }  


      // End LogIN


      // Check Out Order
      public function save_check_out(){
    $data=array();
    // tab 1
    // $f_name=$_POST['f_name'];
    // $l_name=$_POST['l_name'];
    // $name=$_POST['name'];
    // // $company=$_POST['company'];
    // $phone=$_POST['phone'];
    // $email=$_POST['email'];
    // $street=$_POST['street'];
    // $zip=$_POST['zip'];
    // $state=$_POST['state'];
    // $country=$_POST['country'];
    // $password=$_POST['password'];



   
    // //tab2
    // $bus=$_POST['bus'];
    // $flight=$_POST['flight'];
    // $cruise=$_POST['cruise'];

    // //tab3
    // $paypal=$_POST['paypal'];
    // $mastercard=$_POST['mastercard'];
    // $cash=$_POST['cash'];

    //tab final
    /*$rowid=$_POST['rowid'];
    $qty=$_POST['qty'];
    $subtotal=$_POST['subtotal'];
    $grand_total=$_POST['$grand_total'];*/
         
// //echo test 
//     echo " First Name : " . $f_name ." Last Name:".$lname ." Company:".$company ." Phone:".$phone." Email:".$email." Street:".$street." Zip:".$zip." State:".$state." Country:".$country." Password:".$password." Bus:".$bus." Flight:".$flight." Cruise:".$cruise." Paypal:".$paypal." Mastercard:".$mastercard." Cash:".$cash;

    $this->load->view('front/checkout1');
    
  }

  // End Check Out Order


	

}

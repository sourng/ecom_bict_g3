<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() 
    { 
        parent::__construct();
 
        $this->load->helper('form');
 
        $this->load->helper('url');
		    $this->load->model('m_impact', '', true);

    }

	public function index()
	{
//Configure SEO
            $data['title']="Resort Booking";
            $data['meta_keywords']="Resort, Booking, Star, Hotel, Information, keywords";
            $data['meta_description']="Star Hotel Information Home description";


// Show Slider 
            $data['get_products'] =$this->m_impact->get_by_sql("SELECT * 
                                                              FROM products 
                                                              WHERE status=1 
                                                              -- AND position=1 
                                                              -- AND deleted=1
                                                              "
                                                            );
             // $data['room_types'] =$this->m_impact->get_by_sql("SELECT *
             //                                                  FROM room_types
             //                                                  ");

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

// room_galleries
            // $data['galleries']   =$this->m_impact->get_by_sql("SELECT * 
            //                                                       FROM galleries
            //                                                       WHERE status=1 
            //                                                       AND position=1 or 2
            //                                                       AND deleted=1
            //                                                       LIMIT 4");

            /*$data['get_usps']   =$this->m_impact->get_by_sql("SELECT * 
                                                              FROM uspsection
                                                              WHERE status=1 
                                                              AND position=1 */
            //Load view
            $data['body']= 'home';
            $this->load->view('front/home',$data);
	}

    public function category(){

        //Configure SEO
        $data['title']="Resort Booking";
        $data['meta_keywords']="Resort, Booking, Star, Hotel, Information, keywords";
        $data['meta_description']="Star Hotel Information Home description";


        $data['get_products'] =$this->m_impact->get_by_sql("SELECT * 
                                                              FROM products 
                                                              WHERE status=1 
                                                              -- AND position=1 
                                                              -- AND deleted=1
                                                              "
                                                            );
        $data['body']= 'category';
        $this->load->view('front/category',$data);
        
    }

        public function detail(){

        $data['title']="Resort Booking";
        $data['meta_keywords']="Resort, Booking, Star, Hotel, Information, keywords";
        $data['meta_description']="Star Hotel Information Home description";


        $data['get_products'] =$this->m_impact->get_by_sql("SELECT * 
                                                              FROM products 
                                                              WHERE status=1 
                                                              -- AND position=1 
                                                              -- AND deleted=1
                                                              "
                                                            );
        $data['body']= 'detail';
        $this->load->view('front/detail',$data);
        
    }
        public function text(){
        
        $data['title']="Resort Booking";
        $data['meta_keywords']="Resort, Booking, Star, Hotel, Information, keywords";
        $data['meta_description']="Star Hotel Information Home description";


        $data['get_products'] =$this->m_impact->get_by_sql("SELECT * 
                                                              FROM products 
                                                              WHERE status=1 
                                                              -- AND position=1 
                                                              -- AND deleted=1
                                                              "
                                                            );
        $data['body']= 'text';
        $this->load->view('front/text',$data);
        
    }
        public function category_full(){
            
        $data['title']="Resort Booking";
        $data['meta_keywords']="Resort, Booking, Star, Hotel, Information, keywords";
        $data['meta_description']="Star Hotel Information Home description";


        $data['get_products'] =$this->m_impact->get_by_sql("SELECT * 
                                                              FROM products 
                                                              WHERE status=1 
                                                              -- AND position=1 
                                                              -- AND deleted=1
                                                              "
                                                            );
        $data['body']= 'category_full';
        $this->load->view('front/category_full',$data);
        }
        public function category_right(){
            
        $data['title']="Resort Booking";
        $data['meta_keywords']="Resort, Booking, Star, Hotel, Information, keywords";
        $data['meta_description']="Star Hotel Information Home description";


        $data['get_products'] =$this->m_impact->get_by_sql("SELECT * 
                                                              FROM products 
                                                              WHERE status=1 
                                                              -- AND position=1 
                                                              -- AND deleted=1
                                                              "
                                                            );
        $data['body']= 'category_right';
        $this->load->view('front/category_right',$data);
        }
        
        public function register(){
            
        $data['title']="Resort Booking";
        $data['meta_keywords']="Resort, Booking, Star, Hotel, Information, keywords";
        $data['meta_description']="Star Hotel Information Home description";


        $data['get_products'] =$this->m_impact->get_by_sql("SELECT * 
                                                              FROM products 
                                                              WHERE status=1 
                                                              -- AND position=1 
                                                              -- AND deleted=1
                                                              "
                                                            );
        $data['body']= 'register';
        $this->load->view('front/register',$data);
        }

        public function contact(){

            $data['title']="Resort Booking";
            $data['meta_keywords']="Resort, Booking, Star, Hotel, Information, keywords";
            $data['meta_description']="Star Hotel Information Home description";


            $data['get_products'] =$this->m_impact->get_by_sql("SELECT * 
                                                                  FROM products 
                                                                  WHERE status=1 
                                                                  -- AND position=1 
                                                                  -- AND deleted=1
                                                                  "
                                                                );
            $data['body']= 'contact';
            $this->load->view('front/contact',$data);
        }
        
        public function customer_orders(){
            
            $data['title']="Resort Booking";
            $data['meta_keywords']="Resort, Booking, Star, Hotel, Information, keywords";
            $data['meta_description']="Star Hotel Information Home description";


            $data['get_products'] =$this->m_impact->get_by_sql("SELECT * 
                                                                  FROM products 
                                                                  WHERE status=1 
                                                                  -- AND position=1 
                                                                  -- AND deleted=1
                                                                  "
                                                                );
            $data['body']= 'customer_orders';
            $this->load->view('front/customer_orders',$data);
        }
            
        public function customer_wishlist(){

            $data['title']="Resort Booking";
            $data['meta_keywords']="Resort, Booking, Star, Hotel, Information, keywords";
            $data['meta_description']="Star Hotel Information Home description";


            $data['get_products'] =$this->m_impact->get_by_sql("SELECT * 
                                                                  FROM products 
                                                                  WHERE status=1 
                                                                  -- AND position=1 
                                                                  -- AND deleted=1
                                                                  "
                                                                );
            $data['body']= 'customer_wishlist';
            $this->load->view('front/customer_wishlist',$data); 
        }
            
        public function customer_account(){

            $data['title']="Resort Booking";
            $data['meta_keywords']="Resort, Booking, Star, Hotel, Information, keywords";
            $data['meta_description']="Star Hotel Information Home description";


            $data['get_products'] =$this->m_impact->get_by_sql("SELECT * 
                                                                  FROM products 
                                                                  WHERE status=1 
                                                                  -- AND position=1 
                                                                  -- AND deleted=1
                                                                  "
                                                                );
            $data['body']= 'customer_account';
            $this->load->view('front/customer_account',$data);
        }
            public function basket(){
            
            $data['title']="Resort Booking";
            $data['meta_keywords']="Resort, Booking, Star, Hotel, Information, keywords";
            $data['meta_description']="Star Hotel Information Home description";


            $data['get_products'] =$this->m_impact->get_by_sql("SELECT * 
                                                                  FROM products 
                                                                  WHERE status=1 
                                                                  -- AND position=1 
                                                                  -- AND deleted=1
                                                                  "
                                                                );
            $data['body']= 'basket';
            $this->load->view('front/basket',$data);
        }
            
        public function faq(){
            
            $data['title']="Resort Booking";
            $data['meta_keywords']="Resort, Booking, Star, Hotel, Information, keywords";
            $data['meta_description']="Star Hotel Information Home description";


            $data['get_products'] =$this->m_impact->get_by_sql("SELECT * 
                                                                  FROM products 
                                                                  WHERE status=1 
                                                                  -- AND position=1 
                                                                  -- AND deleted=1
                                                                  "
                                                                );
            $data['body']= 'faq';
            $this->load->view('front/faq',$data);
        }
            
        public function post(){

            $data['title']="Resort Booking";
            $data['meta_keywords']="Resort, Booking, Star, Hotel, Information, keywords";
            $data['meta_description']="Star Hotel Information Home description";


            $data['get_products'] =$this->m_impact->get_by_sql("SELECT * 
                                                                  FROM products 
                                                                  WHERE status=1 
                                                                  -- AND position=1 
                                                                  -- AND deleted=1
                                                                  "
                                                                );
            $data['body']= 'post';
            $this->load->view('front/post',$data);
        }
            
        public function blog(){

            $data['title']="Resort Booking";
            $data['meta_keywords']="Resort, Booking, Star, Hotel, Information, keywords";
            $data['meta_description']="Star Hotel Information Home description";


            $data['get_products'] =$this->m_impact->get_by_sql("SELECT * 
                                                                  FROM products 
                                                                  WHERE status=1 
                                                                  -- AND position=1 
                                                                  -- AND deleted=1
                                                                  "
                                                                );
            $data['body']= 'blog';
            $this->load->view('front/blog',$data);
        }
            
        public function checkout1(){

            $data['title']="Resort Booking";
            $data['meta_keywords']="Resort, Booking, Star, Hotel, Information, keywords";
            $data['meta_description']="Star Hotel Information Home description";


            $data['get_products'] =$this->m_impact->get_by_sql("SELECT * 
                                                                  FROM products 
                                                                  WHERE status=1 
                                                                  -- AND position=1 
                                                                  -- AND deleted=1
                                                                  "
                                                                );
            $data['body']= 'checkout1';
            $this->load->view('front/checkout1',$data);
        }
            
        public function checkout2(){
            
            $data['title']="Resort Booking";
            $data['meta_keywords']="Resort, Booking, Star, Hotel, Information, keywords";
            $data['meta_description']="Star Hotel Information Home description";


            $data['get_products'] =$this->m_impact->get_by_sql("SELECT * 
                                                                  FROM products 
                                                                  WHERE status=1 
                                                                  -- AND position=1 
                                                                  -- AND deleted=1
                                                                  "
                                                                );
            $data['body']= 'checkout2';
            $this->load->view('front/checkout2',$data);
        }
            public function checkout3(){

            $data['title']="Resort Booking";
            $data['meta_keywords']="Resort, Booking, Star, Hotel, Information, keywords";
            $data['meta_description']="Star Hotel Information Home description";


            $data['get_products'] =$this->m_impact->get_by_sql("SELECT * 
                                                                  FROM products 
                                                                  WHERE status=1 
                                                                  -- AND position=1 
                                                                  -- AND deleted=1
                                                                  "
                                                                );
            $data['body']= 'checkout3';
            $this->load->view('front/checkout3',$data);
        }
            
        public function checkout4(){

            $data['title']="Resort Booking";
            $data['meta_keywords']="Resort, Booking, Star, Hotel, Information, keywords";
            $data['meta_description']="Star Hotel Information Home description";


            $data['get_products'] =$this->m_impact->get_by_sql("SELECT * 
                                                                  FROM products 
                                                                  WHERE status=1 
                                                                  -- AND position=1 
                                                                  -- AND deleted=1
                                                                  "
                                                                );
            $data['body']= 'checkout4';
            $this->load->view('front/checkout4',$data);
        }
}

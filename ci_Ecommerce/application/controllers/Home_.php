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
            /*data['get_slides'] =$this->m_impact->get_by_sql("SELECT * 
                                                              FROM rooms 
                                                              WHERE status=1 
                                                              AND position=1 
                                                              AND deleted=1");*/
             $data['room_types'] =$this->m_impact->get_by_sql("SELECT *
                                                              FROM room_types
                                                              ");

// Get rooms
             $data['rooms'] =$this->m_impact->get_by_sql("SELECT rooms.*,room_rates.price 
                                                              FROM rooms 
                                                              inner join room_rates 
                                                              ON rooms.rate_id=room_rates.rate_id 
                                                              WHERE status=1 
                                                              AND position=1
                                                              AND deleted=1
                                                              LIMIT 4
                                                              ");

// room_galleries
            $data['galleries']   =$this->m_impact->get_by_sql("SELECT * 
                                                                  FROM galleries
                                                                  WHERE status=1 
                                                                  AND position=1 or 2
                                                                  AND deleted=1
                                                                  LIMIT 4");

            /*$data['get_usps']   =$this->m_impact->get_by_sql("SELECT * 
                                                              FROM uspsection
                                                              WHERE status=1 
                                                              AND position=1 */
            //Load view
            $data['body']= 'home';
            $this->load->view('front/home',$data);
	}
}

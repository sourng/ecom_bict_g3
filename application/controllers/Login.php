<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	// 	function __construct() 
	//     { 
	//         parent::__construct();
	//         $this->load->helper('form'); 
	//         $this->load->helper('url');
	//        $this->load->model('m_crud', '', true);	
	 		
	//     }

	// public function signin(){
	// 	$user_name = $this->input->post('user_name');
 //      	$password = $this->input->post('password');
	// 	$data['login']=$this->m_crud->get_by_sql(
	// 	"SELECT * from tbl_login where user_name='$user_name' and password='$password'"		
	// 	);
		
	// }
	 public function sigin(){
      $user_name = $this->input->post('user_name');
      $password = $this->input->post('password');
      
      $data = array(
          'user_name' => $user_name,
          'password' =>$password
      );  
     // $this->load->view('tbl_login',$data); 
      $this->db->insert('tbl_login', $data);
  }
}

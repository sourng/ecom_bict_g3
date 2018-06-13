<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Galleries extends CI_Controller {

    function __construct()

    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->model('m_users');
        $this->load->helper(array('form', 'url'));
        /*cache control*/
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        //$this->load->model('m_ps', '', true);
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }


    function index($offset = ''){
        $data['page_name']  = 'Galleries Admin';
        $data['c_name'] =   'galleries';
        $data['frm_name']  = 'Manage Galleries';
        $data['page_title']="List All Galleries";
        

        $data['galleries']=$this->m_ps->get_by_sql('SELECT * FROM galleries');
        $data['body'] ='backend/galleries/v_list';

        $this->load->view('backend/desktop_list',$data);
    }

	
	
	function canceled($offset = ''){
		$data['page_name']  = 'Hotel Admin';
        $data['c_name']='users';
        $data['frm_name']  = 'Manage Users';

        // $page_data['page_title'] = get_phrase('admin_dashboard');

        $data['page_title']="List All Users";
        $data['users']=$this->m_ps->get_by_sql('SELECT * FROM users');
        $data['body'] ='backend/users/v_list';
        $this->load->view('backend/desktop_list',$data);
		
	}

    function trash($offset = ''){
        $data['page_name']  = 'Hotel Admin';
        $data['c_name']='users';
        $data['frm_name']  = 'Manage Users in Trash';
        // $page_data['page_title'] = get_phrase('admin_dashboard');
        $data['page_title']="List All Users in trash";

        $data['users']=$this->m_ps->get_by_sql('SELECT * FROM users WHERE status=0');
        $data['body'] ='backend/users/v_trash';
        $this->load->view('backend/desktop_list',$data);
    }

    public function profile($id = false){
        $data['page_name']  = 'Hotel Admin';
        $data['c_name']='users';
        $data['frm_name']  = 'Profile Users';
        // $page_data['page_title'] = get_phrase('admin_dashboard');

        $data['page_title']="User Profile";
       // $id = $this->m_ps->encrypt_decrypt('decrypt', $id);
        // get category
        //$where = array('public' => 1);
       // $data['tourtype']	=	$this->m_ps->get_by_fields('tour_type',$where,'tour_type_id');
        $where_tour = array('uid' => $id);
        $data['users_profile']	=	$this->m_ps->get_by_fields('users',$where_tour,'uid');

        //$data['tourtype']=$this->m_ps->get_by_sql('SELECT * FROM tour_type');
        $data['body']='backend/users/v_profile';
        $this->load->view('backend/desktop_form',$data);

    }


    public function add(){

        $data['page_name']  = 'Hotel Admin';
        $data['c_name']='galleries';
        $data['frm_name']  = 'Add New Gallery';        
        $data['page_title']="Add New Gallery";       
        $data['body']='backend/galleries/v_new';

        $data['rate']=$this->m_ps->get_by_sql('SELECT * FROM room_rates');
        $data['room_type']=$this->m_ps->get_by_sql('SELECT * FROM room_types');
        $data['rooms']=$this->m_ps->get_by_sql('SELECT * FROM rooms');
        $data['position ']=$this->m_ps->get_by_sql('SELECT * FROM position');
        $data['galleries']=$this->m_ps->get_by_sql('SELECT * FROM galleries');




        $this->load->view('backend/desktop_form',$data);
    }

     public function page_edit($id){

        $id = $this->m_ps->encrypt_decrypt('decrypt', $id);
        $data['page_name']  = 'Hotel Admin';
        $data['c_name']='galleries';
        $data['frm_name']  = 'Add New gallery';        
        $data['page_title']="Add New gallery"; 

        $data['galleries']=$this->m_ps->get_by_sql('SELECT galleries.*,rooms.room_title
                                                    FROM   galleries
                                                    inner join rooms ON galleries.room_id=rooms.room_id
                                                    WHERE rg_id='.$id);
        $data['position']=$this->m_ps->get_by_sql('SELECT * FROM position');
        $data['room_type']=$this->m_ps->get_by_sql('SELECT * FROM room_type');
       

        $data['body']='backend/galleries/v_edit';        
        $this->load->view('backend/desktop_form',$data);
    }

    function set_status($id, $rate){

        $id = $this->m_ps->encrypt_decrypt('decrypt', $id);
        $where	= array('rg_id' => $id);
        $data_arr = array(

            'status'			=> $rate == 1 ? 0 : 1,
            'user_create' 		=> $this->session->userdata('uid'),
            'updated_date' 		=> date('Y-m-d H:i:s')
        );

        $result	=	$this->m_ps->update_field('galleries', $data_arr, $where);
        if($result){

            $this->session->set_userdata('message', $this->connect->message("galleries has been updated!", "success"));

        }else{

            $this->session->set_userdata('message', $this->connect->message("Error!", "warning"));

        }
        redirect(site_url().'backend/galleries', 'location', 302);

    }

    function set_deleted($id, $rate){
        $id = $this->m_ps->encrypt_decrypt('decrypt', $id);
        $where	= array('rg_id' => $id);
        $data_arr = array(
            'deleted'				=> $rate == 1 ? 0 : 1,
            'user_create' 		=> $this->session->userdata('uid'),
            'updated_date' 		=> date('Y-m-d H:i:s')
        );
        $result	=	$this->m_ps->update_field('galleries', $data_arr, $where);
        if($result){

            $this->session->set_userdata('message', $this->connect->message("Rooms has been updated!", "success"));
        }else{

            $this->session->set_userdata('message', $this->connect->message("Error!", "warning"));
        }
        redirect(site_url().'backend/galleries', 'location', 302);
    }


    function save($tbl){

        if($this->input->post('userSubmit')){
                //Check whether user upload picture
                if(!empty($_FILES['picture']['name'])){
                    //$date = str_replace( ':', '', $date);

                    if (!is_dir('uploads/'.$tbl)) {

                        mkdir('./uploads/' . $tbl, 0777, TRUE);
                        $config['upload_path'] = 'uploads/'.$tbl.'/';
                        $config['allowed_types'] = 'jpg|jpeg|png|gif';
                        $config['file_name'] = $_FILES['picture']['name'];

                    }else{

                        $config['upload_path'] = 'uploads/'.$tbl.'/';
                        $config['allowed_types'] = 'jpg|jpeg|png|gif';
                        $config['file_name'] = $_FILES['picture']['name'];

                    }

                    //Load upload library and initialize configuration

                    $this->load->library('upload',$config);
                    $this->upload->initialize($config);
                    if($this->upload->do_upload('picture')){
                        $uploadData = $this->upload->data();
                        $picture = $uploadData['file_name'];
                    }else{
                        $picture = 'default1.png';
                    }
                }else{
                    $picture = 'default1.png';
                }



                $userData = array(

                    'title' => $this->input->post('title'),
                    'link' => $this->input->post('link'),
                    'rt_id' => $this->input->post('rt_id'),
                    'desc' => $this->input->post('desc'),
                    'user_create' => $this->session->userdata('uid'),
                    'publish_date' =>  date('Y-m-d H:i:s'),
                    'position' =>$this->input->post('position'),
                    'image' => $picture                 
                     );

                 //Pass user data to model
                $insertUserData = $this->m_ps->insert($tbl,$userData,'');
                //Storing insertion status message.
                if($insertUserData){

                    $this->session->set_flashdata('success_msg', 'Room data have been added successfully.');

                }else{

                    $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');

                }

            }
        redirect(site_url().'backend/galleries/add', 'location', 302);
    }




    function update($tbl){
        $id = $this->m_ps->encrypt_decrypt('decrypt', $this->input->post('id'));
        $where  = array('rg_id' => $id);


        if($this->input->post('userSubmit')){
                //Check whether user upload picture
                if(!empty($_FILES['picture']['name'])){
                    //$date = str_replace( ':', '', $date);

                    if (!is_dir('uploads/'.$tbl)) {

                        mkdir('./uploads/' . $tbl, 0777, TRUE);
                        $config['upload_path'] = 'uploads/'.$tbl.'/';
                        $config['allowed_types'] = 'jpg|jpeg|png|gif';
                        $config['file_name'] = $_FILES['picture']['name'];

                    }else{

                        $config['upload_path'] = 'uploads/'.$tbl.'/';
                        $config['allowed_types'] = 'jpg|jpeg|png|gif';
                        $config['file_name'] = $_FILES['picture']['name'];
                    }

                    //Load upload library and initialize configuration

                    $this->load->library('upload',$config);
                    $this->upload->initialize($config);
                    if($this->upload->do_upload('picture')){
                        $uploadData = $this->upload->data();
                        $picture = $uploadData['file_name'];
                    }else{
                        $picture = 'default1.png';
                    }
                }else{
                    $picture = $this->input->post('old_image');
                }


                //Prepare array of user data

                $userData = array(

                    'title' => $this->input->post('title'),
                    'link' => $this->input->post('link'),
                    'rt_id' => $this->input->post('rt_id'),
                    'desc' => $this->input->post('desc'),
                    'tags' => $this->input->post('tags'),
                    'note'=>$this->input->post('note'),
                    'user_create' => $this->session->userdata('uid'),
                    'publish_date' =>  date('Y-m-d H:i:s'),
                    'position' =>$this->input->post('position'),
                    'image' => $picture

                );



                //Pass user data to model

                $insertUserData = $this->m_ps->update_field($tbl,$userData, $where);
                //Storing insertion status message.
                if($insertUserData){

                    $this->session->set_flashdata('success_msg', 'Room data have been added successfully.');

                }else{

                    $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');

                }

            }
        redirect(site_url().'backend/galleries', 'location', 302);
    }
}

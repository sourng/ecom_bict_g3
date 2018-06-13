<?php


defined('BASEPATH') OR exit('No direct script access allowed');


class Menus extends CI_Controller {

    function __construct()

    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->model('m_users','m_videos');
        $this->load->helper(array('form', 'url'));

        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');

        //  $this->load->model('m_ps', '', true);

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    function index($offset = ''){
        $data['page_name']  = 'Menu';
        $data['c_name']='menus';
        $data['frm_name']  = 'Manage Menu';
        // $page_data['page_title'] = get_phrase('admin_dashboard');
        $data['page_title']="List All Menu";

        /* pagination */

//        $selects	= "		tbl_product.*,
//						tbl_category.name AS cat_name
//					  ";
//        $joins		= array(
//            'tbl_category'		=> array('tbl_product.cat_id = tbl_category.id', 'LEFT')
//        );
//        $wheres = FALSE;
//        $likes = FALSE;
//        $limit = FALSE;
//        $data['menus'] = $this->m_ps->join_by_filter('tbl_product', $selects, $joins, $wheres, $likes, '', 'id', 'DESC', '', $limit, $offset);

        $data['menus']=$this->m_ps->get_by_sql('SELECT * FROM menus');
        $data['body'] ='backend/menus/v_list';
        $this->load->view('backend/desktop_list',$data);
    }

    function sub_menu($offset = ''){
        $data['page_name']  = 'Menu Admin';
        $data['c_name']='menu';
        $data['frm_name']  = 'Manage Menu';
        // $page_data['page_title'] = get_phrase('admin_dashboard');
        $data['page_title']="List All Menu";

        /* pagination */

//        $selects	= "		tbl_product.*,
//						tbl_category.name AS cat_name
//					  ";
//        $joins		= array(
//            'tbl_category'		=> array('tbl_product.cat_id = tbl_category.id', 'LEFT')
//        );
//        $wheres = FALSE;
//        $likes = FALSE;
//        $limit = FALSE;
//        $data['menus'] = $this->m_ps->join_by_filter('tbl_product', $selects, $joins, $wheres, $likes, '', 'id', 'DESC', '', $limit, $offset);

        $data['menus_sub']=$this->m_ps->get_by_sql('SELECT * FROM menu_item');
        $data['body'] ='backend/menus/v_list_sub';
        $this->load->view('backend/desktop_list',$data);
    }



    function trash($offset = ''){
        $data['page_name']  = 'Hotel Menu';
        $data['c_name']='menus';
        $data['frm_name']  = 'Manage Menu in Trash';
        // $page_data['page_title'] = get_phrase('admin_dashboard');
        $data['page_title']="List All Menus in trash";

        $data['videos']=$this->m_ps->get_by_sql('SELECT * FROM menus WHERE status=0');
        $data['body'] ='backend/menus/v_list';

        $this->load->view('backend/desktop_list',$data);
    }


    public function add(){
        $data['page_name']  = 'Menu';
        $data['c_name']='menus';
        $data['frm_name']  = 'menu';
        // $page_data['page_title'] = get_phrase('admin_dashboard');

        $data['page_title']="Add New Menu";
        // $id = $this->m_ps->encrypt_decrypt('decrypt', $id);

        // get category
        //$where = array('public' => 1);

        // $data['tourtype']	=	$this->m_ps->get_by_fields('tour_type',$where,'tour_type_id');
       $data['menu']=$this->m_ps->get_by_sql('SELECT * FROM menus');
        $data['body']='backend/menus/v_new';
        $this->load->view('backend/desktop_form',$data);
    }

 

    function set_status($id, $rate){
        $id = $this->m_ps->encrypt_decrypt('decrypt', $id);
        $where	= array('mmenu_id' => $id);
        $data_arr = array(
            'deleted'			=> $rate == 1 ? 0 : 1,
            'user_create' 		=> $this->session->userdata('name'),
            'updated_date' 		=> date('Y-m-d H:i:s')
        );

        $result	=	$this->m_ps->update_field('menus', $data_arr, $where);
        if($result){
            $this->session->set_userdata('message', $this->connect->message("tour has been updated!", "success"));
        }else{
            $this->session->set_userdata('message', $this->connect->message("Error!", "warning"));
        }
        redirect(site_url().'backend/menus/', 'location', 302);
    }


    function save($tbl){
        if($this->input->post('Submit')){
 
            //Prepare array of user data
            $userData = array(

                'mmenu_id' => $this->session->userdata('mmenu_id'),
                'main_menu' => $this->input->post('main_menu'),
                'url' => $this->input->post('url'),
                'desc' => $this->input->post('desc'),
                'create_date' =>  date('Y-m-d H:i:s'),
                'status' => 1,
            );

            $insertUserData = $this->m_ps->insert($tbl,$userData,'');
                //Storing insertion status message.
                if($insertUserData){

                    $this->session->set_flashdata('success_msg', 'Room data have been added successfully.');

                }else{

                    $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');

                }
            }
        redirect(site_url().'backend/menus/add', 'location', 302);
    }


    function edit($id){
        $data['page_name']  = 'Menu Admin';
        $data['c_name']='menus';
        $data['frm_name']  = 'Edit Menus';
        $data['page_title']="Edit Menus";
        
        $data['menus']=$this->m_ps->get_by_sql('SELECT * FROM menus WHERE mmenu_id='.$id);

        $data['body']='backend/menus/v_edit';

        $this->load->view('backend/desktop_form',$data);
    }

    
    function update(){
        $id = $this->m_ps->encrypt_decrypt('decrypt', $this->input->post('id'));
        //Prepare array of user data
        $where	= array('vid' => $id);
        $videoData = array(

            'uid' => $this->session->userdata('uid'),
            'vc_id' => $this->input->post('vc_id'),
            'name' => $this->input->post('name'),
            'description' => $this->input->post('description'),

            'status' => 1,
        );

        redirect(site_url().'backend/videos', 'location', 302);
    }


    function slug($string) {

        // Replace all non letters, numbers, spaces or hypens
        $string = preg_replace('/[^\-\sa-zA-Z0-9]+/', '', mb_strtolower($string));

        // Replace spaces and duplicate hyphens with a single hypen
        $string = preg_replace('/[\-\s]+/', '-', $string);

        // Trim off left and right hypens
        $string = trim($string, '-');

        return $string;
    }

    function createSlug($slug) {

        $lettersNumbersSpacesHyphens = '/[^\-\s\pN\pL]+/u';
        $spacesDuplicateHypens = '/[\-\s]+/';

        $slug = preg_replace($lettersNumbersSpacesHyphens, '', $slug);
        $slug = preg_replace($spacesDuplicateHypens, '-', $slug);

        $slug = trim($slug, '-');

        return mb_strtolower($slug, 'UTF-8');
    }
}


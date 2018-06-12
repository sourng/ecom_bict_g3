<?php

/**

 * Created by PhpStorm.

 * User: SENG Sourng

 * Date: 1/20/2017

 * Time: 9:07 PM

 */

defined('BASEPATH') OR exit('No direct script access allowed');



class Videos extends CI_Controller {

    function __construct()

    {
        parent::__construct();

        $this->load->database();

        $this->load->library('session');

        $this->load->model('m_users','m_videos');



        $this->load->helper(array('form', 'url'));



        /*cache control*/

        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');

        $this->output->set_header('Pragma: no-cache');



        //  $this->load->model('m_ps', '', true);

        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');



    }







    function index($offset = ''){

        $data['page_name']  = 'Video Admin';

        $data['c_name']='videos';

        $data['frm_name']  = 'Manage videos';

        // $page_data['page_title'] = get_phrase('admin_dashboard');

        $data['page_title']="List All videos";

        /* pagination */

//        $selects	= "		tbl_product.*,

//						tbl_category.name AS cat_name

//					  ";

//        $joins		= array(

//            'tbl_category'		=> array('tbl_product.cat_id = tbl_category.id', 'LEFT')

//        );

//        $wheres = FALSE;

//        $likes = FALSE;

//

//        $limit = FALSE;

//

//        $data['products'] = $this->m_ps->join_by_filter('tbl_product', $selects, $joins, $wheres, $likes, '', 'id', 'DESC', '', $limit, $offset);

        $data['videos']=$this->m_ps->get_by_sql('SELECT * FROM videos');

        $data['body'] ='backend/videos/v_list';

        $this->load->view('backend/desktop_list',$data);

    }



    function trash($offset = ''){

        $data['page_name']  = 'Hotel Admin';

        $data['c_name']='videos';

        $data['frm_name']  = 'Manage videos in Trash';

        // $page_data['page_title'] = get_phrase('admin_dashboard');

        $data['page_title']="List All videos in trash";



        $data['videos']=$this->m_ps->get_by_sql('SELECT * FROM videos WHERE status=0');

        $data['body'] ='backend/videos/v_trash';

        $this->load->view('backend/desktop_list',$data);

    }



    /*

    page edit

    */


    public function add(){
        $data['page_name']  = 'Videos Admin';
        $data['c_name']='videos';
        $data['frm_name']  = 'Add New Video';
        // $page_data['page_title'] = get_phrase('admin_dashboard');

        $data['page_title']="Add New Video";
        // $id = $this->m_ps->encrypt_decrypt('decrypt', $id);

        // get category
        //$where = array('public' => 1);

        // $data['tourtype']	=	$this->m_ps->get_by_fields('tour_type',$where,'tour_type_id');

       $data['video_category']=$this->m_ps->get_by_sql('SELECT * FROM video_category');
        $data['body']='backend/videos/v_new';
        $this->load->view('backend/desktop_form',$data);

    }







    /*

        page set public

        */

    function set_status($id, $rate){

        $id = $this->m_ps->encrypt_decrypt('decrypt', $id);

        $where	= array('uid' => $id);

        $data_arr = array(

            'status'				=> $rate == 1 ? 0 : 1,

            'user_create' 		=> $this->session->userdata('name'),

            'updated_date' 		=> date('Y-m-d H:i:s')

        );

        $result	=	$this->m_ps->update_field('videos', $data_arr, $where);



        if($result){

            $this->session->set_userdata('message', $this->connect->message("tour has been updated!", "success"));

        }else{

            $this->session->set_userdata('message', $this->connect->message("Error!", "warning"));

        }



        redirect(site_url().'backend/videos', 'location', 302);

    }



    /*

    page set public

    */

    function set_deleted($id, $rate){
        $id = $this->m_ps->encrypt_decrypt('decrypt', $id);
        $where	= array('uid' => $id);
        $data_arr = array(
            'deleted'				=> $rate == 1 ? 0 : 1,
            'user_create' 		=> $this->session->userdata('name'),
            'updated_date' 		=> date('Y-m-d H:i:s')
        );

        $result	=	$this->m_ps->update_field('videos', $data_arr, $where);
        if($result){
            $this->session->set_userdata('message', $this->connect->message("tour has been updated!", "success"));
        }else{
            $this->session->set_userdata('message', $this->connect->message("Error!", "warning"));
        }
        redirect(site_url().'backend/videos', 'location', 302);
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
                $picture = 'default2.png';
            }



            //Prepare array of user data
            $picture=$this->getYoutubeImageUrl($this->input->post('video'),0,0);

            $videoData = array(

                'uid' => $this->session->userdata('uid'),
                'vc_id' => $this->input->post('vc_id'),
                'name' => $this->input->post('name'),
                'slug' => $this->createSlug($this->input->post('name')),
                'video' => $this->input->post('video'),
                'description' => $this->input->post('description'),
                'meta_key' => $this->input->post('tags'),
                'meta_description' => $this->input->post('meta_description'),
                'photo' => $picture,
                'tags' => $this->input->post('tags'),
                'duration'=>$this->input->post('duration'),
                'status' => 1,
                'views' => 1
            );



            //Pass user data to model

            $insertVideoData = $this->m_ps->insert($tbl,$videoData,'');
            //Storing insertion status message.
            if($insertVideoData){
                $this->session->set_flashdata('success_msg', 'User data have been added successfully.');
            }else{
                $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
            }
        }
        redirect(site_url().'backend/videos/add', 'location', 302);
    }





    /*
  page edit
  */
    function edit($id = false){
        $data['page_name']  = 'Video Admin';
        $data['c_name']='videos';
        $data['frm_name']  = 'Edit Videos';
        // $page_data['page_title'] = get_phrase('admin_dashboard');
        $data['page_title']="Edit Video";
      $id = $this->m_ps->encrypt_decrypt('decrypt', $id);
        $data['video_category']=$this->m_ps->get_by_sql('SELECT * FROM video_category');
        $data['all_videos']=$this->m_ps->get_by_sql('SELECT * FROM videos WHERE vid='.$id);
        $data['body']='backend/videos/v_edit';
        $this->load->view('backend/desktop_form',$data);
    }


    /*
    page update data
    */
    function update(){
        $id = $this->m_ps->encrypt_decrypt('decrypt', $this->input->post('id'));
        //Prepare array of user data
        $picture=$this->getYoutubeImageUrl($this->input->post('video'),0,0);
        $where	= array('vid' => $id);
        $videoData = array(

            'uid' => $this->session->userdata('uid'),
            'vc_id' => $this->input->post('vc_id'),
            'name' => $this->input->post('name'),
            'slug' => $this->createSlug($this->input->post('name')),
            'video' => $this->input->post('video'),
            'description' => $this->input->post('description'),
            'meta_key' => $this->input->post('tags'),
            'meta_description' => $this->input->post('meta_description'),
            'photo' => $picture,
            'tags' => $this->input->post('tags'),
            'status' => 1,
            'views' => 1
        );

        $result	=	$this->m_ps->update_field('videos', $videoData, $where);
        if($result){
            $this->session->set_userdata('message', $this->connect->message("Video has been updated!", "success"));
        }else{
            $this->session->set_userdata('message', $this->connect->message("Error!", "warning"));
        }

        redirect(site_url().'backend/videos', 'location', 302);
    }




    public function getYoutubeImageUrl($embedCode,$w,$h){
        //GET THE URL
        /* $url = $e;
         $queryString = parse_url($url, PHP_URL_QUERY);
         parse_str($queryString, $params);
         $v = $params['v'];
         */
        //$embedCode = '<iframe width="560" height="315" src="https://www.youtube.com/embed/dwJasig9Olw" frameborder="0" allowfullscreen></iframe>';
        preg_match('/src="([^"]+)"/', $embedCode, $match);

        // Extract video url from embed code
        $videoURL = $match[1];
        $urlArr = explode("/",$videoURL);
        $urlArrNum = count($urlArr);
        // YouTube video ID
        $youtubeVideoId = $urlArr[$urlArrNum - 1];

        //DISPLAY THE IMAGE
        if(strlen($youtubeVideoId)>0){
            $url='';
            // echo "<img src='http://img.youtube.com/vi/$v/hqdefault.jpg' width='$w' height='$h' />";
            if($h==0 && $w==0){
               // echo 'https://i.ytimg.com/vi/'.$youtubeVideoId.'/mqdefault.jpg';
                $url='https://i.ytimg.com/vi/'.$youtubeVideoId.'/mqdefault.jpg';
            }else{
               // echo 'https://i.ytimg.com/vi/'.$youtubeVideoId.'/maxresdefault.jpg';
                $url='https://i.ytimg.com/vi/'.$youtubeVideoId.'/maxresdefault.jpg';
            }
            return($url);
        }
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


<?php defined('BASEPATH') OR exit('No direct script access allowed');



class Users extends CI_Controller {

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


        //  $this->load->model('m_ps', '', true);

        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');



    }







    function index($offset = ''){

        $data['page_name']  = 'Hotel Admin';

        $data['c_name']='users';

        $data['frm_name']  = 'Manage Users';

        // $page_data['page_title'] = get_phrase('admin_dashboard');

        $data['page_title']="List All Users";

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



    /*

    page edit

    */

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

        $data['c_name']='users';

        $data['frm_name']  = 'Add New User';

        // $page_data['page_title'] = get_phrase('admin_dashboard');

        $data['page_title']="Add New User";





        // $id = $this->m_ps->encrypt_decrypt('decrypt', $id);



        // get category

        //$where = array('public' => 1);

        // $data['tourtype']	=	$this->m_ps->get_by_fields('tour_type',$where,'tour_type_id');



        //$data['tourtype']=$this->m_ps->get_by_sql('SELECT * FROM tour_type');









//        if ($this->form_validation->run() == FALSE)

//        {

            $data['body']='backend/users/v_new';

            $this->load->view('backend/desktop_form',$data);

//        }

//        else

//        {

//            $this->load->view('formsuccess');

//        }



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

        $result	=	$this->m_ps->update_field('users', $data_arr, $where);



        if($result){

            $this->session->set_userdata('message', $this->connect->message("tour has been updated!", "success"));

        }else{

            $this->session->set_userdata('message', $this->connect->message("Error!", "warning"));

        }



        redirect(site_url().'backend/users', 'location', 302);

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

        $result	=	$this->m_ps->update_field('users', $data_arr, $where);



        if($result){

            $this->session->set_userdata('message', $this->connect->message("tour has been updated!", "success"));

        }else{

            $this->session->set_userdata('message', $this->connect->message("Error!", "warning"));

        }



        redirect(site_url().'backend/users', 'location', 302);

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

                $userData = array(

                    'name' => $this->input->post('name1')." ".$this->input->post('name2'),

                    'email' => $this->input->post('email'),

                    'password' => $this->input->post('password'),

                    'picture' => $picture

                );



                //Pass user data to model

                $insertUserData = $this->m_users->insert($userData);



                //Storing insertion status message.

                if($insertUserData){

                    $this->session->set_flashdata('success_msg', 'User data have been added successfully.');

                }else{

                    $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');

                }



            }



        //}

        //Form for adding user data

       // $this->load->view('backend/users/add');

        redirect(site_url().'backend/users/add', 'location', 302);



    }

    /*

check user email

*/

    function check_user()

    {

        $usr=$this->input->post('email');

        $result=$this->m_users->check_user_exist($usr);

        if($result)

        {

            echo "false";

        }

        else{

            echo "true";

        }

    }



    public function save_signup()

    {

        $error=0;

        $error_msg = "";



        $uuid = uniqid('', true);

        $hash = $this->m_user->hashSSHA($this->input->post('password'));

        $encrypted_password = $hash["encrypted"]; // encrypted password

        $salt = $hash["salt"]; // salt



        //Check existing eamil

        $wheres = array('email' => $this->input->post('email') );

        $result	=	$this->m_ps->get_by_fields('users',$wheres,'uid','DESC');

        if( sizeof($result) > 0 AND $result[0]['status'] == 1 ){

            $error_msg = 'This Email: ['. $this->input->post('email') . '] is existing!' ;

        }else if( sizeof($result) > 0 AND $result[0]['status'] == 0){

            $array_activate = array(

                'name' => $this->input->post('name'),

                'email' => $this->input->post('email'),

                'uuid' => $result[0]['unique_id']

            );

            $is_sent = $this->m_send_mail->send_email($array_activate, 'Register');

            if($is_sent == true)

                $error_msg = 'This Email: ['. $this->input->post('email') . '] is registered already, but you do not activate yet! Please check your email to activate!' ;

            else{

                $error_msg	= 'Failed to sent email, please try again!';

            }

        }else{

            //Term of Use

            $term_of_use = 0;

            if($this->input->post('accept_term'))

                $term_of_use = 1;



            //Begin transaction

            $this->db->trans_begin();



            $data_arr = array(

                'gro_id'		=> 2,
                'unique_id'		=> $uuid,
                'name'			=> $this->input->post('name'),
                'email' 		=> $this->input->post('email'),
                'tel' 			=> $this->input->post('tel'),
                'accept_term' 	=> $term_of_use,
                'encrypted_password' 	=> $encrypted_password,
                'salt' 			=> $salt,
                'created_date' 	=> date('Y-m-d H:i:s')

            );



            $data['table'] = $result =	$this->m_ps->insert('users', $data_arr, '');

            if($result){


                // Create secuirty file

                fopen("./public/users/".$uuid.".txt", "w");

                $array_activate = array(

                    'name' => $this->input->post('name'),

                    'email' => $this->input->post('email'),

                    'uuid' => $uuid
                );

                $domain = $_SERVER['HTTP_HOST'];

                if($domain == $this->domain)

                    $is_sent = $this->m_send_mail->send_email($array_activate, 'Register');

                else

                    $is_sent = true;

                if($is_sent == true)

                    $error_msg	.= 'Please check email to activate your account!';

                else{

                    $error_msg	.= 'Failed to send email!';
                }

            }else{
                $error++;

                $error_msg	.= 'Failed to save data';
            }

        }//end checking

        if($error>0)

        {

            $this->db->trans_rollback();

            $data = array(

                'msg' => $error_msg

            );

        }

        else

        {

            $this->db->trans_commit();



            $data = array(

                'msg' => $error_msg
            );

        } //IF check error



        echo json_encode($data);

        //$this->load->view('front/index',$data);

    }//// end register


    public function save_user($tbl)

    {

        $error=0;

        $error_msg = "";


        $uuid = uniqid('', true);

        $hash = $this->m_users->hashSSHA($this->input->post('password'));

        $encrypted_password = $hash["encrypted"]; // encrypted password

        $salt = $hash["salt"]; // salt


        //Check existing eamil

        $wheres = array('email' => $this->input->post('email') );

        $result	=	$this->m_ps->get_by_fields('users',$wheres,'uid','DESC');

        if( sizeof($result) > 0 AND $result[0]['status'] == 1 ){

            $error_msg = 'This Email: ['. $this->input->post('email') . '] is existing!' ;

        }else if( sizeof($result) > 0 AND $result[0]['status'] == 0){

            $array_activate = array(

                'name' => $this->input->post('name1')." ".$this->input->post('name2'),

                'email' => $this->input->post('email'),

                'uuid' => $result[0]['unique_id']
            );

            $is_sent = $this->m_send_mail->send_email($array_activate, 'Register');

            if($is_sent == true)

                $error_msg = 'This Email: ['. $this->input->post('email') . '] is registered already, but you do not activate yet! Please check your email to activate!' ;
            else{

                $error_msg	= 'Failed to sent email, please try again!';
            }
        }else{

            //Term of Use

            $term_of_use = 0;

            if($this->input->post('accept_term'))

                $term_of_use = 1;


            //Begin transaction

            $this->db->trans_begin();



            $data_arr = array(

                'gro_id'		=> 2,

                'unique_id'		=> $uuid,

                'name'			=> $this->input->post('name1')." ".$this->input->post('name2'),

                'email' 		=> $this->input->post('email'),

                'tel' 			=> $this->input->post('tel'),

                'accept_term' 	=> $term_of_use,

                'encrypted_password' 	=> $encrypted_password,

                'salt' 			=> $salt,

                'created_date' 	=> date('Y-m-d H:i:s')

            );



            $data['table'] = $result =	$this->m_ps->insert($tbl, $data_arr, '');



            if($result){



                // Create secuirty file

                fopen("./uploads/".$tbl."/".$uuid.".txt", "w");



                $array_activate = array(

                    'name' => $this->input->post('name1')." ".$this->input->post('name2'),

                    'email' => $this->input->post('email'),

                    'uuid' => $uuid

                );



                $domain = $_SERVER['HTTP_HOST'];

                if($domain == $this->domain)

                    $is_sent = $this->m_send_mail->send_email($array_activate, 'Register');

                else

                    $is_sent = true;



                if($is_sent == true)

                    $error_msg	.= 'Please check email to activate your account!';

                else{

                    $error_msg	.= 'Failed to send email!';

                }



            }else{

                $error++;

                $error_msg	.= 'Failed to save data';
            }


        }//end checking


        if($error>0)

        {

            $this->db->trans_rollback();



            $data = array(

                'msg' => $error_msg

            );

        }

        else

        {

            $this->db->trans_commit();

            $data = array(

                'msg' => $error_msg

            );

        } //IF check error



        echo json_encode($data);

        //$this->load->view('front/index',$data);

    }//// end create user


    public function save_user1($tbl)

    {
        $error=0;

        $error_msg = "";


        $uuid = uniqid('', true);

        $hash = $this->m_users->hashSSHA($this->input->post('password'));

        $encrypted_password = $hash["encrypted"]; // encrypted password

        $salt = $hash["salt"]; // salt


        //Check existing eamil

        $wheres = array('email' => $this->input->post('email') );

        $result	=	$this->m_ps->get_by_fields('users',$wheres,'uid','DESC');

        if( sizeof($result) > 0 AND $result[0]['status'] == 1 ){

            $error_msg = 'This Email: ['. $this->input->post('email') . '] is existing!' ;

        }else if( sizeof($result) > 0 AND $result[0]['status'] == 0){

            $array_activate = array(

                'name' => $this->input->post('name1')." ".$this->input->post('name2'),

                'email' => $this->input->post('email'),

                'uuid' => $result[0]['unique_id']
            );

//            $is_sent = $this->m_send_mail->send_email($array_activate, 'Register');

//            if($is_sent == true)

//                $error_msg = 'This Email: ['. $this->input->post('email') . '] is registered already, but you do not activate yet! Please check your email to activate!' ;

//            else{

//                $error_msg	= 'Failed to sent email, please try again!';

//            }

        }else{

            //Term of Use

            $term_of_use = 0;

            if($this->input->post('accept_term'))

                $term_of_use = 1;

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









            //Begin transaction

            $this->db->trans_begin();



            $data_arr = array(

                'gro_id'		=> 2,

                'unique_id'		=> $uuid,

                'name'			=> $this->input->post('name1')." ".$this->input->post('name2'),

                'email' 		=> $this->input->post('email'),

                'tel' 			=> $this->input->post('tel'),

                'photo' 			=> $picture,

                'accept_term' 	=> $term_of_use,

                'encrypted_password' 	=> $encrypted_password,

                'salt' 			=> $salt,

                'created_date' 	=> date('Y-m-d H:i:s')

            );



            $data['table'] = $result =	$this->m_ps->insert($tbl, $data_arr, '');



            if($result){



                // Create secuirty file

                fopen("./uploads/".$tbl."/".$uuid.".txt", "w");



                $array_activate = array(

                    'name' => $this->input->post('name1')." ".$this->input->post('name2'),

                    'email' => $this->input->post('email'),

                    'uuid' => $uuid

                );



//                $domain = $_SERVER['HTTP_HOST'];

//                if($domain == $this->domain)

//                    $is_sent = $this->m_send_mail->send_email($array_activate, 'Register');

//                else

//                    $is_sent = true;

//

//                if($is_sent == true)

//                    $error_msg	.= 'Please check email to activate your account!';

//                else{

//                    $error_msg	.= 'Failed to send email!';

//                }



            }else{

                $error++;

                $error_msg	.= 'Failed to save data';

            }



        }//end checking





        if($error>0)

        {

            $this->db->trans_rollback();



            $data = array(

                'msg' => $error_msg

            );

        }

        else

        {

            $this->db->trans_commit();



            $data = array(

                'msg' => $error_msg

            );

        } //IF check error



       // echo json_encode($data);

        redirect(site_url().'backend/users/add', 'location', 302);



        //$this->load->view('front/index',$data);



    }//// end create user



}


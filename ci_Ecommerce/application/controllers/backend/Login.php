<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Login extends CI_Controller {


    function __construct()

    {

        parent::__construct();

        $this->load->model('m_ps', '', true);

        $this->load->model('m_user', '', true);

        $this->load->library('session');

    }



    /*

    **Default

    */

    function index()

    {

        if($this->session->userdata('name')){

            if( $this->session->userdata('group_name')=='Admin' ){

                redirect(site_url().'backend/Admin', 'location', 302);

            }

            elseif($this->session->userdata('group_name')=='Tuktuks'){

                redirect(site_url().'backend/Tuktuk', 'location', 302);

            }else{

                $this->load->view('backend/login/v_login');

            }


        }else{

            //$this->load->view('admin/v_login');

            //$this->load->view('admin/pages_register');

            $this->load->view('backend/login/v_login');

        }

    }

    /*

    **Login

    */

    /*function verifylogin(){

        $password = $this->input->post('password');

        $email 	  = $this->input->post('email');



        $result = $this->m_user->login($email,'');



        // check for result

        if (sizeof($result) > 0) {

            $salt = $result[0]['salt'];

            $encrypted_password = $result[0]['encrypted_password'];

            $hash = $this->m_user->checkhashSSHA($salt, $password);

            // check for password equality

            if ($encrypted_password == $hash) {

                // user authentication details are correct

                //return $result;

                //add all data to session

                 $newdata = array(

                            'gro_id'			=> $result[0]['gro_id'],

                            'group_level'		=> $result[0]['level'],

                            'uid' 				=> $result[0]['uid'],

                            'name' 				=> $result[0]['name'],

                            'email'     		=> $result[0]['email'],

                            'logged_in' 		=> TRUE

                       );

                $this->session->set_userdata($newdata);



                redirect(site_url().'admin/main', 'location', 302);

            }else{

                //message

                $this->session->set_userdata('message', $this->connect->message("Invalid password!", "error"));

                $this->index();

            }

        } else {

            //message

            $this->session->set_userdata('message', $this->connect->message("Invalid email and password!", "error"));

            $this->index();

        }

     }*/



    function verifylogin(){

        $password = $this->input->post('password');

        $email 	  = $this->input->post('email');

        $result = $this->m_user->login($email,'');


        // check for result

        if (sizeof($result) > 0) {



            $salt = $result[0]['salt'];

            $encrypted_password = $result[0]['encrypted_password'];

            $hash_password = $this->m_user->checkhashSSHA($salt, $password);



            /*print_r($encrypted_password);

            echo "<br/>";

            print_r($hash_password);*/



            //Check is pass encrypt = true

            if( $result[0]['is_encrypt'] == 1 ){

                // check for password equality

                if ($encrypted_password == $hash_password) {

                    // user authentication details are correct

                    //return $result;

                    //add all data to session

                    $newdata = array(

                        'gro_id'=> $result[0]['gro_id'],

                        'group_name'=> $result[0]['group_name'],

                        'group_level'		=> $result[0]['level'],

                        'uid' 			=> $result[0]['uid'],

                        'name' 			=> $result[0]['name'],

                        'email'     		=> $result[0]['email'],

                        'logged_in' 		=> TRUE

                    );

                    $this->session->set_userdata($newdata);



                    //redirect(site_url().'admin/main', 'location', 302);

                    //  redirect(site_url().'admin/Dashboard', 'location', 302);



                    include_once 'login_option.php';





                }else{

                    //message

                    $this->session->set_userdata('message', $this->connect->message("Invalid password!", "error"));

                    $this->index();

                }

            }else{

                // user authentication details are correct

                //return $result;

                //add all data to session

                $newdata = array(

                    'gro_id'			=> $result[0]['gro_id'],

                    'group_name'            => $result[0]['group_name'],

                    'group_level'		=> $result[0]['level'],

                    'uid' 				=> $result[0]['uid'],

                    'name' 				=> $result[0]['name'],

                    'email'     		=> $result[0]['email'],

                    'logged_in' 		=> TRUE

                );

                $this->session->set_userdata($newdata);



                redirect(site_url().'backend/main', 'location', 302);



            } /// end check is_encrypt



        } else {

            //message

            $this->session->set_userdata('message', $this->connect->message("Invalid email and password!", "error"));

            $this->index();

        }

    }



    /*

    check user email

    */

    function check_user()

    {

        $usr=$this->input->post('email_address');

        $result=$this->m_user->check_user_exist($usr);

        if($result)

        {

            echo "false";



        }

        else{



            echo "true";

        }

    }



    /*

    Destroy session

    */

    function logout()

    {

        $newdata = array(

            'gro_id'			=> '',

            'gro_id'            =>'',

            'group_level'		=> '',

            'uid' 				=> '',

            'cus_id' 			=> '',

            'name' 				=> '',

            'email'     		=> '',

            'logged_in' 		=> FALSE

        );

        $this->session->unset_userdata($newdata);

        $this->session->sess_destroy();

        redirect(site_url().'backend/login', 'location', 302);

    }

}

/* End of file welcome.php */

/* Location: ./application/controllers/login.php */












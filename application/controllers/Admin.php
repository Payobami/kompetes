<?php
/**
 * Created by PhpStorm.
 * User: prudent
 * Date: 05-May-18
 * Time: 2:32 AM
 */


class Admin extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->helper(array('url', 'form'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->database();
    }


    public function home(){

        $data['title'] ='';

        if(!isset($_SESSION['userLogginID'])){

            redirect(base_url('login'));


        }
        else {

            require_once('action/fetch_user.php');
            require_once('action/admin_info.php');

            if($data['adminStatus'] !=='1'){
                redirect(base_url('user/home'));
            }
            else{
                $this->load->view("admin/template/admin_header", $data);
                $this->load->view("admin/home", $data);
                $this->load->view("admin/template/admin_footer", $data);
            }


        }



    }



    public function users(){
        $data['title'] ='';
        if(!isset($_SESSION['userLogginID'])){

            redirect(base_url('login'));
        }
        else{

            require_once('action/fetch_user.php');

            if($data['adminStatus'] !=='1'){

                redirect(base_url('user/home'));

            }
            else{

                $this->load->view("admin/template/admin_header", $data);
                //$this->load->view("admin/home", $data);
                $this->load->view("admin/template/admin_footer", $data);

            }





        }




    }




}
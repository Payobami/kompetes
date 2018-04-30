<?php
/**
 * Created by PhpStorm.
 * User: prudent
 * Date: 29-Apr-18
 * Time: 8:06 PM
 */

class Upgrade extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->helper(array('url', 'form'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->database();
    }



    public function index(){


        if(!isset($_SESSION['userLogginID'])){
            redirect(base_url('login?redirect=upgrade'));



        }

        else{

            require_once('action/fetch_user.php');


            $data['title']="Subscribe";
            $data['Success']="";

            $this->load->view("template/header",$data);
            $this->load->view("upgrade", $data);
        }
    }


}
<?php
/**
 * Created by PhpStorm.
 * User: prudent
 * Date: 06-Apr-18
 * Time: 1:14 PM
 */


class User extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->helper(array('url','form'));
        $this->load->library(array('session','form_validation'));
        $this->load->database();
    }


    public function home(){

        if(!isset($this->session->userLogginID)){

            $data['title']='Login';
                $data['success']="<div class='alert alert-danger text-white no-border-radius'><a class='close' data-dismiss='alert'>x</a> Please login</div>";
                $this->load->view('template/header',$data);
                $this->load->view('login',$data);
                $this->load->view('template/footer',$data);
        }

        else{

            $UserID = $this->session->userLogginID;
            require_once('action/fetch_user.php');
            $data['title'] = 'Welcome home';

            $this->load->view('template/header', $data);
            $this->load->view('home', $data);
            //$this->load->view('template/footer', $data);
        }


    }





}
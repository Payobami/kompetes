<?php
/**
 * Created by PhpStorm.
 * User: prudent
 * Date: 04-May-18
 * Time: 11:52 AM
 */


class Video extends CI_Controller{


    public function __construct()
    {
        parent::__construct();

        $this->load->helper(array('url', 'form'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->database();
    }



    public function index(){

        if(isset($_SESSION['userLogginID'])){

            require_once('action/fetch_user.php');
        }

        $data['title']="Videos";

        $this->load->view('template/header',$data);
        $this->load->view('videos', $data);
        $this->load->view('template/footer',$data);


    }



    public function upload(){





    }



}
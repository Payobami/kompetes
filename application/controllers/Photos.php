<?php
/**
 * Created by PhpStorm.
 * User: prudent
 * Date: 13-Apr-18
 * Time: 10:24 AM
 */


class Photos extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->helper(array('url','form'));
        $this->load->library(array('session','form_validation'));
        $this->load->database();
    }


    public function index()
    {
        $data['success'] = "";
        $data['title'] = "Photos";



        if(isset($_SESSION['userLogginID'])) {
            //get user information if logged in
            require_once('action/fetch_user.php');
        }
        //get category

        $this->db->where("status='0'");
        $data['getCategory'] = $this->db->get('category')->result_array();


        //get photos uploaded
        $this->db->select('*');
        $this->db->where("status='0'");
        $this->db->order_by('id', 'DESC');
        $data['getPhotos'] = $this->db->get('uploads')->result_array();


        //count picture
        $this->db->where("status='0'");
        $data['countPhoto'] = $this->db->count_all_results('uploads');

        $this->load->view('template/header', $data);
        $this->load->view('photos', $data);

    }

    public function cat($id){

        $data['success'] = "";
        $data['title'] = "Photos";

        //get user information if logged in

        if(isset($_SESSION['userLogginID'])) {
            //get user information if logged in
            require_once('action/fetch_user.php');
        }

        //get category

        $this->db->where("status='0'");
        $data['getCategory'] = $this->db->get('category')->result_array();


        //get photos uploaded
        $this->db->select('*');
        $this->db->where("status='0'");
        $this->db->like("category",$id,'both');
        $this->db->order_by('id', 'DESC');
        $data['getPhotos'] = $this->db->get('uploads')->result_array();


        //count picture
        $this->db->where("status='0'");
        $this->db->like("category",$id,'both');
        $data['countPhoto'] = $this->db->count_all_results('uploads');


        $this->load->view('template/header', $data);
        $this->load->view('photos', $data);
    }



    public function check($id){

        //echo $id;

    }
}
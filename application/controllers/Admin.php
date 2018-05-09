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



    public function users($id){
        $data['title'] ='';
        if(!isset($_SESSION['userLogginID'])){

            redirect(base_url('login'));
        }
        else {

            require_once('action/fetch_user.php');


            if ($data['adminStatus'] !== '1') {

                redirect(base_url('user/home'));

            } else {
                require_once('action/admin_info.php');

                if(empty($id)){
                    $id = 0;
                }


                //get user lists
                $this->db->where("status='$id'");
                $data['getAllusers'] = $this->db->get("userz")->result_array();


                $this->load->view("admin/template/admin_header", $data);
                $this->load->view("admin/users", $data);
                $this->load->view("admin/template/admin_footer", $data);

            }
        }
    }



    public function single_user($id){

        $data['title'] ='';
        if(!isset($_SESSION['userLogginID'])){

            redirect(base_url('login'));
        }
        else {

            require_once('action/fetch_user.php');


            if ($data['adminStatus'] !== '1') {

                redirect(base_url('user/home'));

            }
            else {
                require_once('action/admin_info.php');
                require_once('action/time_function.php');

                if (empty($id)) {
                    redirect(base_url('admin/home'));
                }
                else{


                    $this->db->where("user_id='$id'");
                    $data['getSingleUser']= $this->db->get('userz')->result_array();


                    //count all prize won

                    $this->db->where("user_id ='$id'");
                    $data['countPrizeWon'] =  $this->db->count_all_results('prize_won');

                    //get prize won list
                    $this->db->where("user_id ='$id'");
                    $data['getPrizeWon'] = $this->db->get('prize_won')->result_array();

                    //count all challenges created by user

                    $this->db->where("user_id = '$id'");
                    $data['countChallenge'] = $this->db->count_all_results('challenges');

                    //get all challenges
                    $this->db->where("user_id = '$id'");
                    $data['getChallenge'] = $this->db->get('challenges')->result_array();

                    // $this->

                    $this->load->view("admin/template/admin_header", $data);
                    $this->load->view("admin/single_users", $data);
                    $this->load->view("admin/template/admin_footer", $data);
                }
            }

        }

    }
}
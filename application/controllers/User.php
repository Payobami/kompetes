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
        empty($data['success']);

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
            $data['title'] = $data['username'] .' Welcome home';
            $currentDate = date('Y-m-d');

            //get avalaible contest list
            $this->db->where("contest_status='0' AND contest_start_date >='$currentDate'");
            $this->db->order_by("id",'RANDOM');
            $data['getContestAvail'] = $this->db->get('contests')->result_array();

            //get ongoing voting
            $this->db->where("contest_status='0' AND contest_start_date <='$currentDate' AND contest_close_date >='$currentDate'");
            $this->db->order_by("id",'RANDOM');
            $data['getOngoingVoting'] = $this->db->get('contests')->result_array();

            //count my following user
            $this->db->where("follower_id = '$UserID'");
            $data['countMyFollowing'] = $this->db->count_all_results('followingx');

            //count following
            $this->db->where("follower_id = '$UserID'");
            $countFollowing = $this->db->count_all_results('followingx');

            $data['countFollowing'] = $countFollowing;

            if($countFollowing >=1) {
                //get my following user
                $this->db->where("follower_id = '$UserID'");
                $data["getMyFollowing"] = $this->db->get("followingx")->result_array();

                foreach ($data['getMyFollowing'] as $myFollowing) {

                    //get people to follow
                    $myFollowingID = $myFollowing['user_id'];
                    $this->db->where("user_id !='$myFollowingID' AND user_id !='$UserID'");
                    $data['getMoreFollow'] = $this->db->get("userz")->result_array();


                    //get post from my following users
                    $this->db->where("poster_id = '$myFollowingID' || poster_id='Admin'");
                    $this->db->order_by('date', 'DESC');
                    $data['getPost'] = $this->db->get('post_timeline')->result_array();
                }
            }
            else{

                $this->db->where("userz.user_id !='$UserID'");
                $this->db->from('userz');
                //$this->db->join("uploads",'userz.user_id = uploads.user_id');
                $this->db->limit(10);
                $data['getMoreFollow'] = $this->db->get()->result_array();

                //$this->db->query("SELECT * FROM uploads ");

                //get post from my following users
                $this->db->where("poster_id='Admin'");
                $this->db->order_by('date', 'DESC');
                $data['getPost'] = $this->db->get('post_timeline')->result_array();

            }

            $this->load->view('template/header', $data);
            $this->load->view('home', $data);


            //$this->load->view('template/footer', $data);
        }


    }



    public function credit(){

        $data['success'] = "";
        if(!isset($this->session->userLogginID)){

            redirect(base_url('login?redirect=user/credit'));


        }

        else{

            require_once('action/fetch_user.php');
            require_once('action/time_function.php');

            $data['title'] = '';


            $this->load->view('template/header', $data);

            $this->load->view('mycredit', $data);

            $this->load->view('template/footer', $data);

        }



    }





}
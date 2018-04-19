<?php
/**
 * Created by PhpStorm.
 * User: prudent
 * Date: 13-Apr-18
 * Time: 2:09 PM
 */



class Contests extends CI_Controller{
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
        $data['title'] = "Contests";

        if(isset($_SESSION['userLogginID'])) {
            //get user information if logged in
            require_once('action/fetch_user.php');
        }


        $this->db->where("status='0'");
        $data['getCategory'] = $this->db->get('category')->result_array();

        $this->db->where("contest_status='0'");
        $data['getContest'] = $this->db->get('contests')->result_array();

        //count picture
        $this->db->where("contest_status='0'");
        //$this->db->like("category",$id,'both');
        $data['countContest'] = $this->db->count_all_results('contests');

        $this->load->view('template/header', $data);
        $this->load->view('contests', $data);
    }


    public function cat($id){

        $data['success'] = "";
        $data['title'] = $id;

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
        $this->db->where("contest_status='0'");
        $this->db->like("category",$id,'both');
        $this->db->order_by('id', 'DESC');
        $data['getContest'] = $this->db->get('contests')->result_array();


        //count picture
        $this->db->where("contest_status='0'");
        $this->db->like("category",$id,'both');
        $data['countContest'] = $this->db->count_all_results('contests');


        $this->load->view('template/header', $data);
        $this->load->view('contests', $data);
    }


    public function check($id){

        $data['title'] = 'Contest name';

        //get user information if loggedin

        if(isset($_SESSION['userLogginID'])){

            require_once('action/fetch_user.php');

        }


        $this->db->where("contest_id='$id'");
        $countContest = $this->db->count_all_results('contests');


        if($countContest >=1){


            //count the contest entries

            $this->db->where("entry_id='$id'");
            $data['countEntries'] = $this->db->count_all_results('entries_submited');


            //get the contest information out
            $this->db->where("contest_id='$id'");
            $data['getContest'] = $this->db->get("contests")->result();

            $this->load->view('template/header', $data);
            $this->load->view('contests_view', $data);
        }
        else{

            die('Contest not found');

        }


    }


    public  function entries($id){


        $data['title'] = 'Contest name';

        //get user information if loggedin

        if(isset($_SESSION['userLogginID'])){

            require_once('action/fetch_user.php');

        }


        $this->db->where("contest_id='$id'");
        $countContest = $this->db->count_all_results('contests');


        if($countContest >=1){

            //count the contest entries

            $this->db->where("entry_id='$id'");
            $data['countEntries'] = $this->db->count_all_results('entries_submited');

            //get the contest information out
            $this->db->where("contest_id='$id'");
            $data['getContest'] = $this->db->get("contests")->result();

            //get all the pictures submited for the contest entry
            $this->db->where("entry_id='$id' AND entry_type='contest'");
            $data['getContestEntry'] = $this->db->get("entries_submited")->result_array();



            $this->load->view('template/header', $data);
            $this->load->view('contest_entry', $data);
        }
        else{



        }



    }

    public function submit_entry($id){

        if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_SESSION['userLogginID'])){


            require_once('action/fetch_user.php');

            $userID = $_SESSION['userLogginID'];
            $photoID = $this->input->post("photo");
            $entryType = $this->input->post("entry_type");

            //get contest information

            $this->db->where("contest_id='$id'");
            $countContest = $this->db->count_all_results('contests');


            if($countContest >=1){

                //count the contest entries check if the user has already submitted photo for this entry
                $this->db->where("entry_id='$id' AND user_id='$userID'");
                $countEntries = $this->db->count_all_results('entries_submited');

                if($countEntries >=1){
                    //user already submitted the

                    die('You have already submitted photo for this contest ');


                }

                else{
                    //get the picture details for submission
                    $this->db->where("picture_id='$photoID'");
                    $getPictureD = $this->db->get("uploads")->result();
                    foreach($getPictureD as $pictureD);

                    $insertPhoto = array(

                        'entry_type'=>$entryType,
                        'entry_id'=>$id,
                        'picture_id'=>$photoID,
                        'picture_name'=>$pictureD->picture_medium_name,
                        'user_id' => $userID,
                        'status'=>0,
                        'submited_date'=>date('Y-m-d H:i:s')

                    );

                    $this->db->insert('entries_submited', $insertPhoto);

                    die("uploaded successful");


                    //get the contest information out
                    $this->db->where("contest_id='$id'");
                    $data['getContest'] = $this->db->get("contests")->result();

                    //get all the pictures submited for the contest entry
                    $this->db->where("entry_id='$id' AND entry_type='contest'");
                    $data['getContestEntry'] = $this->db->get("entries_submited")->result_array();



//                $this->load->view('template/header', $data);
//                $this->load->view('contest_entry', $data);

                }

            }
            else{
                //contests not found


            }




        }

        else{

            die("You are not allowed to access this page directly");
        }




    }

}
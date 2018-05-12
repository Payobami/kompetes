<?php
/**
 * Created by PhpStorm.
 * User: prudent
 * Date: 05-May-18
 * Time: 2:32 AM
 */


class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->helper(array('url', 'form'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->database();
    }


    public function home()
    {

        $data['title'] = '';

        if (!isset($_SESSION['userLogginID'])) {

            redirect(base_url('login'));


        } else {

            require_once('action/fetch_user.php');
            require_once('action/admin_info.php');

            if ($data['adminStatus'] !== '1') {
                redirect(base_url('user/home'));
            } else {
                $this->load->view("admin/template/admin_header", $data);
                $this->load->view("admin/home", $data);
                $this->load->view("admin/template/admin_footer", $data);
            }


        }


    }


    public function users($id)
    {
        $data['title'] = '';
        if (!isset($_SESSION['userLogginID'])) {

            redirect(base_url('login'));
        } else {

            require_once('action/fetch_user.php');


            if ($data['adminStatus'] !== '1') {

                redirect(base_url('user/home'));

            } else {
                require_once('action/admin_info.php');

                if (empty($id)) {
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


    public function single_user($id)
    {

        $data['title'] = '';
        if (!isset($_SESSION['userLogginID'])) {

            redirect(base_url('login'));
        } else {

            require_once('action/fetch_user.php');


            if ($data['adminStatus'] !== '1') {

                redirect(base_url('user/home'));

            } else {
                require_once('action/admin_info.php');
                require_once('action/time_function.php');

                if (empty($id)) {
                    redirect(base_url('admin/home'));
                } else {


                    $this->db->where("user_id='$id'");
                    $data['getSingleUser'] = $this->db->get('userz')->result_array();


                    //count all prize won

                    $this->db->where("user_id ='$id'");
                    $data['countPrizeWon'] = $this->db->count_all_results('prize_won');

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


    public function contests()
    {
        $data['title'] = '';
        if (!isset($_SESSION['userLogginID'])) {

            redirect(base_url('login'));
        } else {

            require_once('action/fetch_user.php');


            if ($data['adminStatus'] !== '1') {

                redirect(base_url('user/home'));

            }

            else {
                require_once('action/admin_info.php');
                require_once('action/time_function.php');

                //get contest

                $data['getContests'] = $this->db->get('contests')->result_array();


                $this->load->view("admin/template/admin_header", $data);
                $this->load->view("admin/contests", $data);
                $this->load->view("admin/template/admin_footer", $data);


            }
        }
    }

    public function challenges()
    {

        $data['title'] = '';
        if (!isset($_SESSION['userLogginID'])) {

            redirect(base_url('login'));
        }
        else {

            require_once('action/fetch_user.php');


            if ($data['adminStatus'] !== '1') {

                redirect(base_url('user/home'));

            }
            else
            {
                require_once('action/admin_info.php');
                require_once('action/time_function.php');

                //get contest
                $data['getChallenge'] = $this->db->get('challenges')->result_array();

                $this->load->view("admin/template/admin_header", $data);
                $this->load->view("admin/challenges", $data);
                $this->load->view("admin/template/admin_footer", $data);

            }
        }
    }


    public function contest_upload(){


        $data['title'] = 'Upload Contest';
        if (!isset($_SESSION['userLogginID'])) {

            redirect(base_url('login'));
        }
        else {

            require_once('action/fetch_user.php');


            if ($data['adminStatus'] !== '1') {

                redirect(base_url('user/home'));

            }
            else
            {
                require_once('action/admin_info.php');
                require_once('action/time_function.php');

                //get contest
                $data['getChallenge'] = $this->db->get('challenges')->result_array();


                $this->form_validation->set_rules('contest_name','Contest Name','required|trim');
                $this->form_validation->set_rules('entry_point','Entry Point','required|trim');
                $this->form_validation->set_rules('submission_ends','Entry Submission Close Date','required|trim');
                $this->form_validation->set_rules('voting_ends','Voting Close Date','required|trim');
                $this->form_validation->set_rules('category','Category','required|trim');
                $this->form_validation->set_rules('tags','Tags','required|trim');
                $this->form_validation->set_rules('introduction','Introduction','required|trim');
                $this->form_validation->set_rules('first_prize','First Prize','required|trim');
                $this->form_validation->set_rules('first_reward','First Reward','required|trim');
                $this->form_validation->set_rules('second_prize','Second prize','required|trim');
                $this->form_validation->set_rules('second_reward','Second Reward','required|trim');
                $this->form_validation->set_rules('third_prize','Third Prize','required|trim');
                $this->form_validation->set_rules('third_reward','Third Reward','required|trim');




                if($this->form_validation->run() == false){

                    $this->load->view("admin/template/admin_header", $data);
                    $this->load->view("admin/upload_contest", $data);
                    $this->load->view("admin/template/admin_footer", $data);

                }
                else{


                    if (!empty($_FILES['banner']['name'])) {

                        $uploadP = './uploads/contests/';
                        $confi['upload_path'] = $uploadP;
                        $confi['allowed_types'] = 'gif|jpg|png|mp4';
                        //$config['max_size'] = 10048;
                        $confi['encrypt_name'] = TRUE;
                        $this->load->library('upload', $confi);

                        if ($this->upload->do_upload('banner')) {
                            //die('it works here');

                            $BannerData = $this->upload->data();
                        }
                    }
                    if(!empty($_FILES['first_pic']['name'])){
                        $uploadPath = './uploads/contests/';
                        $config['upload_path'] = $uploadPath;
                        $config['allowed_types'] = 'gif|jpg|png|mp4';
                        //$config['max_size'] = 10048;
                        $config['encrypt_name'] = TRUE;
                        $this->load->library('upload', $config);

                        if ($this->upload->do_upload('first_pic')) {
                            //die('it works here');

                            $first_picData = $this->upload->data();
                        }
                        else{
                            die($this->upload->display_errors());
                        }
                    }
                    else{


                        die('First Prize picture cannot be empty upload the picture of the prize.. you can check google to download picture');

                    }


                    if(!empty($_FILES['second_pic']['name'])){
                        $uploadPath = './uploads/contests/';
                        $config['upload_path'] = $uploadPath;
                        $config['allowed_types'] = 'gif|jpg|png|mp4';
                        //$config['max_size'] = 10048;
                        $config['encrypt_name'] = TRUE;
                        $this->load->library('upload', $config);

                        if ($this->upload->do_upload('second_pic')) {
                            //die('it works here');

                            $second_picData = $this->upload->data();
                        }
                        else{
                            die($this->upload->display_errors());
                        }
                    }
                    else{


                        die('Second Prize picture cannot be empty upload the picture of the prize.. you can check google to download picture');

                    }


                    if(!empty($_FILES['third_pic']['name'])){
                        $uploadPath = './uploads/contests/';
                        $config['upload_path'] = $uploadPath;
                        $config['allowed_types'] = 'gif|jpg|png|mp4';
                        //$config['max_size'] = 10048;
                        $config['encrypt_name'] = TRUE;
                        $this->load->library('upload', $config);

                        if ($this->upload->do_upload('third_pic')) {
                            //die('it works here');

                            $third_picData = $this->upload->data();
                        }
                        else{
                            die($this->upload->display_errors());
                        }
                    }
                    else{


                        die('Third Prize picture cannot be empty upload the picture of the prize.. you can check google to download picture');

                    }



                    $contestID =  str_replace('.','',microtime(date('Ymdhis'))).rand(000001, 99999999);


                    //insert into table

                    $insertContest = array(

                        "contest_name"=> str_replace('contest','',$this->input->post('contest_name')),
                        "contest_id" => $contestID,
                        "contest_start_date" => $this->input->post('submission_ends'),
                        "contest_close_date" => $this->input->post('voting_ends'),
                        "contest_grand_price" => $this->input->post("first_reward"),
                        "contest_picture" => $BannerData['file_name'],
                        "category" => $this->input->post('category'),
                        "tags" => $this->input->post('tags'),
                        "description" => $this->input->post('introduction'),
                        "entry_price" => $this->input->post('entry_point'),
                        "date" => date('Y-m-d H:i:s'),

                    );


                    $insertPrize = array(
                        "contest_name"=>str_replace('contest','',$this->input->post('contest_name')),
                        "contest_id"=> $contestID,
                        "contest_1st_price" => $this->input->post('first_prize'),
                        "contest_2nd_price" => $this->input->post('second_prize'),
                        "contest_3rd_price" => $this->input->post('third_prize'),
                        "contest_1st_picture" => $first_picData['file_name'],
                        "contest_2nd_picture" => $second_picData['file_name'],
                        "contest_3d_picture" => $third_picData['file_name'],
                        "first_reward" => $this->input->post('first_reward'),
                        "second_reward" => $this->input->post('second_reward'),
                        "third_reward" => $this->input->post('third_reward'),
                    );

                    $insertPost_timeline = array(
                        'post_id' => str_replace('.','',microtime(date('Ymdhis'))).rand(00, 999),
                        'post_title'=>str_replace('contest','',$this->input->post('contest_name')),
                        'poster_name'=> $data['username'],
                        'poster_id'=>'admin',
                        'post_type'=>'contest',
                        'media_id'=> $contestID,
                        'date'=> date("Y-m-d H:i:s"),
                    );


                    $insertNotification = array(

                        "message"=> "A new contest (". $this->input->post('contest_name')  .") has been created.. click to check",
                        "link"=> base_url('contests/check'.$contestID),
                        'user_id'=>'Admin',
                        'date'=> date('Y-m-d H:i:s'),
                        );


                    //add to contest table
                    $this->db->insert("contests", $insertContest);
                    //add to contest price table
                    $this->db->insert("contest_price_picture", $insertPrize);
                    //add to post timeline table
                    $this->db->insert("post_timeline", $insertPost_timeline);
                    //add notification
                    $this->db->insert("notificationx", $insertNotification);



                    redirect(base_url('admin/upload_success'));
                }
            }
        }
    }


    public  function upload_success(){

         $data['success'] ='';
        $this->load->view("admin/template/admin_header", $data);
        $this->load->view('admin/success');
        $this->load->view("admin/template/admin_footer", $data);

    }


    public function photos(){


        $data['title'] = '';

        if (!isset($_SESSION['userLogginID'])) {

            redirect(base_url('login'));


        } else {

            require_once('action/fetch_user.php');
            require_once('action/admin_info.php');
            require_once('action/time_function.php');

            if ($data['adminStatus'] !== '1') {
                redirect(base_url('user/home'));
            } else {



                //get all picture
                $this->db->select('*');
                $this->db->order_by('id', 'DESC');
                $data['getAllPicture'] = $this->db->get('uploads')->result_array();


                $this->load->view("admin/template/admin_header", $data);
                $this->load->view("admin/photos", $data);
                $this->load->view("admin/template/admin_footer", $data);
            }


        }



    }



    public function videos(){


        $data['title'] = '';

        if (!isset($_SESSION['userLogginID'])) {

            redirect(base_url('login'));


        } else {

            require_once('action/fetch_user.php');
            require_once('action/admin_info.php');

            if ($data['adminStatus'] !== '1') {
                redirect(base_url('user/home'));
            } else {
                $this->load->view("admin/template/admin_header", $data);
                $this->load->view("admin/videos", $data);
                $this->load->view("admin/template/admin_footer", $data);
            }


        }
    }


    public function vote(){


        $data['title'] = '';

        if (!isset($_SESSION['userLogginID'])) {

            redirect(base_url('login'));


        } else {

            require_once('action/fetch_user.php');
            require_once('action/admin_info.php');

            if ($data['adminStatus'] !== '1') {
                redirect(base_url('user/home'));
            } else {
                $today = date('Y-m-d');

                //count all open vote contest
                $this->db->where("type='contest' AND vote_end_date >'$today' AND status='0'");
                $data['contestVoteOpen'] = $this->db->count_all_results('vote_information');

                //count all open vote contest
                $this->db->where("type='contest' AND vote_end_date < '$today' AND status !='0'");
                $data['contestVoteClose'] = $this->db->count_all_results('vote_information');


                //count all open vote contest
                $this->db->where("type='challenge' AND vote_end_date >'$today' AND status='0'");
                $data['challengeVoteOpen'] = $this->db->count_all_results('vote_information');

                //count all open vote contest
                $this->db->where("type='challenge' AND vote_end_date < '$today' AND status !='0'");
                $data['challengeVoteClose'] = $this->db->count_all_results('vote_information');


                //get open vote and detail
                $this->db->where("type='contest' AND vote_end_date >'$today' AND status='0'");
                $data['getOpenContestVote'] = $this->db->get('vote_information')->result_array();


                $this->load->view("admin/template/admin_header", $data);
                $this->load->view("admin/vote", $data);
                $this->load->view("admin/template/admin_footer", $data);
            }
        }
    }


    public function prize_approve($id){

        $data['title'] = '';
        $data['success'] = '';

        if (!isset($_SESSION['userLogginID'])) {

            redirect(base_url('login'));


        } else {

            require_once('action/fetch_user.php');
            require_once('action/admin_info.php');

            if ($data['adminStatus'] !== '1') {
                redirect(base_url('user/home'));
            } else {



                //get all contest information
                $this->db->select('*');
                $this->db->where("contest_challenge_id='$id'");
                $this->db->from('vote_information');
                $this->db->join('contest_price_picture', 'contest_price_picture.contest_id = vote_information.contest_challenge_id');
                $this->db->join('contests', 'contests.contest_id = vote_information.contest_challenge_id');
                $getContestInfo = $this->db->get()->result();

                foreach($getContestInfo as $data['contestInfo']);

                    //get number of entries
                $this->db->where("entry_id='$id'");
                $data['countEntry'] = $this->db->count_all_results('entries_submited');

                //sum vote
                $this->db->select_sum('vote');
                $this->db->where("entry_id = '$id'");
                $getTotalVote = $this->db->get('votex')->result();

                foreach($getTotalVote as $data['totalVotex']);

                $data['query'] = $this->db->query("SELECT picture_id, COUNT(*) c FROM votex WHERE entry_id='$id' GROUP BY picture_id HAVING c > 1 ORDER BY c DESC LIMIT 10");



                //$data['getVoteRank'] = $this->db->get('votex')->result_array();


                $this->form_validation->set_rules('award1', $data['contestInfo']->contest_1st_price.' Award ','required|trim');
                $this->form_validation->set_rules('award2',$data['contestInfo']->contest_2nd_price.' Award ','required|trim');
                $this->form_validation->set_rules('award3',$data['contestInfo']->contest_3rd_price.' Award ','required|trim');
                $this->form_validation->set_rules('entry_id','Award Prize','required|trim');
                $this->form_validation->set_rules('entry_name','Entry Name','required|trim');
                $this->form_validation->set_error_delimiters("<div class='alert alert-danger text-white'><a class='close' data-dismiss='alert'>x</a>", "</div>");

                if($this->form_validation->run() == false) {

                    $this->load->view("admin/template/admin_header", $data);
                    $this->load->view("admin/approve_prize", $data);
                    $this->load->view("admin/template/admin_footer", $data);
                }

                else{


                    $award1 = $this->input->post('award1');
                    $award2 = $this->input->post('award2');
                    $award3 = $this->input->post('award3');

                    $awardTitle1 = $data['contestInfo']->contest_1st_price;
                    $awardTitle2 = $data['contestInfo']->contest_2nd_price;
                    $awardTitle3 = $data['contestInfo']->contest_3rd_price;

                    $contestEntryID = $this->input->post('entry_id');
                    $contestEntryName = $this->input->post('entry_name');

                    //get information about award 1
                    //$this->db->select('username','picture_id');
                    $this->db->where("picture_id = '$award1' OR picture_id='$award2' OR picture_id = '$award3'");
                    $countInput = $this->db->count_all_results('uploads');

                    //check if the user has already approve award before
                    $this->db->where("entry_id = '$id'");
                    $countPrizeWon = $this->db->count_all_results("prize_won");

                    if($countPrizeWon >=1){

                        $data['success'] = "<div class='alert alert-danger text-white'><a class='close' data-dismiss='alert'>x</a> You have awarded prize for this contest already  </div>";

                        $this->load->view("admin/template/admin_header", $data);
                        $this->load->view("admin/approve_prize", $data);
                        $this->load->view("admin/template/admin_footer", $data);

                    }


                    if($countInput < 3){

                        $data['success'] = "<div class='alert alert-danger text-white'><a class='close' data-dismiss='alert'>x</a> Please make sure you enter a correct Picture ID for all the fields  </div>";

                        $this->load->view("admin/template/admin_header", $data);
                        $this->load->view("admin/approve_prize", $data);
                        $this->load->view("admin/template/admin_footer", $data);
                    }

                    else {


                        $this->db->where("picture_id = '$award1' OR picture_id='$award2' OR picture_id = '$award3'");
                        $getPictureInfo = $this->db->get('uploads')->result();

                        $userNameAward1 = $getPictureInfo[0]->username;
                        $userNameAward2 = $getPictureInfo[1]->username;
                        $userNameAward3 = $getPictureInfo[2]->username;


                        //insert Award1 into the table

                        $insertAward1 = array(

                            array(
                            'username' => $userNameAward1,
                            'user_id' => $getPictureInfo[0]->user_id,
                            'entry_id' => $contestEntryID,
                            'entry_name' => $contestEntryName,
                            'submitted_media_id' => $award1,
                            'prize_won' => $awardTitle1,
                            'reward_won' => $data['contestInfo']->first_reward,
                            'date' => date('Y-m-d')
                            ),

                            array(
                                'username' => $userNameAward2,
                                'user_id' => $getPictureInfo[1]->user_id,
                                'entry_id' => $contestEntryID,
                                'entry_name' => $contestEntryName,
                                'submitted_media_id' => $award2,
                                'prize_won' => $awardTitle2,
                                'reward_won' => $data['contestInfo']->second_reward,
                                'date' => date('Y-m-d')
                            ),

                            array(
                                'username' => $userNameAward3,
                                'user_id' => $getPictureInfo[2]->user_id,
                                'entry_id' => $contestEntryID,
                                'entry_name' => $contestEntryName,
                                'submitted_media_id' => $award3,
                                'prize_won' => $awardTitle3,
                                'reward_won' => $data['contestInfo']->third_reward,
                                'date' => date('Y-m-d')
                            )
                        );


                        //insert 2

                        $insertAward2 = array(
                            'username' => $userNameAward2,
                            'user_id' => $getPictureInfo[1]->user_id,
                            'entry_id' => $contestEntryID,
                            'entry_name' => $contestEntryName,
                            'submitted_media_id' => $award2,
                            'prize_won' => $awardTitle2,
                            'reward_won' => $data['contestInfo']->second_reward,
                            'date' => date('Y-m-d')
                        );

                        //insert 3

                        $insertAward3 = array(
                            'username' => $userNameAward3,
                            'user_id' => $getPictureInfo[2]->user_id,
                            'entry_id' => $contestEntryID,
                            'entry_name' => $contestEntryName,
                            'submitted_media_id' => $award3,
                            'prize_won' => $awardTitle3,
                            'reward_won' => $data['contestInfo']->third_reward,
                            'date' => date('Y-m-d')
                        );

                        //update status
                        $this->db->where("contest_id='$id'");
                        $this->db->update("contests", array('contest_status' => '2'));

                        $this->db->where("contest_challenge_id='$id'");
                        $this->db->update("vote_information", array("status" => '2'));

                        $this->db->insert_batch('prize_won', $insertAward1);

                        //$this->db->insert('prize_won', $insertAward2);
                        //$this->db->insert('prize_won', $insertAward3);

                        //notify the winner

                        $notifyFirstWinner = array(
                            array(
                            "message"=>"Congratulation!!! You have won ".$awardTitle1." with the reward of ". $data['contestInfo']->first_reward,
                            "link" => base_url("winners/check/".$id),
                            "user_id"=> $getPictureInfo[0]->user_id,
                            "date"=> date('Y-m-d H:i:s'),
                        ),

                            array(
                                "message"=>"Congratulation!!! You have won ".$awardTitle2." with the reward of ". $data['contestInfo']->second_reward,
                                "link" => base_url("winners/check/".$id),
                                "user_id"=> $getPictureInfo[1]->user_id,
                                "date"=> date('Y-m-d H:i:s'),
                            ),

                            array(
                                "message"=>"Congratulation!!! You have won ".$awardTitle3." with the reward of ". $data['contestInfo']->third_reward,
                                "link" => base_url("winners/check/".$id),
                                "user_id"=> $getPictureInfo[2]->user_id,
                                "date"=> date('Y-m-d H:i:s'),
                            )

                        );


                        $this->db->insert_batch('notificationx', $notifyFirstWinner );


                        $data['success'] = "<div class='alert alert-success text-white'><a class='close' data-dismiss='alert'>x</a> Prize Awarded Successfully.. you will be redirected to vote page in  <span id='secondsDisplay' class='text-white'>15 seconds</span>   </div>";

                        $this->load->view("admin/template/admin_header", $data);
                        $this->load->view("admin/approve_prize", $data);
                        $this->load->view("admin/template/admin_footer", $data);
                    }


                }
            }


        }




    }



    public function transactions(){


        $data['title'] = '';

        if (!isset($_SESSION['userLogginID'])) {

            redirect(base_url('login'));


        } else {

            require_once('action/fetch_user.php');
            require_once('action/admin_info.php');

            if ($data['adminStatus'] !== '1') {
                redirect(base_url('user/home'));
            } else {
                $this->load->view("admin/template/admin_header", $data);
                $this->load->view("admin/transaction", $data);
                $this->load->view("admin/template/admin_footer", $data);
            }
        }
    }
}

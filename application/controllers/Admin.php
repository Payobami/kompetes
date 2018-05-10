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



                    $contestID =  date('Ymd').''.rand(111111111111111, 999999999999999999999999);


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


                    $this->db->insert("contests", $insertContest);
                    $this->db->insert("contest_price_picture", $insertPrize);


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
}
<?php
/**
 * Created by PhpStorm.
 * User: prudent
 * Date: 06-Apr-18
 * Time: 7:41 PM
 */



class Profile extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->helper(array('url','form'));
        $this->load->library(array('session','form_validation'));
        $this->load->database();
    }


    public function index(){
        $data['success']="";
        $data['title'] = "Profile";

        if(!isset($this->session->userLogginID)){

            $data['title']='Login';
            $data['success']="<div class='alert alert-danger text-white no-border-radius'><a class='close' data-dismiss='alert'>x</a> Please login</div>";
            $this->load->view('template/header',$data);
            $this->load->view('login',$data);
            $this->load->view('template/footer',$data);
        }

        else{

            require_once('action/fetch_user.php');
            $this->load->view('template/header', $data);
            $this->load->view('template/myprofile_middle_page', $data);
            $this->load->view('myProfile', $data);
        }
    }

    public function update(){
        $data['success']="";
        $data['title'] = "Update Profile";
        $UserID = $this->session->userLogginID;
        if(!isset($this->session->userLogginID)){

            $data['title']='Login';
            $data['success']="<div class='alert alert-danger text-white no-border-radius'><a class='close' data-dismiss='alert'>x</a> Please login</div>";
            $this->load->view('template/header',$data);
            $this->load->view('login',$data);
            $this->load->view('template/footer',$data);
        }

        else {

            require_once('action/fetch_user.php');

            $this->form_validation->set_rules('firstname', 'Firstname', 'trim|required');
            $this->form_validation->set_rules('lastname', 'Lastname', 'trim|required');
            $this->form_validation->set_rules('birthday', 'Birthday', 'trim|required');
            $this->form_validation->set_rules('birthmonth', 'Birth Month', 'trim|required');
            $this->form_validation->set_rules('birthyear', 'Birth Year', 'trim|required');
            $this->form_validation->set_rules('website', 'Website', 'trim');
            $this->form_validation->set_rules('facebook', 'Facebook', 'trim');
            $this->form_validation->set_rules('twitter', 'Twitter', 'trim');
            $this->form_validation->set_rules('instagram', 'Instagram', 'trim');
            $this->form_validation->set_rules('country', 'Country', 'trim|required');
            $this->form_validation->set_rules('state', 'State', 'trim');
            $this->form_validation->set_rules('city', 'City', 'trim');
            $this->form_validation->set_rules('about', 'Introduction', 'trim');
            $this->form_validation->set_error_delimiters("<div class='alert alert-danger no-border-radius text-white'><a class='close' data-dismiss='alert'>&times;</a>", "</div>");

            if ($this->form_validation->run() == false) {
                $this->load->view('template/header', $data);
                $this->load->view('profile_settings', $data);
                //$this->load->view('template/footer');

            }
            else {

                $first_name = $this->input->post('firstname');
                $last_name = $this->input->post('lastname');
                $birthday = $this->input->post('birthday');
                $gender = $this->input->post('gender');
                $birthmonth = $this->input->post('birthmonth');
                $birthyear = $this->input->post('birthyear');
                $website = $this->input->post('website');
                $facebook = $this->input->post('facebook');
                $twitter = $this->input->post('twitter');
                $instagram = $this->input->post('instagram');
                $country = $this->input->post('country');
                $state = $this->input->post('state');
                $city = $this->input->post('city');
                $about = $this->input->post('about');


                $updateUser = array(
                    'firstname'=> $first_name,
                    'lastname' => $last_name,
                    'birthday' => $birthday.'-'.$birthmonth.'-'.$birthyear,
                    'website' => $website,
                    'gender' => $gender,
                    'facebook' => $facebook,
                    'twitter' => $twitter,
                    'instagram' => $instagram,
                    'country' => $country,
                    'state' => $state,
                    'city' => $city,
                    'about' => $about,
                );

                $this->db->where("user_id ='$UserID'");
                $this->db->update('userz', $updateUser);


                $data['success'] =  "<div class='alert alert-success text-white no-border-radius'><a class='close' data-dismiss='alert'>X</a> Profile updated successful!!! </div>";
                $this->load->view('template/header', $data);
                $this->load->view('profile_settings', $data);
            }
        }
    }


    public function update_dp()
    {

        $data['success'] = "";
        $data['title'] = "Update Profile";


        if (!isset($this->session->userLogginID)) {

            $data['title'] = 'Login';
            $data['success'] = "<div class='alert alert-danger text-white no-border-radius'><a class='close' data-dismiss='alert'>x</a> Please login</div>";
            $this->load->view('template/header', $data);
            $this->load->view('login', $data);
            $this->load->view('template/footer', $data);
        } else {

            require_once('action/fetch_user.php');

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                if (!empty($_FILES['photo']['name'])) {

                    $uploadPath = './users_photo/';
                    $config['upload_path'] = $uploadPath;
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size'] = 2048;
                    $config['encrypt_name'] = TRUE;
                    $this->load->library('upload', $config);


                    if ($this->upload->do_upload('photo')) {
                        //die('it works here');


                        $fileData = $this->upload->data();

                        $config['image_library'] = 'gd2';
                        $config['source_image'] = './users_photo/' . $fileData['file_name'];
                        $config['maintain_ratio'] = TRUE;
                        $config['width'] = 280;
                        $config['height'] = 280;


                        $this->load->library('image_lib', $config);
                        $this->image_lib->resize();


                        //update user table

                        $UserID = $this->session->userLogginID;

                        $this->db->where("user_id = '$UserID'");
                        $this->db->update('userz', array('picture' => $fileData['file_name']));

                        //die('Uploaded');

                        $data['success'] = "<div class='alert alert-success text-white no-border-radius'><a class='close' data-dismiss='alert'>X</a> Picture Uploaded Successfully.... </div>";
                        $this->load->view('template/header');
                        $this->load->view('profile_settings', $data);
                    }


                    if (!$this->upload->do_upload('photo')) {
                        //die('Not uploaded');
                        $data['success'] = "<div class='alert alert-danger text-white no-border-radius'><a class='close' data-dismiss='alert'>X</a> " . $this->upload->display_errors() . "</div>";
                        $this->load->view('template/header',$data);
                        $this->load->view('profile_settings', $data);
                    }

                }
            } else {


                //die('Not uploaded');
                //$data['success'] =  "<div class='alert alert-danger text-white no-border-radius'><a class='close' data-dismiss='alert'>X</a> ".$this->upload->display_errors()."</div>";
                $this->load->view('template/header', $data);
                $this->load->view('profile_settings', $data);

            }
        }
    }



    public function change_password(){

        //die('Weldone');
        if(!isset($this->session->userLogginID)){

            $data['title']='Login';
            $data['success']="<div class='alert alert-danger text-white no-border-radius'><a class='close' data-dismiss='alert'>x</a> Please login</div>";
            $this->load->view('template/header',$data);
            $this->load->view('login',$data);
            $this->load->view('template/footer',$data);
        }
        else {

            $data['success'] = "";
            $data['title'] = "Update Profile";

            require_once('action/fetch_user.php');

            $this->form_validation->set_rules('old_password', 'Old Password', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[cpassword]');
            $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required');
            $this->form_validation->set_error_delimiters("<div class='alert alert-danger no-border-radius text-white'><a class='close' data-dismiss='alert'>&times;</a>", "</div>");


            if ($this->form_validation->run() == false) {
                $this->load->view('template/header', $data);
                $this->load->view('profile_settings', $data);
            } else {
                $oldPassword = md5($this->input->post('old_password'));
                $password = md5($this->input->post('password'));

                if ($data['userPassword'] !== $oldPassword) {

                    //Terminate.... Password not match

                    $data['success'] = "<div class='alert alert-danger no-border-radius'><a class='close' data-dismiss='alert'>x</a> Old password and New password doesn't match; Please re-enter </div>";

                    $this->load->view('template/header', $data);
                    $this->load->view('profile_settings', $data);
                } else {
                    //update password here

                    $this->db->where("user_id='$UserID'");
                    $this->db->update('userz', array('passwordx' => $password));
                    $data['success'] = "<div class='alert alert-success text-white no-border-radius'><a class='close' data-dismiss='alert'>x</a> Password Updated Successfully</div>";
                    $this->load->view('template/header', $data);
                    $this->load->view('profile_settings', $data);
                }


            }


        }
    }


    public function vote(){

        $data['success']="";
        $data['title'] = "Profile";

        if(!isset($this->session->userLogginID)){

            $data['title']='Login';
            $data['success']="<div class='alert alert-danger text-white no-border-radius'><a class='close' data-dismiss='alert'>x</a> Please login</div>";
            $this->load->view('template/header',$data);
            $this->load->view('login',$data);
            $this->load->view('template/footer',$data);
        }

        else{

            require_once('action/fetch_user.php');
            $this->load->view('template/header', $data);
            $this->load->view('template/myprofile_middle_page', $data);
            $this->load->view('myProfile_award', $data);
        }


    }


    public function contest(){

        $data['success']="";
        $data['title'] = "Profile";

        if(!isset($this->session->userLogginID)){

            $data['title']='Login';
            $data['success']="<div class='alert alert-danger text-white no-border-radius'><a class='close' data-dismiss='alert'>x</a> Please login</div>";
            $this->load->view('template/header',$data);
            $this->load->view('login',$data);
            $this->load->view('template/footer',$data);
        }

        else{

            require_once('action/fetch_user.php');
            $this->load->view('template/header', $data);
            $this->load->view('template/myprofile_middle_page', $data);
            $this->load->view('myProfile_contest', $data);
        }


    }


    public function challenges(){

        $data['success']="";
        $data['title'] = "Profile";

        if(!isset($this->session->userLogginID)){

            $data['title']='Login';
            $data['success']="<div class='alert alert-danger text-white no-border-radius'><a class='close' data-dismiss='alert'>x</a> Please login</div>";
            $this->load->view('template/header',$data);
            $this->load->view('login',$data);
            $this->load->view('template/footer',$data);
        }

        else{

            require_once('action/fetch_user.php');
            $this->load->view('template/header', $data);
            $this->load->view('template/myprofile_middle_page', $data);
            $this->load->view('myProfile_challenges', $data);
        }


    }


    public function followers(){

        $data['success']="";
        $data['title'] = "Profile";

        if(!isset($this->session->userLogginID)){

            $data['title']='Login';
            $data['success']="<div class='alert alert-danger text-white no-border-radius'><a class='close' data-dismiss='alert'>x</a> Please login</div>";
            $this->load->view('template/header',$data);
            $this->load->view('login',$data);
            $this->load->view('template/footer',$data);
        }

        else{

            require_once('action/fetch_user.php');
            $this->load->view('template/header', $data);
            $this->load->view('template/myprofile_middle_page', $data);
            $this->load->view('myProfile_follower', $data);
        }
    }

    public function following(){

        $data['success']="";
        $data['title'] = "Profile";

        if(!isset($this->session->userLogginID)){

            $data['title']='Login';
            $data['success']="<div class='alert alert-danger text-white no-border-radius'><a class='close' data-dismiss='alert'>x</a> Please login</div>";
            $this->load->view('template/header',$data);
            $this->load->view('login',$data);
            $this->load->view('template/footer',$data);
        }

        else{

            require_once('action/fetch_user.php');
            $this->load->view('template/header', $data);
            $this->load->view('template/myprofile_middle_page', $data);
            $this->load->view('myProfile_following', $data);
        }
    }


    public function about(){

        $data['success']="";
        $data['title'] = "Profile";

        if(!isset($this->session->userLogginID)){

            $data['title']='Login';
            $data['success']="<div class='alert alert-danger text-white no-border-radius'><a class='close' data-dismiss='alert'>x</a> Please login</div>";
            $this->load->view('template/header',$data);
            $this->load->view('login',$data);
            $this->load->view('template/footer',$data);
        }

        else{

            require_once('action/fetch_user.php');
            $this->load->view('template/header', $data);
            $this->load->view('template/myprofile_middle_page', $data);
            $this->load->view('myProfile_about', $data);
        }


    }





}
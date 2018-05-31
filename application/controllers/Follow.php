<?php
/**
 * Created by PhpStorm.
 * User: prudent
 * Date: 26-Apr-18
 * Time: 12:48 PM
 */


class Follow extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->library(array('session','form_validation'));
        $this->load->helper(array('form','url'));
        $this->load->database();




    }


    public function following(){


        $data['success']="";
        $data['title'] = "";


        {
            $follow_id = $_POST['follow'];
            //run function from main class
            $useID = $_SESSION['userLogginID'];
            $follow_id = $_POST['follow'];
            $id = $_POST['follow'];

            require_once('action/fetch_user.php');

            //get user information
            $this->db->where("user_id='$id'");
            $getFollowing = $this->db->get('userz')->result();
            foreach($getFollowing as $following);

            $insertFollower = array(
                'username'=>$following->username,
                'user_id'=> $id,
                'follower_name'=> $data['username'],
                'follower_id'=> $_SESSION['userLogginID'],
                'date'=> date('Y-m-d H:i:s'),
            );

            $this->db->insert('followingx', $insertFollower);


        }







        if(!isset($_SESSION['userLogginID'])){


            $data['title']='Login';
            $data['success']="<div class='alert alert-danger text-white no-border-radius'><a class='close' data-dismiss='alert'>x</a> Please login</div>";

            redirect(base_url('login?redirect=user/profile/'.$id));

        }
        else{






            //check if the user is already following..
            $username = $data['username'];
            $useID = $_SESSION['userLogginID'];
            $this->db->where("follower_id ='$useID' AND user_id='$id' AND status='0'");
            $countFollow = $this->db->count_all_results('followingx');

            if($countFollow<=0 and isset($_POST['follow'])){


                    $follow_id = $_POST['follow'];
                    //run function from main class
                    //$submit->follow($user_id,$follow_id);





            }

        }
    }


    public function unfollow(){


        if(isset($_POST['Unfollow'])){
            $follow_id = $_POST['Unfollow'];
            //run function from main class

            $this->db->where("follower_id = '$follow_id'");
            $this->db->delete('followingx');

            die('deleted');


            /// /$submit->unFollow($user_id,$follow_id);
        }

    }


    public function like($id){



    }

    public function favourite($id){




    }

}
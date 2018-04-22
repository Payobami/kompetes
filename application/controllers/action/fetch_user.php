<?php
/**
 * Created by PhpStorm.
 * User: prudent
 * Date: 06-Apr-18
 * Time: 1:19 PM
 */



    $UserID = $this->session->userLogginID;


   $whereID = $this->db->where("user_id = '$UserID'");
    $getUser = $this->db->get('userz')->result();
    foreach($getUser as $user);
    $data['username'] = $user->username;
    $data['userEmail'] = $user->email;
    $data['userRegDate'] = $user->date;
    $userRegType = $user->reg_type;
    $data['userFirstName'] = $user->firstname;
    $data['userLastname'] = $user->lastname;
    $data['userState'] = $user->state;
    $data['userCountry'] = $user->country;
    $data['userCity'] = $user->city;
    $data['userBirthday'] = $user->birthday;
    $data['userFacebook'] = $user->facebook;
    $data['userTwitter'] = $user->twitter;
    $data['userInstagram'] = $user->instagram;
    $data['userWebsite'] = $user->website;
    $data['userDescription'] = $user->about;
    $data['userGender'] = $user->gender;
    $data['userAbout'] = $user->about;
    $data['userPhoto'] = $user->picture;
    $data['userPassword'] = $user->passwordx;




//get the numbers of pictures uploaded by the user

$whereID;
$data['countUploadPicture'] = $this->db->count_all_results('uploads');

//get the picture
$whereID;
$data['getUploadedPhotos'] = $this->db->get('uploads')->result_array();


//get user credit unit
$whereID;
$getUserCredit = $this->db->get('credit_subscription')->result();

foreach($getUserCredit as $userCredit);
$data['creditUnit'] = $userCredit->credit;


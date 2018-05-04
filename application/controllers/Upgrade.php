<?php
/**
 * Created by PhpStorm.
 * User: prudent
 * Date: 29-Apr-18
 * Time: 8:06 PM
 */

class Upgrade extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->helper(array('url', 'form'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->database();
    }



    public function index(){


        if(!isset($_SESSION['userLogginID'])){
            redirect(base_url('login?redirect=upgrade'));
        }

        else{

            require_once('action/fetch_user.php');


            $data['title']="Subscribe";
            $data['Success']="";

            $this->load->view("template/header",$data);
            $this->load->view("upgrade", $data);
            $this->load->view("template/footer",$data);

        }
    }


    public function checkout(){

        if(isset($_SERVER['REQUEST_METHOD']) == 'POST' && isset($_SESSION['userLogginID'])){

            $creditUnit = $this->input->post('unit');

            if(!empty($creditUnit)){


                $this->db->where("credit_unit='$creditUnit'");
                $getCredit = $this->db->get('credit_price')->result();

                foreach($getCredit as $creditDetails){

                    $data['creditU'] = $creditDetails->credit_unit;
                    $data['pricePerUnit'] = $creditDetails->price_per_credit;
                    $data['creditPrice'] = $creditDetails->credit_price;
                    $data['creditStatus'] = $creditDetails->status;

                }

                require_once("action/fetch_user.php");
                //require_once("./includes/braintree_init.php");
                $data['title'] =  "Checkout ". $data['creditPrice'];
                $data['successs'] = "";
                $data['error'] = "";


                if($this->form_validation->run() == false) {
                    $this->load->view("template/header", $data);
                    //$this->load->view("checkout", $data);
                    $this->load->view("template/footer", $data);
                }


            }
            else{

                $success = "<div class='alert alert-danger'>Please selected the amount of unit you want to subscribe <a class='close' data-dismiss='alert'>x</a> </div>";

            }
        }
        else{
            redirect(base_url('login?redirect=upgrade'));
        }

    }

    public function payout(){

        require_once("./vendor/autoload.php");

        if(file_exists(__DIR__ . "/../.env")) {
            $dotenv = new Dotenv\Dotenv(__DIR__ . "/../");
            $dotenv->load();
        }

        $gateway = new Braintree\Gateway([
            'environment' => 'production',
            'merchantId' => 'cwkjm2k88qyk4wxz',
            'publicKey' => 'x74r6tx4npf4m6gn',
            'privateKey' => '2518f4aac1e4ac5ed89bd7f9b7c436bf'
        ]);


        $amount = $_POST["amount"];
        $nonce = $_POST["payment_method_nonce"];

        $result = $gateway->transaction()->sale([
            'amount' => $amount,
            'paymentMethodNonce' => $nonce,
            'options' => [
                'submitForSettlement' => true
            ]
        ]);

        if ($result->success || !is_null($result->transaction)) {
            $transaction = $result->transaction;
            header("Location: transaction.php?id=" . $transaction->id);
        } else {
            $errorString = "";

            foreach($result->errors->deepAll() as $error) {
                $errorString .= 'Error: ' . $error->code . ": " . $error->message . "\n";
            }

            $_SESSION["errors"] = $errorString;
            header("Location: index.php");
        }



    }
}
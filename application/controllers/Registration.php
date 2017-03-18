<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {


    public function index()
    {

        $this->load->model('Registrationm');
        $username=$this->input->post('UserName');
        $result = $this->Registrationm->check_username($username);


        if (empty($result)) {


            $name=$this->input->post('Name');
            $emailto = $this->input->post('Email');
            $username=$this->input->post('UserName');
            $full_address=$this->input->post('full_address');
            $city=$this->input->post('city');
            $state=$this->input->post('state');
            $postal_code=$this->input->post('postal_code');
            $country = $this->input->post('country');
            $password1=$this->input->post('password1');
            $password2=$this->input->post('password2');



        $data = [
            //'id_user' => $result->id_user,
            'name' => $name,
            'email'=> $emailto,
            'username'=> $username,
            'full_address'=> $full_address,
            'state' => $state,
            'city'=> $city,
            'postal_code'=> $postal_code,
            'country' => $country,
            'password'=> $password1,
            'password1'=> $password2
        ];

        //$this->load->model('Registrationm');
        //$this->Registrationm->registeruser($name,$email,$username,$password1);
        $this->session->set_userdata($data);



///////////important/////////////////////////////////////////////////////////|
        //Email information
      //  $admin_email = $emailto;
       // $email = "";
        //$subject = "Rak";
       // $comment = 'http://sakibrahman.com/rak/Registration/Approve';




        //send email
       // mail($admin_email, $subject, $comment , $email);
////////////////////////////////////////////////////////////////////////////
        echo 'http://localhost/Rak/Registration/Approve';

        }else{ ?> <script>alert("Username already taken");</script><?php }
    }

    public function Approve(){

       // echo $this->session->userdata('name');

        $name=$this->session->userdata('name');
        $emailto = $this->session->userdata('email');
        $username=$this->session->userdata('username');
        $full_address=$this->session->userdata('full_address');
        $state= $this->session->userdata('state');
        $city=$this->session->userdata('city');
        $postal_code=$this->session->userdata('postal_code');
        $password1=$this->session->userdata('password1');
        $password2=$this->session->userdata('password');
        $country=$this->session->userdata('country');

        $this->load->model('Registrationm');
        $this->Registrationm->insert_registeruser($name,$emailto,$username,$full_address,$state, $city,$postal_code,$password2,$country);;
       // $this->load->view('rating',$this->data);


        redirect(Home);

    }


}
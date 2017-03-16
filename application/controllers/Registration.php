<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {


    public function index()
    {


            $name=$this->input->post('Name');
            $emailto = $this->input->post('Email');
            $username=$this->input->post('UserName');
            $full_address=$this->input->post('full_address');
            $city=$this->input->post('city');
            $postal_code=$this->input->post('postal_code');
            $password1=$this->input->post('password1');
            $password2=$this->input->post('password2');



        $data = [
            //'id_user' => $result->id_user,
            'name' => $name,
            'email'=>$emailto,
            'username'=>$username,
            'full_address'=>$full_address,
            'city'=>$city,
            'postal_code'=>$postal_code,
            'password'=>$password1,
            'password1'=>$password2
        ];

        //$this->load->model('Registrationm');
        //$this->Registrationm->registeruser($name,$email,$username,$password1);
        $this->session->set_userdata($data);




        //Email information
        $admin_email = $emailto;
        $email = "";
        $subject = "Rak";
        $comment = 'http://sakibrahman.com/rak/Registration/Approve';




        //send email
        mail($admin_email, $subject, $comment , $email);

    }

    public function Approve(){

        echo $this->session->userdata('name');

    }


}
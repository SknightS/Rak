<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {


    public function index()
    {


            $name=$this->input->post('Name');
            $email = $this->input->post('Email');
            $username=$this->input->post('UserName');
            $password1=$this->input->post('password1');
            $full_address=$this->input->post('full_address');




        $this->load->model('Registrationm');
        $this->Registrationm->registeruser($name,$email,$username,$password1);
        $this->session->set_userdata($name,$email,$username,$password1);
        /*$this->send_validation_email();
       // $this->data['get_reg']=$this->Registrationm->getregisteruser($name,$email,$username,$password1);
        //echo 'window.alert("user has been registerd")';
        //print_r($this->data['get_reg']);

        foreach ($this->data['get_reg'] as $e){

            $data = array(
                'reg_id'=>$e->id,
            'name' => $e->name,
            'email' =>$e->email ,
            'username' => $e->username,
            'password' => $e->password

        );

            $this->session->set_userdata($data);}
             //alert("hello");
            //print_r($this->session->userdata('username'));

            $this->load->view('registeruser');*/


            /*$this->load->model('Registrationm');
            $this->Registrationm->registeruser($name,$email,$username,$password1);
            //print_r($password1);
            /*if ($password1==$password2){
                $this->load->model('Registrationm');
               $this->Registrationm->registeruser($name,$email,$username,$password1);
            }*/





    }


}
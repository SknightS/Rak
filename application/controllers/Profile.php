<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function index(){
        $this->load->view('user_profile');
    }

    public function showuser($username)
    {
        $this->load->model('Profilem');
        $this->data['profile'] = $this->Profilem->getuser($username);


        $this->load->view('user_profile', $this->data);

    }

    public function update_usre(){

        $this->load->model('Profilem');
        $this->Profilem->updateuser();
        redirect(Profile::get_instance());
    }



}
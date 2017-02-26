<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


    public function index()
    {
        $this->load->view('index');

    }


    public function login (){

        $this->load->model('Login');
        $result = $this->Login->validate_user($_POST);
        echo $result;

        if (!empty($result)) {

            $data = [

                'username' => $result->username,
                'id'=>$result->id,
                'type'=>$result->type
            ];

            $this->session->set_userdata($data);
            $this->session->userdata($data);


            redirect('Admin_Home');

        }
        else
        {
            echo "<script>
                        alert('wrong username or password');
                       
					window.location=\"/Rak/Home\";
					
                    </script>";
            // redirect('test');
        }
    }



}

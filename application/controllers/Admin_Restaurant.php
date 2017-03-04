<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Restaurant extends CI_Controller
{
    public function index()
    {
        $this->load->model('Restaurantm');
        $this->data['show_res_content'] = $this->Restaurantm->show_restuarant_content();
        $this->load->view('admin_restaurant', $this->data );

    }

    public function insert_res(){


        $name = $this->input->post('name');
        $type  = $this->input->post('type');
        $address = $this->input->post('address');
        $city = $this->input->post('city');
        $state= $this->input->post('state');
        $postal_code  = $this->input->post('postal_code');
        $country = $this->input->post('country');
        $time  = $this->input->post('time');
        $username= $this->input->post('username');
        $password= $this->input->post('password');
        $vat= $this->input->post('vat');
        $status  = $this->input->post('status');
        $data = array(
            'name' => $name,
            'type' => $type,
            'address' => $address,
            'city' => $city,
            'state' => $state,
            'country' => $country,
            'time' => $time,
            'postal_code' => $postal_code,
            'username' => $username,
            'password' => $password,
            'vat' => $vat,
            'status' => $status

        );

        $this->db->insert('restaurant',$data);
        redirect(Admin_Restaurant);
    }

}
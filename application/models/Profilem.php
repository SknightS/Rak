<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Profilem extends CI_Model
{
    public function getuser($username){

        $query=$this->db->query("SELECT * FROM `user` WHERE `username`= '$username'");
        return $query->result();
    }

    public function updateuser(){

        $id =$this->input->post('id');
        $name=$this->input->post('name');
        $email=$this->input->post('email');
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $address=$this->input->post('address');
        $city=$this->input->post('city');
        $state=$this->input->post('state');
        $postcode=$this->input->post('postal_code');
        $country=$this->input->post('country');

        $data = array(
            'name' => $name,
            'email' => $email,
            'username' => $username,
            'password' => $password,
            'full_address' => $address,
            'city' => $city,
            'state' => $state,
            'postcode' => $postcode,
            'country' => $country);

        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }
}
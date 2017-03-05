<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Restaurantm extends CI_Model
{

    public function show_restuarant_content(){

        $query=$this->db->query("SELECT * FROM `restaurant`");
        return $query->result();

    }

    public function insert_restuarant_content(){
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
    }

    public function showedit($id){

    $query=$this->db->query("SELECT *  FROM  restaurant WHERE `id`= '$id'");
    return $query->result();

    }


}
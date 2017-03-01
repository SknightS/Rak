<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aboutusm extends CI_Model
{

    public function show_about_us_content(){

        $query=$this->db->query("SELECT * FROM `about_us` ORDER by id DESC LIMIT 1 ");
        return $query->result();

    }
    public function show_about_us_details_content(){

        $query=$this->db->query("SELECT * FROM `about_us_details` ORDER by id DESC LIMIT 1");
        return $query->result();

    }
    public function show_about_us_feature_content(){

        $query=$this->db->query("SELECT * FROM `about_us_feature` ");
        return $query->result();

    }
    function insert_main_content(){
        $small = $this->input->post('csmall');
        // $small  = $this->input->post('main_content_small');

        $data = array(

            'small' => $small

        );

        $this->db->insert('contact',$data);
    }
    function insert_customer_service_content(){
        $details = $this->input->post('details');
        $phone  = $this->input->post('phone');
        $email = $this->input->post('email');
        $data = array(
            'details' => $details,
            'phone' => $phone,
            'email' => $email
        );

        $this->db->insert('contact_customer_service',$data);
    }
    function insert_resturant_service_content(){
        $details = $this->input->post('details');
        $phone  = $this->input->post('phone');
        $email = $this->input->post('email');
        $data = array(
            'details' => $details,
            'phone' => $phone,
            'email' => $email
        );

        $this->db->insert('contact_restutant_service',$data);
    }
}
?>
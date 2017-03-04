<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Restaurantm extends CI_Model
{

    public function show_restuarant_content(){

        $query=$this->db->query("SELECT * FROM `restaurant`");
        return $query->result();

    }

    function insert_restuarant_content(){
        $big = $this->input->post('main_content_big');
        $small  = $this->input->post('main_content_small');

        $data = array(
            'big' => $big,
            'small' => $small,

        );

        $this->db->insert('home_main_content',$data);
    }

}
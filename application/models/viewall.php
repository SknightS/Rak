<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Homem extends CI_Model
{


    public function show_main_content(){

        $query=$this->db->query("SELECT * FROM `home_main_content` ORDER by id DESC LIMIT 1");
        return $query->result();

    }


}


?>
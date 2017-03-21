<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Res_Admin_m extends CI_Model
{
    public function showadd($id){

        $query=$this->db->query("SELECT * FROM `menu_attribute` WHERE `res_id`= $id");
        return $query->result();

    }
    public function showsearch_menu_attribute($text,$id){


        $this->db->select('*');
        $this->db->from('menu_attribute');
        $this->db->where('res_id',$id);
        $this->db->like('item_name',$text,'after');
       // $this->db->where('res_id',$id);
        $query = $this->db->get();
        return $query->result();
    }
}
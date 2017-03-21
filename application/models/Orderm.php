<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Orderm extends CI_Model
{
    public function order($userid,$name,$phone,$email,$address,$city,$state,$post_code,$country,$order_day,$order_time,$id,$res_name,$item_attr,$price,$quantity,$item_name){

        /*$query=$this->db->query("SELECT * FROM `restaurant`");
        return $query->result();*/

        $data = array(
            'userid' => $userid,
            'name'=>$name,
            'email' => $email ,

            'phone'=>$phone,

            'address'=>$address,
            'city'=>$city,
            'state'=>$state,
            'postcode'=>$post_code,
            'country'=>$country,
            'order_day'=>$order_day,
            'order_time'=>$order_time,
            'res_id'=>$id,
            'res_name'=>$res_name,
            'item_attr'=>$item_attr,
            'price'=>$price,
            'quantity'=>$quantity,
            'item_name'=>$item_name


        );
        $this->db->insert('order_cart', $data);


    }
    public function show_resinfo($id,$att_id){

        /*$query=$this->db->query("SELECT * FROM `restaurant`");
        return $query->result();*/


        //$query1 = $this->db->get_where('restaurant','menu_attribute', array('res_id' => $id));
        //$query2 = $this->db->get_where('menu_attribute', array('res_id' => $id));
       // return $query1->result();
        $query=$this->db->query("SELECT * FROM `restaurant`,`menu_attribute` WHERE `restaurant`.`res_id`=$id AND`menu_attribute`.`id`=$att_id ");
        //return $query2->result();
        return $query->result();


    }
    public function get_all_order(){

        $query = $this->db->get('order_cart');
        return $query->result();


    }
    public function delete_order($id){

        /*$query = $this->db->get('order_cart');
        return $query->result();*/
        $this->db->query("DELETE FROM `order_cart` WHERE `id`= '$id'");


    }
    public function accept_order($id){

        /*$query = $this->db->get('order_cart');
        return $query->result();*/
        $this->db->query("INSERT INTO `order` SELECT * FROM `order_cart` WHERE `id`= '$id'");
        $this->db->query("DELETE FROM `order_cart` WHERE `id`= '$id'");


    }


}

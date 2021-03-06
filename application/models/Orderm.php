<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Orderm extends CI_Model
{
    public function order($name,$username,$phone,$email,$address,$city,$state,$post_code,$country,$order_day,$order_time,$date,$id,$res_name,$item_attr,$price,$quantity,$item_name){

        /*$query=$this->db->query("SELECT * FROM `restaurant`");
        return $query->result();*/

        $data = array(

            'name'=>$name,
            'username'=>$username,
            'email' => $email ,

            'phone'=>$phone,

            'address'=>$address,
            'city'=>$city,
            'state'=>$state,
            'postcode'=>$post_code,
            'country'=>$country,
            'order_day'=>$order_day,
            'order_time'=>$order_time,
            'date'=>$date,
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


        $query=$this->db->query("SELECT * FROM `order_cart` GROUP BY `res_id`, `date` ORDER by `username` ASC ");
        return $query->result();

    }
    public function delete_order($id){

        /*$query = $this->db->get('order_cart');
        return $query->result();*/
        $this->db->query("DELETE FROM `order_cart` WHERE `id`= '$id'");


    }
    public function accept_order($id)
    {

        /*$query = $this->db->get('order_cart');
        return $query->result();*/
        /* $this->db->query("INSERT INTO `order` SELECT * FROM `order_cart` WHERE `id`= '$id'");
         $this->db->query("DELETE FROM `order_cart` WHERE `id`= '$id'");*/

        $query = $this->db->get_where('order_cart', array('id' => $id));

        foreach ($query->result() as $e) {

            $data = array(
                'name' => $e->name,
                'username' => $e->username,
                'email' => $e->email,
                'address' => $e->address,
                'city' => $e->city,
                'state' => $e->state,
                'postcode' => $e->postcode,
                'country' => $e->country,
                'phone' => $e->phone,
                'res_id' => $e->res_id,
                'res_name' => $e->res_name,
                'item_name' => $e->item_name,
                'item_attr' => $e->item_attr,
                'price' => $e->price,
                'quantity' => $e->quantity,
                'order_time' => $e->order_time,
                'order_day' => $e->order_day,
                'date' => $e->date,


            );
            $this->db->insert('order', $data);

        }
        $this->db->delete('order_cart', array('id' => $id));
    }


}

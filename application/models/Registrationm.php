<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Registrationm extends CI_Model
{
    public function insert_registeruser($name,$emailto,$username,$full_address,$state,$city,$postal_code,$password2,$country){

        /*$query=$this->db->query("SELECT * FROM `restaurant`");
        return $query->result();*/



        $data = array(
            'name' => $name,
            'email' => $emailto,
            'username' => $username,
            'password' => $password2,
            'full_address'=>$full_address,
            'city'=>$city,
            'state'=>$state,
            'postcode'=>$postal_code,
            'country'=>$country


        );
            $this->db->insert('user', $data);


    }
    public function getregisteruser($name,$email,$username,$password1){

        /*$query=$this->db->query("SELECT * FROM `restaurant`");
        return $query->result();*/

        $query = $this->db->get_where('registration', array('username' => $username,'email'=>$email,'name'=>$name,'password'=>$password1));
        return $query->result();

    }
}
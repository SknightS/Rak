<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Registrationm extends CI_Model
{
    public function registeruser($name,$email,$username,$password1,$full_address,$city,$state,$pcode,$country){

        /*$query=$this->db->query("SELECT * FROM `restaurant`");
        return $query->result();*/



        $data = array(
            'name' => $name,
            'email' => $email ,
            'username' => $username,
            'password' => $password1,
            'full_address'=>$full_address,
            'city'=>$city,
            'state'=>$state,
            'postcode'=>$pcode,
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
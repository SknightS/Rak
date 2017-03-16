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
        //$itemDescription = $this->input->post('address');
        //$price  = $this->input->post('Item_price');

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
        $image = $this->input->post('image');

        $fileName = $_FILES["res_image"]["name"];
        move_uploaded_file($_FILES["res_image"]["tmp_name"], "img/" . $fileName);

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
            'status' => $status,
            'Image' => $fileName,

        );

        $this->db->insert('restaurant',$data);
    }

    public function edit_res($id){
        $rname = $this->input->post('name');
        $rtype = $this->input->post('type');
        $raddress = $this->input->post('address');
        $rcity = $this->input->post('city');
        $rstate = $this->input->post('state');
        $rpostal_code = $this->input->post('postal_code');
        $rcountry = $this->input->post('country');
        $rtime = $this->input->post('time');
        $rusername = $this->input->post('username');
        $rpassword = $this->input->post('password');
        $rvat = $this->input->post('vat');
        $rstatus = $this->input->post('status');
        $rimage = $this->input->post('res_image');

        $data = array(
            'name' => $rname,
            'type' => $rtype,
            'address' => $raddress,
            'city' => $rcity,
            'state' => $rstate,
            'postal_code' => $rpostal_code,
            'country' => $rcountry,
            'time' => $rtime,
            'username' => $rusername,
            'password' => $rpassword,
            'vat' => $rvat,
            'status' => $rstatus,
            'Image' => $rimage,
        );
        $this->db->where('res_id', $id);
        $this->db->update('restaurant', $data);

    }

    public function showedit($id){

    $query=$this->db->query("SELECT *  FROM  restaurant WHERE `res_id`= '$id'");
    return $query->result();

}
    public function restaurant_details_description($id){



        $query = $this->db->get_where('restaurant_details', array('res_id' => $id));
        return $query->result();

    }

    public function restaurant_details_head($id){



        $query = $this->db->get_where('restaurant', array('res_id' => $id));
        return $query->result();

    }
    public function restaurant_details(){



        $query = $this->db->get('restaurant_details');
        return $query->result();

    }
    public function editadddetails($id){

        $query = $this->db->get_where('restaurant_details', array('res_id' => $id));
        return $query->result();
    }
    public function add_new_res_details($id,$rating,$description,$time){



        $data = array(
            'res_id' => $id ,
            'rating' => $rating ,
            'description' => $description,
            'time'=>$time,
        );

        $this->db->insert('restaurant_details', $data);
    }

    public function insert_rating(){}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restaurants extends CI_Controller {


    public function index()
    {
        $this->load->model('Restaurantm');
        $this->data['show_res_content'] = $this->Restaurantm->show_restuarant_content();
        $this->data['show_res_type']=$this->Restaurantm->show_resuarant_type();
       // $this->data['rating_avg']= $this->Restaurantm->get_rating_avg_without();
        $this->load->view('grid_list', $this->data);


    }

    public function show_restuarant_by_type($id)
    {
        //print_r($type);
       // $type =$this->input->post('id');
        $this->load->model('Restaurantm');
        $this->data['show_res_content'] = $this->Restaurantm->show_restuarant_by_type($id);
        $this->data['show_res_type']=$this->Restaurantm->show_resuarant_type();
       // $this->data['rating_avg']= $this->Restaurantm->get_rating_avg_without();
        $this->load->view('grid_list', $this->data);



       // print_r($this->data['show_res_content']);

    }
    public function showdetails($id)
    {
        $this->load->model('Restaurantm');
        $this->load->model('Commentm');
        $this->load->model('Userm');

        $res_id = $id;
        $this->data['details']= $this->Restaurantm->restaurant_details_description($id);
        $this->data['res_details']= $this->Restaurantm->showedit($res_id);
        $this->data['details_head']= $this->Restaurantm->restaurant_details_head($id);
        if ($this->session->userdata('username') != null){

        $this->data['res_rating']= $this->Restaurantm->get_rating($res_id);
        }

        $this->data['rating_avg']= $this->Restaurantm->get_rating_avg($res_id);
        $this->data['res_id']=$id;
        $this->data['comments']=$this->Commentm->get_comment($res_id);
        $this->data['user']=null;
        //$user=null;
        foreach ($this->data['comments'] as $comm)
        {
            $user = $comm->username;
            $this->data['user']= $this->Userm->get_user($user);
        }
        //$this->data['user']= $this->Commentm->get_comment($res_id);
        //print_r($this->data);
        $this->load->view('admin_res_datails',$this->data);
    }
}

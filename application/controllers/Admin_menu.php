<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_menu extends CI_Controller
{
    public function index()
    {
        $this->load->model('Restaurantm');
        $this->load->model('Menum');
        $data['show_res_content'] = $this->Restaurantm->show_restuarant_content();
        $data['mattribute'] = $this->Menum->show_menu_attribute();
        $this->data['show_res_content'] = $this->Restaurantm->show_restuarant_content();
        $this->load->view('admin_menu',$data);

    }
    public function insert_res(){

        $this->load->model('Menum');
        $this->Menum->insert_menu_content();
        redirect(Admin_Restaurant);
    }
}
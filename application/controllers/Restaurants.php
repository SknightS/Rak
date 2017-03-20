<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restaurants extends CI_Controller {


    public function index()
    {
        $this->load->model('Restaurantm');
        $this->data['show_res_content'] = $this->Restaurantm->show_restuarant_content();
        $this->data['show_res_type']=$this->Restaurantm->show_resuarant_type();
        $this->load->view('grid_list', $this->data);


    }

    public function show_restuarant_by_type($type)
    {
        //print_r($type);
        $this->load->model('Restaurantm');
        $this->data['show_res_content'] = $this->Restaurantm->show_restuarant_by_type($type);
        $this->data['show_res_type']=$this->Restaurantm->show_resuarant_type();
        $this->load->view('grid_list', $this->data);


    }
}

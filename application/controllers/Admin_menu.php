<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_menu extends CI_Controller
{
    public function index()
    {
    //    $this->load->model('Restaurantm');
      //  $this->data['show_res_content'] = $this->Restaurantm->show_restuarant_content();
        $this->load->view('admin_menu');

    }
}
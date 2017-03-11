<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item_Menu extends CI_Controller
{
    public function index()
    {

    }
    public function show_menu($red_id)
    {
        $this->load->model('Menum');

        $this->data['show_menu'] = $this->Menum->show_menu($red_id);
        $this->data['show_type'] = $this->Menum->show_type($red_id);
        $this->data['menu_attr']= $this->Menum->show_menu_attr($red_id);
        $this->data['id']=$red_id;
        $this->load->view('detail_page', $this->data);

    }
}

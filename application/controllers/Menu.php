<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function index()
    {

    }
    public function show_menu($red_id)
    {
        $this->load->model('Menum');
        $this->data['show_menu'] = $this->Menum->show_menu($red_id);
        $this->load->view('detail_page', $this->data);

    }
}

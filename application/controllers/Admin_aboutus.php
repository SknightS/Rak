<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_aboutus extends CI_Controller {

    public function index()
    {
        $this->load->model('Contactm');
        $this->data['show_contact_content'] = $this->Contactm->show_contact_content();
        $this->data['show_customer_content'] = $this->Contactm->show_customer_service_content();
        $this->data['show_resturant_content'] = $this->Contactm->show_resturant_service_content();
        $this->load->view('admin_contact', $this->data);

    }

}
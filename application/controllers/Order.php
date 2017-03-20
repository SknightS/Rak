<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

    public function index()
    {

        $this->load->model('Orderm');

        $this->data['te']= $this->Orderm->get_all_order();
        $this->load->view('order',$this->data['te']);

    }
    public function delete_order($id)
    {
        $this->load->model('Orderm');
        $this->Orderm->delete_order($id);
        redirect(Order);

    }
    public function accept_order($id)
    {

        $this->load->model('Orderm');
        $this->Orderm->accept_order($id);
        redirect(Order);

    }
}

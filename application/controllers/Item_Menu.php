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

    public function inser_cart(){
        $id = $this->input->post('id');

        $this->load->model('Menum');
        $this->data['get_cart_pro'] = $this->Menum->get_pro_cart($id);

       // print_r($this->data['get_cart_pro']);

        foreach ($this->data['get_cart_pro'] as $cr) {

            $cid=$cr->id;
            $citem_name=$cr->item_name;
            $price= $cr->price;

            $data = array(
                'id' => $cid,
                'qty' => 1,
                'price' => $price,
                'name' => $citem_name,
                'coupon' => 'XMAS-50OFF'
            );

            $this->cart->insert($data);

            $this->cart->insert($data);

            //echo $cr->id;

        }
    }

}

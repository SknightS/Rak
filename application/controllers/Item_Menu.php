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
        $this->load->model('Restaurantm');
        $this->data['show_menu'] = $this->Menum->show_menu($red_id);
        $this->data['show_type'] = $this->Menum->show_type($red_id);
        $this->data['menu_attr']= $this->Menum->show_menu_attr($red_id);
        $this->data['rating_avg']= $this->Restaurantm->get_rating_avg($red_id);
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
            $res_id=$cr->res_id;

            $data = array(
                'id' => $cid,
                'qty' => 1,
                'price' => $price,
                'name' => $citem_name,
                'coupon' => $res_id
            );

            $this->cart->insert($data);

            //echo $cr->id;

        }
    }

    public function insert_cart_withoutattr()
    {

        $id = $this->input->post('id');

        $this->load->model('Menum');
        $this->data['get_cart'] = $this->Menum->get_pro_cart_withoutattr($id);

        // print_r($this->data['get_cart_pro']);

        foreach ($this->data['get_cart'] as $cr) {

            $cid = $cr->id;
            $citem_name = $cr->item_name;
            $price = $cr->item_price;
            $res_id = $cr->res_id;

            $data = array(
                'id' => $cid,
                'qty' => 1,
                'price' => $price,
                'name' => $citem_name,
                'coupon' => $res_id
            );

            $this->cart->insert($data);
        }
    }

    public function update_add_cart(){

        $id = $this->input->post('id');
        $amount = $this->input->post('amount');


        $data = array(
            'rowid' => $id,
            'qty' => $amount,

        );
        $this->cart->update($data);



    }



    public function update_minus_cart(){

        $id = $this->input->post('id');
        $amount = $this->input->post('amount');


        $data = array(
            'rowid' => $id,
            'qty' => $amount,

        );
        $this->cart->update($data);

        echo $id;
    }
    public function order_now(){

        $this->load->view('cart');
    }
    public function order_confirm(){

        //$this->load->view('cart');
        $name = $this->input->post('name_order');
        //$userid=$this->session->userdata('userid');
        $userid= 1;
        $phone = $this->input->post('tel_order');
        $email = $this->input->post('email_order');
        $address = $this->input->post('address_order');
        $city = $this->input->post('city_order');
        $state = $this->input->post('state_order');
        $post_code = $this->input->post('pcode_oder');
        $country = $this->input->post('country_order');
        $order_day = $this->input->post('delivery_schedule_day');
        $order_time = $this->input->post('delivery_schedule_time');
        $id = $this->input->post('res_id');
        $att_id = $this->input->post('attr_id');
        $price = $this->input->post('price');
        $quantity=$this->input->post('qty');
        $item_name = $this->input->post('item_name');
        //print_r($id);

        $this->load->model('Orderm');
        $this->data['show_resinfo'] = $this->Orderm->show_resinfo($id,$att_id);
        foreach ($this->data['show_resinfo'] as $e){

            $res_name=$e->name;
            $item_attr=$e->item_attribute;
            //print_r($item_attr);
            $this->load->model('Orderm');
            $this->Orderm->order($userid,$name,$phone,$email,$address,$city,$state,$post_code,$country,$order_day,$order_time,$id,$res_name,$item_attr,$price,$quantity,$item_name);
        }
        redirect(Home);
        //print_r($res_id);



    }
}
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

        $this->load->view('admin_menu',$this->data);



    }
    public function insert_res(){

        $this->load->model('Menum');
        $this->Menum->insert_menu_content();
        //redirect(Admin_Restaurant);
    }

    function test(){
        extract($_POST);

        //print_r($textbox);

        for ($i=0;$i<count($textbox);$i++){
            echo $textbox[$i]."<br>";
            echo $textimage[$i]."<br>";
        }


    }
    function insert_menu_attr(){
        $this->load->model('Menum');
        $this->Menum->insert_menu_attr();
        //$this->load->view('admin_faq');

        redirect(Admin_menu);
    }
    function getres_id()
    {

        $rname = $this->input->post('rname');
        $this->load->model('Menum');
        $this->data['edit'] = $this->Menum->getres_id($rname);
        foreach ($this->data['edit'] as $s) {
            echo $s->res_id;
            /*$id=$s->res_id;
            $this->data['show_menu_item_content'] = $this->Menum->show_menu_item_content($id);
            foreach ($this->data['show_menu_item_content'] as $e) {
                echo $e->item_type;
            }*/
        }
    }

        function getres_idformenu() {

            $rname = $this->input->post('rname');
            $this->load->model('Menum');
            $this->data['edit'] = $this->Menum->getres_id($rname);
            foreach ($this->data['edit'] as $s) {
                //echo $s->res_id;
                $id = $s->res_id;
                $this->data['show_menu_item_content'] = $this->Menum->show_menu_item_content($id);
               // print_r($this->data['show_menu_item_content']);
                foreach ($this->data['show_menu_item_content'] as $e) {
                    //echo $e->item_type;
                    echo "<option value='" . $e->item_type . "'>" . $e->item_type . "</option>";
                }
            }
            }


    function showadd()
    {
        $id = $this->input->post('id');
        $this->load->model('Menum');
        $this->data['edit'] = $this->Menum->showedit($id);
        foreach ($this->data['edit'] as $e) {
            echo "<form role=\"form\" method=\"post\" action=\"http://localhost/Rak/Admin_menu/editcontent/$e->id\" >
                                    <div class=\"form-group\">
                                        <label>Resturant name</label>
                                        <input class=\"form-control\" type=\"text\" name=\"header\" value=\" $e->header \">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Sub Header</label>
                                        <input class=\"form-control\"type=\"text\" name=\"sub_header\" value=\" $e->sub_header \">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Details</label>
                                        <textarea class=\"form-control\"  name=\"details\" value=\" $e->details \">$e->details</textarea>
                                    </div>
                                        <input class=\"btn btn-success\" type=\"submit\">
                                    </form>";
        }
    }
    function insertmenuitem(){
        $this->load->model('Menum');
        $this->Menum->insertmenuitem();
        //$this->load->view('admin_faq');

        redirect(Admin_menu);
    }



}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_menu_attribute extends CI_Controller
{
    public function index()
    {

        if (!$this->input->post('btn_search_menu_attr')) {
            $this->load->model('Menum');
            $this->data['mattribute'] = $this->Menum->show_menu_attribute();
            $this->data['te'] = '';
            $this->load->view('menu_attribute', $this->data);
        } else {
            $text = $this->input->post('search_menu_att');
            $this->load->model('Menum');
            $this->data['mattribute'] = $this->Menum->show_menu_attribute();
            $this->data['te'] = $this->Menum->showsearch_menu_attribute($text);
            $this->load->view('menu_attribute', $this->data);


        }
    }

    public function get_search_menu_attr_autocomplete(){
        $this->load->model('Menum');
        if (isset($_GET['term'])){
            $q = strtolower($_GET['term']);
            $this->Menum->get_search_menu_attr_autocomplete($q);
        }
    }


    public function edit_res($id){

        $this->load->model('Menum');
        $this->Menum->edit_res($id);
        redirect(Admin_menu_attribute);
        /*
        $this->load->model('Menum');
        $this->Menum->menuedit($id);
        redirect(Restaurant_menu);
        */
    }

    public function showedit(){

        $id = $this->input->post('id');
        $this->load->model('Menum');
        $this->data['edit'] = $this->Menum->showedit($id);
        foreach ($this->data['edit'] as $e) {
            echo "<form role=\"form\" method=\"post\" action=\"http://localhost/Rak/Admin_menu_attribute/edit_res/$e->id\" >
                                        <div class=\"form-group\">
                                            <label>ID</label>      <?php echo $e->id;?>                                   
                                            
                                            <input class=\"form-control\" type=\"text\" name=\"id\" value=\" $e->id \" readonly>
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Res_id</label>
                                            <input class=\"form-control\" type=\"text\" name=\"res_id\" value=\" $e->res_id \" readonly>
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Item Name</label>
                                            <input class=\"form-control\" type=\"text\" name=\"Item_name\" value=\" $e->item_name \">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Item attribute</label>
                                            <input class=\"form-control\" type=\"text\" name=\"textbox\" value=\" $e->item_attribute \">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Price</label>
                                            <input class=\"form-control\" type=\"text\" name=\"Item_price\" value=\" $e->price \">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Serial</label>
                                            <input class=\"form-control\" type=\"text\" name=\"serial\" value=\" $e->serial \">
                                        </div>                                 
                                        <input class=\"btn btn-success\" type=\"submit\">
                                    </form>
                                    ";
        }
    }
}
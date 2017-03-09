<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restaurant_menu extends CI_Controller
{
    public function index()
    {
        /*$this->load->model('Restaurantm');
        $this->load->model('Menum');
        $data['show_res_content'] = $this->Restaurantm->show_restuarant_content();
        $data['mattribute'] = $this->Menum->show_menu_attribute();
        $this->data['show_res_content'] = $this->Restaurantm->show_restuarant_content();
        $this->load->view('admin_menu',$this->data);*/

        if (!$this->input->post('btnsearch')) {

            $this->data['te'] = '';
            $this->load->view('restaurant_menu', $this->data);
        } else {
            $text = $this->input->post('serch_res');
            $this->load->model('Menum');
            $this->data['te'] = $this->Menum->showsearch($text);
            $this->load->view('restaurant_menu', $this->data);


        }

    }

    public function editmenu($id)
    {
        $this->load->model('Menum');
       $this->Menum->menuedit($id);
       redirect(Restaurant_menu);


    }

    public function delete($id)
    {
        $this->load->model('Menum');
        $this->Menum->deletemenu($id);
        redirect(Restaurant_menu);

    }

    public function editmenumodal()
    {

        $id = $this->input->post('id');
        $this->load->model('Menum');
        $this->data['te'] = $this->Menum->getall($id);
        foreach ($this->data['te'] as $e) {
            echo "
                    <form role=\"form\" method=\"post\" action=\"http://localhost/Rak/Restaurant_menu/editmenu/$e->res_id\"
                                <div class=\"form-group\">
                                        <label> Rsetaurant Name</label>
                                            $e->res_name 
                                            </div>
                                             <div class=\"form-group\">
                                        <label>Item Type</label>
                                        <input class=\"form - control\"type=\"text\" name=\"item_type\" value=\" $e->item_type \">
                                            </div>
                                            
                                            <div class=\"form - group\">
                                        <label>Item Name</label>
                                        <input class=\"form - control\"type=\"text\" name=\"item_name\" value=\" $e->item_name \">
                                            </div>
                                    
                                    
                                    <div class=\"form - group\">
                                        <label>Item Description</label>
                                        <input class=\"form - control\"type=\"text\" name=\"item_desc\" value=\" $e->item_description \">
                                            </div>
                                    <div class=\"form - group\">
                                        <label>Item Price</label>
                                        <input class=\"form - control\"type=\"text\" name=\"item_price\" value=\" $e->item_price \">
                                            </div>
                                            
                                            <input type=\"hidden\" name=\"res_id\" value=\"<?php echo $e->res_id; ?>\"/>
                                    
                                    
                                   <input class=\"btn btn - success\" type=\"submit\">
                                    </form>";

        }


    }
}
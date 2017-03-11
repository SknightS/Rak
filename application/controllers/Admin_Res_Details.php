<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Res_Details extends CI_Controller {

    public function index()
{
    $this->load->model('Restaurantm');
    $this->data['res_details']= $this->Restaurantm->restaurant_details();

    $this->load->view('add_res_details',$this->data);

}
    public function showdetails($id)
    {
        $this->load->model('Restaurantm');
        $this->data['details']= $this->Restaurantm->restaurant_details_description($id);
        $this->data['details_head']= $this->Restaurantm->restaurant_details_head($id);
        //print_r($this->data);
        $this->load->view('admin_res_datails',$this->data);
    }
    public function editadddetail()
    {
        $id = $this->input->post('id');
        $this->load->model('Restaurantm');
        $this->data['editadddetails'] = $this->Restaurantm->editadddetails($id);
        foreach ($this->data['editadddetails'] as $e) {

            echo "<form role=\"form\" method=\"post\" action=\"http://localhost/Rak/Admin_Res_Details/add_new_res_details/$e->res_id\" >
                                        <div class=\"form-group\">
                                            <label>Restaurant ID</label>
                                            <input class=\"form-control\" type=\"text\" name=\"res_id\" value=\" $e->res_id \">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>rating</label>
                                            <input class=\"form-control\" type=\"text\" name=\"rating\" value=\" $e->rating \">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Description</label>
                                            <input class=\"form-control\" type=\"text\" name=\"description\" value=\" $e->description \">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Time</label>
                                            <input class=\"form-control\" type=\"text\" name=\"time\" value=\" $e->time \">
                                        </div>
                                       
                                        
                                        <input class=\"btn btn - success\" type=\"submit\">
                                    </form>
                                    ";
        }
    }
    public function add_new_res_details()

    {
        $id=$this->input->post('res_id');
        $rating = $this->input->post('rating');
        $description = $this->input->post('description');
        $time = $this->input->post('time');

        $this->load->model('Restaurantm');
        $this->Restaurantm->add_new_res_details($id,$rating,$description,$time);
        redirect(Admin_Res_Details);
    }


}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Res_Details extends CI_Controller {

    public function index()
{
    $this->load->model('Restaurantm');
    $this->data['res_details']= $this->Restaurantm->restaurant_details();


    $this->data['res_rating']= $this->Restaurantm->get_rating();
    $this->data['rating_avg']= $this->Restaurantm->get_rating_avg();

    $this->load->view('add_res_details',$this->data);



}
    public function showdetails($id)
    {
        $this->load->model('Restaurantm');
        $this->data['details']= $this->Restaurantm->restaurant_details_description($id);
        $this->data['details_head']= $this->Restaurantm->restaurant_details_head($id);
        $this->data['res_rating']= $this->Restaurantm->get_rating();
        $this->data['rating_avg']= $this->Restaurantm->get_rating_avg();
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

    public function insert_rating()
    {
        //redirect(Home);
        //$this->id=$this->input->post('id');
        //$this->res_id=$this->input->post('res_id');
        //$this->user_id=$this->input->post('user_id');
        $this->load->model('Ratingm');
        $this->load->model('Restaurantm');
        $this->data['res_rating']= $this->Restaurantm->get_rating();
        $this->rating=$this->input->post('rating');
        $this->res_id=$this->input->post('r_id');

        $this->Ratingm->insert_rating($this->rating,$this->r_id);
        echo $this->rating;
        //redirect(Home);
    }

    public function insert_comment()
    {
        $this->load->model('Commentm');
        $review = $this->input->post('review_text');
        $res_id = $this->input->post('restaurant_name');
        $this->Commentm->insert_comment($review,$res_id);
    }

}
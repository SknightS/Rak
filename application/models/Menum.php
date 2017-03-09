<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Menum extends CI_Model
{

    public function show_menu_attribute()
    {
        $query = $this->db->query("SELECT * FROM `menu_attribute`");
        return $query->result();
    }
    public function showadd($id){

        $query=$this->db->query("SELECT * FROM 'menu_attribute' WHERE `id`= '$id'");
        return $query->result();

    }
    public function insert_menu_content(){
        $name = $this->input->post('name');
        $type  = $this->input->post('Item_type');
        $itemDescription = $this->input->post('Item_description');
        $price  = $this->input->post('Item_price');
        $item_name = $this->input->post('Item_name');

        $data = array(
            'res_name' => $name,
            'item_type' => $type,
            'item_name' => $item_name,
            'item_description' => $itemDescription,
            'item_price' => $price,

        );

        $this->db->insert('menu',$data);
    }

    public function insert_menu_attr(){
        extract($_POST);

        $res_id = $this->input->post('res_id');
        $iname = $this->input->post('Item_name');
        $res_name = $this->input->post('name');
        $itype = $this->input->post('Item_type');
        $idescription = $this->input->post('Item_description');
        // $iattribute = $this->input->post('textbox[]');
        //$price  = $this->input->post('textimage[]');
        $textbox = $this->input->post('textbox[]');
        $textimage = $this->input->post('textimage[]');

        if($res_id!=null && $iname!=null && $textbox != null && $textimage !=null )
        {
            for($i = 0; $i<count($textbox);$i++)
            {
                //  $iattribute[$i]."<br/>";
                //$price[$i]."<br/>";
                $data = array(
                    'res_id' => $res_id,
                    'item_name' => $iname,
                    'item_attribute	' => $textbox[$i],
                    'price' => $textimage[$i],
                );
                $menudata = array(
                    'res_id' => $res_id,
                    'res_name' => $res_name,
                    'item_type' => $itype,
                    'item_name' => $iname,
                    'item_description' => $idescription,
                    'item_price' => $textimage[$i],
                );
                $this->db->insert('menu_attribute',$data);
                $this->db->insert('menu',$menudata);
            }
        }
        else{
            echo "some fields are missing";
        }

    }
    public function getres_id($rname){

        $query=$this->db->query("SELECT * FROM `restaurant` WHERE `name`= '$rname'");
        return $query->result();
    }
    public function showsearch($text){


        $this->db->select('*');
        $this->db->from('menu');
        $this->db->like('res_name',$text,'after');
        $query = $this->db->get();
        return $query->result();




    }
    public function menuedit($id){

        $item_name = $this->input->post('item_name');

        $item_type = $this->input->post('item_type');
        $item_desc = $this->input->post('item_desc');
        $item_price = $this->input->post('item_price');

        $data = array(


            'item_type' => $item_type,
            'item_name' => $item_name,
            'item_description' => $item_desc,
            'item_price' => $item_price,

        );


        $this->db->where('res_id', $id);
        $this->db->update('menu', $data);





    }
    public function deletemenu($id){

       // $this->db->where('id', $id);
       // $this->db->delete('menu');
        //print_r($id);

        $this->db->query("DELETE FROM `menu` WHERE `id`= '$id'");
        //return $query->result();



    }
    public function getall($id){


        $query=$this->db->query("SELECT * FROM `menu` WHERE `id`= '$id'");
        return $query->result();

    }


}

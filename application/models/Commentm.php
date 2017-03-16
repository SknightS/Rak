<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Commentm extends CI_Model
{
    public function insert_comment($review,$res_id)
    {
        $data = array(
            'res_id' => $res_id,
            'comment' => $review,
        );
        $this->db->insert('res_comment',$data);
    }
}
?>
<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ProdModel extends Model {
    public function select_all()
    {
    return $this->db->table('prod')->get_all();
    }

    public function getProductById($id){
        return $this->db->table('prod')->where('prod_id', $id)->get();
    }
   

}
    ?>

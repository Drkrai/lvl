<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Cart_model extends Model {
    public function insert($name, $price,$email){
        $data=array(
            'email' => $email,
            'name'=>$name,
            'price'=>$price,
        );

        $result= $this->db->table('cart')->insert($data);
    }
}
?>

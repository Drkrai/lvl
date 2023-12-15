<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Product_model extends Model {
    public function show(){
        return $this->db->raw("select * from product");
    }
    
    public function insert($name, $product,$quantity,$total,$address,$phone,$message){
        $data=array(
            'name'=>$name,
            'products'=>$product,
            'quantity'=>$quantity,
            'total'=>$total,
            'address'=>$address,
            'phone'=>$phone,
            'message'=>$message
        );

        $result= $this->db->table('orders')->insert($data);
    }


    public function showOrder(){
        return $this->db->raw("select * from orders");
    }

    public function updateStatus($id,$status){
        $data=array(
            'id'=>$id,
            'status'=>$status
        );
        $result=$this->db->table('orders')->where('id',$id)->update($data);
        if ($result==true) {
            return true;
        }
    }
    public function getInfo()
    {
        return $this->db->table('prod')->get_all();
    }
}
?>

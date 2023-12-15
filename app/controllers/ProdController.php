<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');


class ProdController extends Controller
{
    public function __construct() 
{
parent:: __construct();
$this->call->model('ProdModel');
$this->call->model('Cart_model');
$this->call->library('session');
}

public function userProduct(){
    $data = $this->ProdModel->select_all();
    $this->call->view('show', $data);
}
    //FIRST ADDED
    public function index() 
    {
        $this->call->model('ProdModel');
        $data['info'] = $this->ProdModel->select_all();
        return $this->call->view('ProductRecords',$data);
    }
    
    //connection for add form
    public function add_prod() 
    {
        $this->call->model('ProdModel');
        $data['info'] = $this->ProdModel->select_all();
        return $this->call->view('add_prod', $data);
    }

    public function add()
    {
        $prodname = $this->io->post('prodname');
        $description = $this->io->post('description');
        $price = $this->io->post('price');
        $stocks = $this->io->post('stocks');

        $bind = array(
            "prodname" => $prodname,
            "description" => $description,
            "price" => $price,
            "stocks" => $stocks
        );

        $this->db->table('prod')->insert($bind);

        redirect('/ProductRecords'); 
    }

    public function uploadProduct() {
        if (isset($_FILES["userfile"])) {
            $this->call->library('upload', $_FILES["userfile"]);
            $this->upload
                ->set_dir('public')
                ->is_image()
                ->encrypt_name();
            if ($this->upload->do_upload()) {
                $name = $this->io->post('name');
                $price = $this->io->post('price');
                $data['filename'] = $this->upload->get_filename();
                $this->User_model->insertProduct($name,$price,$data['filename']);
                redirect('/getProduct');
            } else {
                $data['errors'] = $this->upload->get_errors();
                $this->call->view('addProduct', $data);
            }
        } else {
            $data['errors'][] = 'No file selected for upload.';
            $this->call->view('addProduct', $data);
        }
    }


    public function addToCart($id)
    {
        $email=$_SESSION['email'];
        $product = $this->ProdModel->getProductById($id);
        $this->call->model('Cart_model');

        $this->Cart_model->insert(
            $product['prodname'],
            $product['price'],
            $email,
        );
        return redirect('/view-product');
    }


    public function allorder(){
        $this->call->view('user_addorder');
    }

    public function adminallorder(){
        $this->call->view('orders');
    }

    public function usercart(){
        $this->call->view('cart');
    }
}

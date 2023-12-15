<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class LoginController extends Controller {

    public function __construct() {
        parent::__construct();
        $this->call->library('Lauth');
        $this->call->model('email');
        $this->call->library('session');
        $this->call->library('form_validation');
        $this->call->library('upload');
    }


    public function register() {
		if ($this->form_validation->submitted()) {
            $this->form_validation
            ->name('name')
                ->required()
            ->name('email')
                ->required()
            ->name('password')
                ->required();
                $token=md5(rand());
            if ($this->form_validation->run()) {                
                $this->Lauth->register($this->io->post('name'),$this->io->post('email'),$this->io->post('password'),$token);   
                    redirect('/login');
                    echo 'Email Registration Success';
                }
        }
        $this->call->view('register');
	}

    public function login(){
        if ($this->form_validation->submitted()) {
            $this->form_validation
            ->name('username')
                ->required()
            ->name('email')
                ->required()
            ->name('password')
                ->required();
            if ($this->form_validation->run()) {    

                $login=$this->Lauth->login($this->io->post('email'),$this->io->post('password'));
                if ($login) {
                    $this->Lauth->set_logged_in($login);
                    if ($this->Lauth->is_logged_in()) {
                        $_SESSION['email'] = $this->io->post('email');
                        redirect('/user');
                    }
                    }
                else {
                    $data['error_message'] = 'Email is not registered/it does not exist'; 
                    $this->call->view('login',$data);
                }
            }
        }
        $this->call->view('login');
    }

    
    // public function logout() {
    //     $this->session->unset_userdata('userEmail');


            public function reserve(){
                $email =   $_SESSION['email'] ;
                if(!empty($email)){
                    $data = $this->User_model->showUser($email);
                $this->call->view('reserve', $data);
                }
            }



            public function reserveInsert(){
                $email =   $_SESSION['email'] ;
                if(!empty($email)){
                    $data = $this->User_model->showUser($email);
                    $id = substr(md5(rand()), 0, 10);
                    $username = $this->io->post('username');
                    $email = $this->io->post('email');
                    $contact = $this->io->post('contact');
                    $table = $this->io->post('table');
                    $menu = $this->io->post('menu');
                    $product = $this->io->post('product');
                    $address = $this->io->post('address');
                    $date = $this->io->post('date');
                    $noPeople = $this->io->post('people');
                    if($this->form_validation->submitted()) {
                        $this->form_validation->name('username')->required()
                        ->name('email')->required()
                        ->name('contact')->required()
                        ->name('table')->required()
                        ->name('address')->required()
                        ->name('date')->required()
                        ->name('people')->required();
                        if($this->form_validation->run()){
                        $this->User_model->insertReserve($id, $username, $email,$contact,$table,$menu,$product ,$address,$date,$noPeople);
                        redirect('/showHistory');
                        } else{
                           
                            return $this->call->view('reserve',$data);
                        }
                    }
                    else{
                        return $this->call->view('reserve',$data);
                    }
                    
                }
                
            }
}


<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Welcome extends Controller {
	public function index() {
		$this->call->view('admin');
	}

	public function getstore() {
		$this->call->view('store');
	}

	public function getorder() {
		$this->call->view('orders');
	}

	public function user() {
		$this->call->view('user');
	}
}
?>
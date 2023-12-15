<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
/**
 * ------------------------------------------------------------------
 * LavaLust - an opensource lightweight PHP MVC Framework
 * ------------------------------------------------------------------
 *
 * MIT License
 * 
 * Copyright (c) 2020 Ronald M. Marasigan
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package LavaLust
 * @author Ronald M. Marasigan <ronald.marasigan@yahoo.com>
 * @copyright Copyright 2020 (https://ronmarasigan.github.io)
 * @since Version 1
 * @link https://lavalust.pinoywap.org
 * @license https://opensource.org/licenses/MIT MIT License
 */

/*
| -------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------
| Here is where you can register web routes for your application.
|
|
*/
$router->match('/register', 'LoginController::register','GET|POST');
$router->get('/verify-email', 'LoginController::verifyEmail');

$router->match('/', 'Welcome::index','GET|POST');
$router->match('/store', 'Welcome::getstore','GET|POST');

$router->match('/all-order', 'ProductController::showOrder','GET|POST');
$router->match('/user', 'Welcome::user','GET|POST');
$router->match('/user-add-order', 'ProductController::showProduct','GET|POST');
$router->match('/login', 'LoginController::login','GET|POST');

$router->match('/products', 'Welcome::index','GET|POST');
$router->get('/ProductRecords', 'ProdController::index');

//Routes for form
$router->get('/add_prod', 'ProdController::add_prod');

//add products
$router->post('save', 'ProdController::add');
// $router->post('/add_prod', 'ProdController::add');

$router->post('ProdController/add', 'ProdController::add');
$router->get('view-products', 'ProdController::userProduct');

$router->get('user-home', 'UserController::home');



//login
$router->get('/', 'LoginController::login');
$router->match('/login', 'LoginController::login','GET|POST');
$router->match('/register', 'LoginController::register','GET|POST');
$router->post('/create', 'LoginController::create');
$router->get('/logout', 'LoginController::logout');
$router->get('/pending/(:num)', 'LoginController::pending');
$router->post('/upload', 'LoginController::uploadFile'); 
$router->get('/cart/(:any)', 'ProdController::addToCart'); 
$router->get('user-all-order', 'ProdController::allorder'); 
$router->get('/allorder', 'ProdController::adminallorder'); 
$router->get('/user-cart', 'ProdController::usercart'); 

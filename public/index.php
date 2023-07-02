<?php
session_start();
const ROOT_PATH = '/PHP2/assignment_gd2_php2_congvcph28670/assignment_2/public/';

use App\Controllers\ProductController;
use App\Controllers\CategoryController;


use App\Controllers\SiteController;
use App\Controllers\UserController;
use App\Router;

require_once __DIR__ . "/../vendor/autoload.php";

$router = new Router;

//site

Router::get('/', [SiteController::class, 'index']);
Router::get('/site', [SiteController::class, 'index']);
Router::get('/about', [SiteController::class, 'about']);
Router::get('/contact', [SiteController::class, 'contact']);
Router::post('/contact', [SiteController::class, 'contactHandle']);
Router::get('/logout', [SiteController::class, 'logout']);


Router::get('/detail', [SiteController::class, 'detail']);
Router::get('/shop', [SiteController::class, 'shop']);



//products
Router::get('/products', [ProductController::class, 'index']);

Router::get('/create-product', [ProductController::class, 'create']);
Router::post('/create-product', [ProductController::class, 'store']);

Router::get('/update-product', [ProductController::class, 'show']);
Router::post('/update-product', [ProductController::class, 'update']);

Router::get('/delete-product', [ProductController::class, 'delete']);
//categories
Router::get('/categories', [CategoryController::class, 'index']);

Router::get('/create-category', [CategoryController::class, 'create']);
Router::post('/create-category', [CategoryController::class, 'store']);

Router::get('/update-category', [CategoryController::class, 'show']);
Router::post('/update-category', [CategoryController::class, 'update']);

Router::get('/delete-category', [CategoryController::class, 'delete']);
//login
Router::post('/site', [SiteController::class, 'login']);

$router->resolve();

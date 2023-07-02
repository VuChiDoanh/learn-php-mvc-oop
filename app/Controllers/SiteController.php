<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\UserModel;

use App\Request;

class SiteController extends Controller
{

    public function index()
    {
        $products = new ProductModel();
        $product = $products->orderBy('id', 'DESC')->limit('4')->get();
        $bestseller = $products->orderBy('mua', 'DESC')->limit('4')->get();
        $this->view('home', ['products' => $product, 'title' => 'Trang Chủ', 'bestsellers' => $bestseller]);
    }
    public function detail(Request $request)
    {
        $id = $request->getBody()['id'];
        $product = ProductModel::findOne($id);
        $categories = CategoryModel::all();

        return $this->view(
            '/detail',
            [
                'product' => $product,
                'categories' => $categories,
                'title' => "$product->ten"
            ]
        );
    }
    public function shop()
    {
        $products = ProductModel::all();
        $categories = CategoryModel::all();

        return $this->view(
            '/shop',
            [
                'products' => $products,
                'categories' => $categories,
                'title' => "Shop"
            ]
        );
    }
    public function find()
    {
    }

    public function about()
    {
        $person = [
            'name' => 'Vũ Chí Công',
            'email' => 'congvcph28670@fpt.edu.vn'
        ];
        $this->view('about', ['person' => $person, 'title' => 'Giới thiệu']);
    }
    public function login(Request $request)
    {
        $data = $request->getBody();
        $u = new UserModel();
        $person = $u->where('ten', '=', "{$data['ten']}")->get();

        $error = '';
        if (!empty($person) && $person[0]->ten == $data['ten'] && $person[0]->matkhau == $data['matkhau']) {
            $_SESSION['id'] = $person[0]->id;
            if ($person[0]->role_id == 1) {
                $_SESSION['role'] = 'admin';
                header('location: /products');
            } else {
                header('location: /site');
            }
        } else {
            $error = 'Tài khoản hoặc mật khẩu sai!';
            $products = new ProductModel();
            $product = $products->orderBy('id', 'DESC')->limit('4')->get();
            $bestseller = $products->orderBy('mua', 'DESC')->limit('4')->get();
            $this->view('home', ['products' => $product, 'bestsellers' => $bestseller, 'title' => 'Trang Chủ', 'error' => $error]);
        }
    }
    public function logout()
    {
        session_destroy();
        header('location: /site');
    }
}

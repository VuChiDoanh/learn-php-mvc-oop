<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        if ($_SESSION['role'] == 'admin') {
        } else {
            header('location: /404');
        }
    }
    public function index()
    {
        $products = ProductModel::all();
        $message = '';
        if (isset($_COOKIE['message'])) {
            $message = $_COOKIE['message'];
        }

        return $this->view('admin/products/list', ['products' => $products, 'message' => $message, 'title' => 'Mặt hàng']);
    }

    public function create()
    {
        $categories = CategoryModel::all();
        return $this->view('admin/products/add', ['categories' => $categories]);
    }

    /**
     * function store: Thêm dữ liệu vào database
     * @request: nhận dữ liệu từ form
     */
    public function store(Request $request)
    {
        $p = $request->getBody();
        $image = $_FILES['anh']['name'];

        //Upload file image
        move_uploaded_file($_FILES['anh']['tmp_name'], "images/" . $image);
        //Add image vào mảng $p
        $p['anh'] = $image;

        //Insert
        $product = new ProductModel();
        $product->insert($p);
        header("location:/products");
        exit;
    }
    public function show(Request $request)
    {
        $id = $request->getBody()['id'];
        $product = ProductModel::findOne($id);
        $categories = CategoryModel::all();

        return $this->view(
            'admin/products/edit',
            [
                'product' => $product,
                'categories' => $categories,
                'title' => "Cập nhật sản phẩm"
            ]
        );
    }
    public function update(Request $request)
    {
        $data = $request->getBody();
        if ($_FILES['anh']['size'] > 0) {
            $data['anh'] = $_FILES['anh']['name'];
            move_uploaded_file($_FILES['anh']['tmp_name'], 'images/' . $data['anh']);
        }
        $p = new ProductModel();
        $p->update($data['id'], $data);
        header("location: /products");
        exit;
    }
    public function delete(Request $request)
    {
        $id = $request->getBody()['id'];
        $p = new ProductModel();
        $p->delete($id);
        setcookie('message', 'xoa du lieu thanh cong', time() + 1);
        header("location:/products");
    }
}

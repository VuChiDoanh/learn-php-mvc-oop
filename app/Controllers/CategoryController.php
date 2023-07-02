<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        if ($_SESSION['role'] == 'admin') {
        } else {
            header('location: 404');
        }
    }
    public function index()
    {
        $categories = CategoryModel::all();
        $message = '';
        if (isset($_COOKIE['message'])) {
            $message = $_COOKIE['message'];
        }

        return $this->view('admin/categories/list', ['categories' => $categories, 'message' => $message, 'title' => 'Loại hàng']);
    }

    public function create()
    {
        $categories = CategoryModel::all();
        return $this->view('admin/categories/add', ['categories' => $categories]);
    }

    /**
     * function store: Thêm dữ liệu vào database
     * @request: nhận dữ liệu từ form
     */
    public function store(Request $request)
    {
        $p = $request->getBody();
        //Insert
        $category = new CategoryModel();
        $category->insert($p);
        header("location:categories");
        exit;
    }
    public function show(Request $request)
    {
        $id = $request->getBody()['id'];
        $category = CategoryModel::findOne($id);

        return $this->view(
            'admin/categories/edit',
            [
                'category' => $category,
                'title' => "Cập nhật sản phẩm"
            ]
        );
    }
    public function update(Request $request)
    {
        $data = $request->getBody();
        $p = new CategoryModel();
        $p->update($data['id'], $data);
        header("location: categories");
        exit;
    }
    public function delete(Request $request)
    {
        $id = $request->getBody()['id'];
        $p = new CategoryModel();
        $p->delete($id);
        setcookie('message', 'xoa du lieu thanh cong', time() + 1);
        header("location:categories");
    }
}

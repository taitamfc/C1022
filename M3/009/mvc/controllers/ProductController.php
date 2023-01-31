<?php
include_once 'models/Product.php';

class ProductController extends Controller {
    // Gọi tới trang danh sách
    public function index(){
        // Gọi model
        $objProduct = new Product();
        // Model thao tác với CSDL, trả về controller
        $items = $objProduct->all();

        // Truyen xuong view
        $params = [
            'items' => $items
        ];
        $this->view('products/index.php',$params);
    }

    // Gọi tới trang thêm mới
    public function create(){
        // Gọi view ma ko truyen bien
        $this->view('products/create.php');
    }
    // Xử lý thêm mới
    public function store(){
        // echo '<pre>';
        // print_r($_REQUEST);
        // die();
        // Lấy dữ liệu từ _REQUEST gán vào mảng data
        $data = [
            'TENHANG' => $_REQUEST['TENHANG'],
            'MACONGTY' => $_REQUEST['MACONGTY'],
            'MALOAIHANG' => $_REQUEST['MALOAIHANG'],
            'GIAHANG' => $_REQUEST['GIAHANG']
        ];
        // Gọi model
        $objProduct = new Product();
        $objProduct->save($data);

        // Chuyển hướng về trang danh sách
        $this->redirect('index.php?controller=product&action=index');
    }

    // Gọi tới trang chỉnh sửa
    public function edit(){
        $id = $_REQUEST['id'];
        // Gọi model
        $objProduct = new Product();
        $item = $objProduct->find($id);
        // truyen xuong view
        $params = [
            'id' => $id,
            'item' => $item
        ];
        $this->view('products/edit.php',$params);
    }

    // Xử lý chỉnh sửa
    public function update(){
        // echo '<pre>';
        // print_r($_REQUEST);
        // die();

        $id = $_REQUEST['id'];
        // Lấy dữ liệu từ _REQUEST gán vào mảng data
        $data = [
            'TENHANG' => $_REQUEST['TENHANG'],
            'MACONGTY' => $_REQUEST['MACONGTY'],
            'MALOAIHANG' => $_REQUEST['MALOAIHANG'],
            'GIAHANG' => $_REQUEST['GIAHANG']
        ];
        // Gọi model
        $objProduct = new Product();
        $objProduct->update($id,$data);

        // Chuyển hướng về trang danh sách
        $this->redirect('index.php?controller=product&action=index');
    }

    public function destroy(){
        $id = $_REQUEST['id'];
        // Gọi model
        $objProduct = new Product();
        $objProduct->delete($id);

        // Chuyển hướng về trang danh sách
        $this->redirect('index.php?controller=product&action=index');
    }
}
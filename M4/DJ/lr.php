<?php
// La co che, su dung cac doi tuong cua mot lop ben trong 1 lop khac, ma ko can phai khoi tao doi tuong
//Giup giam thieu su phu thuoc giua cac lop voi nhau
class Request {
    public function all(){
        echo __METHOD__;
    }
}

class CustomerController {
    public function store(Request $request){
        // Su dung doi tuong cua lop Request, ben trong lop CustomerController
        $request->all();
    }
}

//index.php?controller=customers&action=store

// Container
$objRequest = new Request();
$obController = new CustomerController();
// customers/store -> post
$obController->store($objRequest);
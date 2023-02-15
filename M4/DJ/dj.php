<?php
class Request {
    public function all(){
        echo __METHOD__;
    }
}
// Muon su dung phuong thuc all, can phai khoi tao doi tuong
class CustomerController {
    public function store(){
        $request = new Request();
        $request->all();
    }
}



<?php
class SinhVien{
    // Thuoc tinh
    public $name = '';
    public $email = '';
    // phuong thuc
    public function work (){
        echo '<br>'.__METHOD__;
    }
    public function relax(){
        echo '<br>'.__METHOD__;
    } 
}
// Khoi tao doi tuong
$sinhVien1 = new SinhVien();
// Thiet lap gia tri thuoc tinh
$sinhVien1->name = "nguyen van A";
$sinhVien1->email= "nguyenvana@gmail.com";
// Goi phuong thuc
$sinhVien1->work();
$sinhVien1->relax();
// Truy xuat thuoc tinh
echo '<br>';
echo $sinhVien1->name;
echo '<br>';
echo $sinhVien1->email;


echo '<pre>';
print_r($sinhVien1);
echo '</pre>';
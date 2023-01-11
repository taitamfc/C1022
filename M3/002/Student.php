<?php
class Student{
    // thuoc tinh
    public $name = "";
    private $email = "";

    // phuong thuc
    private function work(){
       echo __METHOD__; 
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }
}

// Khoi tao doi tuong
$student = new Student();
// Thiet lap thuoc tinh name
$student->name = 'nguyen van a'; 
// Thiet lap thuoc tinh email
// $student->email = "nguyenvana@gmail.com";
$student->setEmail("nguyenvana@gmail.com");

// Truy xuat thuoc tinh name
echo $student->name ;
echo '<br>';
// Truy xuat thuoc tinh email
// echo $student->email;
echo $student-> getEmail();


// In ra doi tuong
echo '<pre>';
print_r($student);
echo '</pre>';
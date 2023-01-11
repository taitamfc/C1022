<?php
class Student{
    // thuoc tinh
    public $name = "NVA";
    private $email = "";
    public static $class = "C10";
    // phuong thuc
    private function work(){
       echo __METHOD__; 
    }
    public static function getClass(){
        // echo __METHOD__; 
        // In ra gia tri thuoc tinh cua class
        echo self::$class;
        // in ra GTTT email
        echo self::$name;
    }
}
// khoi tao doi tuong
$student = new Student();
// echo $student->class;
// Truy cap thuoc tinh class
// echo Student::$class;
echo '<br>';
// Truy cap phuong thuc getClass
Student::getClass();
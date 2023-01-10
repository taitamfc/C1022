<?php
class MyDate {
    public $day;
    public $month;
    public $year;
    //phuong thuc khoi tao dung de thiet lap cac gia tri thuoc tinh
    public function __construct ( $day,$month, $year){
      $this->day = $day;
      $this->month = $month;
      $this->year = $year;
    }
    //tra ve gia tri thuoc tinh day
    public function getDay(){
        return $this->day;
    }
    //tra ve gia tri thuoc tinh month
    public function getMonth (){
       return $this->month;
    }
    //tra ve gia tri thuoc tinh year
    public function getYear (){
        return $this->year;
    }
    // thiet lap gia tri thuoc tinh day
    public function setDay ($day){
       $this->day = $day;
    }
    // thiet lap gia tri thuoc tinh month
    public function setMonth ( $month){
        $this->month = $month;
    }
    // thiet lap gia tri thuoc tinh year
    public function setYear ($year){
        $this->year = $year;
    }
    // thiet lap gia tri thuoc tinh year,day,month
    public function setDate( $ts_day,$ts_month, $ts_year){
        $this->day = $ts_day;
        $this->month = $ts_month;
        $this->year = $ts_year;
    }
    //tra chuoi ngay thang.
    public function toString (){
       return $this->day . '/'.$this->month . '/'.$this->year ;
    }
}

// Khoi tao doi tuong
$myDate = new MyDate(20,11,2023);
// Goi phuong thuc thiet lap gia tri thuoc tinh day
$myDate-> setDay(10);
// Goi phuong thuc thiet lap gia tri thuoc tinh month
$myDate-> setMonth(1);
// Goi phuong thuc thiet lap gia tri thuoc tinh year
$myDate-> setYear(2023);

// In ra gia tri cac thuoc tinh
echo "<br>";
echo "Ngay: " . $myDate->getDay();
echo "<br>";
echo "Thang: " . $myDate->getMonth();
echo "<br>";
echo "Nam: " . $myDate->getYear();
// Goi phuong thuc thiet lap gia tri day,month,year
$myDate->setDate(20,1,2023);
// Goi phuong thuc tra ve chuoi day,month,year
echo "<br>";
echo  $myDate->toString();

echo '<pre>';
print_r($myDate);
echo '</pre>';

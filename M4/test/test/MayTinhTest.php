<?php
namespace Test;
use PHPUnit\Framework\TestCase;
use App\MayTinh;
class MayTinhTest extends TestCase {
    // public function assertEquals(){

    // }

 
    public function test_case_1(){
        $a = 7;
        $b = 3;
        $objMayTinh = new MayTinh();
        $your_ouput = $objMayTinh->sum($a,$b);
        $expect_ouput = 10;
        $this->assertEquals($your_ouput,$expect_ouput);
    }

    public function test_case_2(){
        $a = 7;
        $b = 2;
        $objMayTinh = new MayTinh();
        $your_ouput = $objMayTinh->sum($a,$b);
        $expect_ouput = 9;
        $this->assertEquals($your_ouput,$expect_ouput);
    }
}
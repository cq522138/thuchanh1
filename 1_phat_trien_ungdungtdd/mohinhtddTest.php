<?php
use PHPUnit\Framework\TestCase;
require_once 'mohinhtdd.php';
/**
 * Created by PhpStorm.
 * User: vutuanlinh
 * Date: 9/12/18
 * Time: 11:06 AM
 */

class mohinhtddTest extends mohinhtdd
{
public function testTimeNul (){
    $time = "";
    $output = "thoi gian bi trong";
    $actual = mohinhtdd::getLiveHour($time);
    $this->assertEquals($output,$actual);
}
}
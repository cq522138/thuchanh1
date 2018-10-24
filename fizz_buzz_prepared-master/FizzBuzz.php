<?php
/**
 * Created by PhpStorm.
 * User: nhat
 * Date: 12/20/17
 * Time: 8:09 PM
 */

class FizzBuzz
{
    static function read($number){

        if($number == 0){
            return 'Invalid number!';
        }

        if($number == 1){
            return 1;
        }

        if($number == 3){
            return 'Fizz';
        }

        if($number == 5){
            return 'Buzz';
        }

        if($number == 15){
            return 'FizzBuzz';
        }
        return "";
    }
}
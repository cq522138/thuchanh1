<?php
/**
 * Created by PhpStorm.
 * User: vutuanlinh
 * Date: 10/24/18
 * Time: 4:41 PM
 */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $description = $_POST["description"];
    $price = $_POST["price"];
    $discount_percent = $_POST["discount_percent"];
    $Discount_Amount = $price * $discount_percent * 0.1;
    $Discount_Price = $price - $Discount_Amount;
    echo $description."</br>";
    echo $Discount_Amount."</br>";
    echo $Discount_Price;
}
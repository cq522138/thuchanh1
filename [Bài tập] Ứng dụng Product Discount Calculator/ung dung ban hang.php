<?php
if ($_SERVER['REQUEST_METHOD'] = 'POST') {
    $description = $_POST["description"];
    $price = $_POST["price"];
    $percent = $_POST["percent"];
}
$discountAmount = $price * $percent * 0.01;
$priceAfterReduction = $price - $discountAmount;


echo $description;
echo '<br>';
echo $price;
echo '<br>';
echo $percent . "%";
echo '<br>';
echo $discountAmount;
echo '<br>';
echo $priceAfterReduction;

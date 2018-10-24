<?php
$dictionary = array(
    "hello" => "xin chào",
    "how" => "thế nào",
    "book" => "quyển vở",
    "computer" => "máy tính");

if ($_SERVER["REQUEST_METHOD"] = "POST") {
    $searchword = $_POST["search"];
    $flag = 0;
    foreach ($dictionary as $word => $description) {
        if ($searchword == $word) {
            echo "tu " . $searchword . " nghia la tu " . $description;
            $flag = 1;
        }
        if ($flag == 0){
            echo "khong thay tu can tra";
        }
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: vutuanlinh
 * Date: 9/10/18
 * Time: 11:09 AM
 */

$users = [
    [
        'name' => 'mr Dung',
        'age' => 28,
        'bank' => 200,
    ],
    [
        'name' => 'Mr Duy',
        'bank' => 250,
        'age' => 35,
    ],
    [
        'name' => 'Mr Linh',
        'bank' => 300,
        'age' => 25,
    ],
    [
        'name' => 'Mrs Trang',
        'bank' => 250,
        'age' => 25,
    ]
];
$tong = 0;
foreach ($users as $key => $values) {
    //strtolower($values['name']);
    $a = explode(" ",$values['name']);
    if (strtolower($a[0])=='mr' && $values['age'] >= 28) {
        $tong += $values['bank'];
    }

}

echo $tong;
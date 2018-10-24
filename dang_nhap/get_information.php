<?php
function get_information($username, $password){
    if($username === "admin" && $password == "admin"){
        return $username;
    }
    else {
        return null;
    }
}

//function get_information2($password){
//    if($password === "admin" ){
//        return 'chao sep';
//    }
//    else
//        return null;
//}

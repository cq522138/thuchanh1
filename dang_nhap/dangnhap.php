<?php
require 'get_information.php';
$username;

if($_SERVER['REQUEST_METHOD']=='POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $username = get_information($username, $password);


    if ($username) {
        echo "xin chao" . $username;
    } else {
        echo "erros";
    }

}


?>

<form method="post">
    <div class="login">
        <h2>Login</h2>
        <input type="text" name="username" size="30"  placeholder="username" />
        <input type="password" name="password" size="30" placeholder="password" />
        <input type="submit" value="Sign in"/>
    </div>
</form>

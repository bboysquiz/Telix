<?php

require "db.php";
$password = $_POST['password'];

$now = new DateTime();
$user = R::load('contract', $_SESSION['logged_id']);
if ($user){
    $user->pass = $password;
    R::store($user);

    return 'success'; 
}


?>
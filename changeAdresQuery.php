<?php

require "db.php";
$adres = $_POST['adres'];

$now = new DateTime();
$user = R::load('contract', $_SESSION['logged_id']);
if ($user){
    $user->mac_id = $adres;
    R::store($user);

    return 'success';
}


?>
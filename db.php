<?php

require "libs/rb.php";

R::setup( 'mysql:host=www.telixnet.ru;dbname=new_site','kirill_test', '123qweASD' );
$mysqli = new mysqli("www.telixnet.ru", "kirill_test", "123qweASD", "new_site");
if (!R::testConnection())
{
	exit ('Нет соедиенения с базой данных!!!');
}
// else {
// 	echo 'Есть соединение!!!';
// }
/*проверка соединения */
//if ($mysqli->connect_errno) {
//    printf("Соединение не удалось: %s\n", $mysqli->connect_error);
//    exit();
//}
//else {
//	echo 'Есть соединение!!! Кирилл';
//}
session_start();?>


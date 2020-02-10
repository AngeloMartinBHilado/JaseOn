<?php 
include 'config.php';
include 'class.books.php';
header('Content-Type: application/json');
$book = new Books();
$list=$book->get_Books();
echo "{\"Books\":";
echo json_encode($list);
echo "}";
?>

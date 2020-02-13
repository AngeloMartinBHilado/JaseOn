<?php 
include 'config.php';
include 'class.book.php';
header('Content-Type: application/json');
$book = new book();
$list=$book->get_book();
echo "{\"Book\":";
echo json_encode($list);
echo "}";
?>

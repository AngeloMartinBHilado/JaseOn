<?php 
include 'config.php';
include 'class.book.php';
header('Content-Type: application/json');
$book = new book();
$list=$Book->get_book();
echo "{\"book\":";
echo json_encode($list);
echo "}";
?>

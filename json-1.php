<?php 
include 'config.php';
include 'class.books.php';
header('Content-Type: application/json');
$books = new books();
$list=$books->get_books();
echo "{\"Books\":";
echo json_encode($list);
echo "}";
?>

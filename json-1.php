<?php 
include 'config.php';
include 'class.books.php';
header('Content-Type: application/json');
$book = new books();
$list=$book->get_books();
echo "{\"books\":";
echo json_encode($list);
echo "}";
?>

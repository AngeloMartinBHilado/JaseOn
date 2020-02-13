<?php
$json = file_get_contents('https://json-anj.herokuapp.com/json.php');

$data = json_decode($json,true);
$list = $data['Book'];
//$list = $data['books'][1];

?>

<h1>Books</h1>

<table border="1px">
    <tr class="head">
        <td>Title</td>
        <td>Author</td>
        <td>Genre</td>
        <td>Date Created</td>
    </tr>
<?php
foreach($list as $value){
    ?>
    <tr>
        <td><?php echo $value['title'];?></td>
        <td><?php echo $value['genre'];?></td>
        <td><?php echo $value['author'];?></td>
        <td><?php echo $value['date'];?></td>
    </tr>
<?php
}
?>
</table>

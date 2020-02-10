<?php
$json = file_get_contents('https://json-anj.herokuapp.com/json-1.php');

$data = json_decode($json,true);
$list = $data['books'];
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
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
    </tr>
<?php
}
?>
</table>

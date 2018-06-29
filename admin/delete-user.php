<?php
require "../conf.php";

$id = $_POST["id"];

$query = mysqli_query($conn,"DELETE FROM `users` WHERE id ='".$id."' ");

echo $id
?>


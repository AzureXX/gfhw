<?php
require "../conf.php";

$id = $_POST["id"];
$pass = md5(md5(md5(md5(md5($_POST["newPass"])))));

$query = mysqli_query($conn,"UPDATE `users` SET `password`='".$pass."' WHERE id ='".$id."' ");


echo $id." ".$pass
?>


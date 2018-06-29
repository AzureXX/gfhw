<?php
require "../conf.php";

$id = $_POST["id"];
$uname = $_POST["uname"];
$status = $_POST["status"];
$is_active = $_POST["isActive"];
$is_blacklisted = $_POST["isBlacklisted"];

$query = mysqli_query($conn,"UPDATE `users` SET `username`='".$uname."', `status`='".$status."', `is_active`='".$is_active."', `is_blacklisted`='".$is_blacklisted."' WHERE id ='".$id."' ");


echo $id." ".$uname." ".$status." ".$is_active." ".$is_blacklisted;
?>


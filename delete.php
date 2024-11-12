<?php

include_once 'db-connection.php';
$id=$_GET['id'];
 mysqli_query($conn , "DELETE FROM `user_practice` WHERE `user_practice`.`id` = $id");
header('location:list.php');


?>
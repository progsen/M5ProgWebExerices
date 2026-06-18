<?php 

$user = "leraar";
$id = 1;

$unsaveQuery = "Select name, from messages where username = " +$user + " and id > " + $id; 




$query  = "Select name, from messages where username = ? and id > ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("si",$user,$id);
$stmt->execute();
?>
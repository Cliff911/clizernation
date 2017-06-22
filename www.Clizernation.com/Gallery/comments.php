<?php
include "../header.php";
include "conn.php";



if (isset($_POST['commentsubmit'])){

$uid = $_POST['uid'];
$date = $_POST['date'];
$message = $_POST['message'];

$sql="insert into comments(uid, date, message) VALUES ('$uid','$date','$message')";
    $result = $conn->query($sql);



}


?>
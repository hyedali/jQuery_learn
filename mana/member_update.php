<?php

$userid = $_POST['userid'];
$name = $_POST['name'];
$email = $_POST['email1']."@".$_POST['email2'];
$number = $_POST['number1'].$_POST['number2'].$_POST['number3'];
$addr = $_POST['addr'];

$con = new mysqli('localhost', 'root', '', 'jquery');
$member_update_sql = "update user set name='$name', email='$email', number='$number', addr='$addr' where id='$userid'";
$result = $con->query($member_update_sql);

$con->close();

echo($result);

 ?>

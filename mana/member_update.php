<?php

$userid = $_POST['userid'];
$name = $_POST['name'];
$email = $_POST['email1']."@".$_POST['email2'];
$number = $_POST['number1'].$_POST['number2'].$_POST['number3'];
$addr = $_POST['addr'];

$con = mysqli_connect('localhost', 'root', '', 'jquery');

$member_update_sql = "update user set name='$name', email='$email', number='$number', addr='$addr' where id='$userid'";

$result = mysqli_query($con, $member_update_sql);

echo($result);

//업데이트함

 ?>

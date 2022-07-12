<?php

  $userid = $_POST['userid'];
  $passwd = $_POST['passwd'];
  $checkPass = $_POST['checkPass'];
  $name = $_POST['name'];
  $email = $_POST['email1']."@".$_POST['email2'];

  $con = mysqli_connect('localhost', 'root', '', 'jquery');

  $user_insert_sql = "insert into user(id, pass, name, email) ";
  $user_insert_sql .= "values('$userid','$passwd','$name','$email')";

  $result = mysqli_query($con, $user_insert_sql);

  if($result == 1){
    echo("<script>location.href='index.html';</script>");
  }

 ?>

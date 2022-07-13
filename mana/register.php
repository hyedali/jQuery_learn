<?php

  $userid = $_POST['userid'];
  $passwd = $_POST['passwd'];
  $checkPass = $_POST['checkPass'];
  $name = $_POST['name'];
  $email = $_POST['email1']."@".$_POST['email2'];
  $number = $_POST['number1'].$_POST['number2'].$_POST['number3'];
  $addr = $_POST['addr'];

  $con = mysqli_connect('localhost', 'root', '', 'jquery');

  if($number == "010"){
    $user_insert_sql = "insert into user(id, pass, name, email, addr) ";
    $user_insert_sql .= "values('$userid','$passwd','$name','$email', '$addr')";
  }else{
    $user_insert_sql = "insert into user(id, pass, name, email, number, addr) ";
    $user_insert_sql .= "values('$userid','$passwd','$name','$email', $number, '$addr')";
  }

  $result = mysqli_query($con, $user_insert_sql);

  if($result == 1){
    echo("<script>location.href='index.html';</script>");
  }else {
    echo("<script>
    alert('회원가입 실패! 다시 시도해주세요!');
    history.back();
    </script>");
  }

 ?>

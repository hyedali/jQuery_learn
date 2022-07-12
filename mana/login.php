<?php

  $uerid = $_POST['uerid'];
  $pass = $_POST['pass'];

  $con = mysqli_connect('localhost', 'root', '', 'jquery');

  $id_select_sql = "select * from user where id = '$uerid'";

  $result = mysqli_query($con, $id_select_sql);

  $result_cnt = mysqli_num_rows($result);

  $row = mysqli_fetch_array($result);

  echo($row['id'].$row['pass']);

  if($result_cnt == 1){
    if($row['pass'] != $pass){
      echo("
      <script>
        alert('비밀번호가 틀렸습니다.');
        history.back();
      </script>");
    }

    echo("게시판 들어가자!!!");
  }else{
    echo("<script>history.back();</script>");
  }

 ?>

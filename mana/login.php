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
    if($row['level'] == 1){
      echo("<script>location.href='member.html';</script>");
    }

    echo("<script>location.href='board.html';</script>");
  }else{
    echo("<script>history.back();</script>");
  }
  //카운트 값을 원함
 ?>

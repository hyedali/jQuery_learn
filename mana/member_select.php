<?php
  $arrayList = array();

  $con = mysqli_connect('localhost', 'root', '', 'jquery');

  $member_select_sql = "select * from user";

  $result = mysqli_query($con, $member_select_sql);

  $result_cnt = mysqli_num_rows($result);

  for($i=0; $i<$result_cnt; $i++){
    mysqli_data_seek($result, $i);
    $row = mysqli_fetch_array($result);

    $id = $row['id'];
    $pass = $row['pass'];
    $name = $row['name'];
    $email = $row['email'];
    $level = $row['level'];
    $number = $row['number'];
    $addr = $row['addr'];

    array_push($arrayList,
    array('id'=>$row['id'], 'pass'=>$row['pass'], 'name'=>$row['name'], 'email'=>$row['email'], 'level'=>$row['level'], 'number'=>$row['number'], 'addr'=>$row['addr']));

  }
  echo(json_encode($arrayList,JSON_UNESCAPED_UNICODE));

  //모든 속성의 결과를 받아옴
 ?>

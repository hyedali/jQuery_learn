<?php
  $arrayList = array();

  $con = mysqli_connect('localhost', 'root', '', 'jquery');

  $board_select_sql = "select * from board";

  $result = mysqli_query($con, $board_select_sql);
  $result_cnt = mysqli_num_rows($result);

  for($i=0; $i<$result_cnt; $i++){
    mysqli_data_seek($result, $i);
    $row = mysqli_fetch_array($result);
/*
    $title = $row['title'];
    $writer = $row['writer'];
    $regdate = $row['regdate'];
    $cnt = $row['cnt'];
*/
    array_push($arrayList, array('title'=>$row['title'], 'writer'=>$row['writer'], 'regdate'=>$row['regdate'], 'cnt'=>$row['cnt'], 'seq'=>$row['seq']));
    //echo($title.$writer.$regdate."/".$cnt.'<br>');
  }

  echo(json_encode($arrayList,JSON_UNESCAPED_UNICODE));

  mysqli_close($con);
 //모든 쿼리를 가져옴
 ?>

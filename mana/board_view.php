<?php

  $arrayList = array();
  $num = $_GET['num'];
  //$num = 1;

  $con = mysqli_connect('localhost', 'root', '', 'jquery');

  $board_view_select_sql = "select * from board where seq = $num";

  $result = mysqli_query($con, $board_view_select_sql);
  $row = mysqli_fetch_array($result);

  $cnt = $row['cnt']+1;

  array_push($arrayList, array('content'=>$row['content'], 'cnt'=>$cnt));

  $board_view_cnt_sql = "update board set cnt = $cnt where seq=$num";
  mysqli_query($con, $board_view_cnt_sql);

  echo(json_encode($arrayList,JSON_UNESCAPED_UNICODE));

  mysqli_close($con);

  //seq값을 이용해서 모든 쿼리를 불러옴.(=>내용과 조회수만 사용)

 ?>

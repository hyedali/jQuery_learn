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

/*
  $('#boardContent').append('<table></table>');
  $('#boardContent table').attr('id', 'boardView');

  for(i=0; i<5; i++){
    $('#boardView').append(trEle);
    for(j=0; j<2; j++){
      $('#boardView tr:eq('+i+')').append(tdEle);
    }
  }

  $('#boardView tr:first-child td:first-child').text("제목");
  $('#boardView tr:nth-child(2) td:first-child').text("작성자");
  $('#boardView tr:nth-child(3) td:first-child').text("내용");
  $('#boardView tr:nth-child(4) td:first-child').text("작성일");
  $('#boardView tr:last-child td:first-child').text("조회수");
*/

 ?>

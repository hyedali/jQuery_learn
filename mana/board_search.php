<?php

  include 'object.php';

  $obj4 = new Crud();
  $searchArray = array();

  //$keyword = $_POST['key'];
  $keyword = "이";

  $sql = "select * from board where title LIKE '%$keyword%'";

  $result = $obj4->execute_query($sql);
  $result_cnt = $obj4->execute_query_cnt($sql);

  for($i=0; $i<$result_cnt; $i++){
    mysqli_data_seek($result, $i);
    $row = mysqli_fetch_array($result);

    //echo($row['title'].$row['writer'].$row['regdate'].$row['cnt']);
    array_push($searchArray, array('title'=>$row['title'], 'writer'=>$row['writer'], 'regdate'=>$row['regdate'], 'cnt'=>$row['cnt']));

  }
  echo(json_encode($searchArray,JSON_UNESCAPED_UNICODE));

 ?>

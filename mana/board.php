<?php
  include 'object.php';

  $obj = new Crud();
  $arrayList = array();

  $sql = "select * from board";
  $result = $obj->execute_query($sql);

  $result_cnt = mysqli_num_rows($result);

  for($i=0; $i<$result_cnt; $i++){
    mysqli_data_seek($result, $i);
    $row = mysqli_fetch_array($result);

    // $title = $row['title'];
    // $writer = $row['writer'];
    // $regdate = $row['regdate'];
    // $cnt = $row['cnt'];

    array_push($arrayList, array('title'=>$row['title'], 'writer'=>$row['writer'], 'regdate'=>$row['regdate'], 'cnt'=>$row['cnt'], 'seq'=>$row['seq']));

    //echo($title.$writer.$regdate."/".$cnt.'<br>');
  }
  echo(json_encode($arrayList,JSON_UNESCAPED_UNICODE));

 ?>

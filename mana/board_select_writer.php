<?php

  include 'object.php';

  $obj2 = new Crud();
  $boardArray = array();

  //$name = '피카츄';
  $name = $_POST['name'];

  $sql = "select * from board where writer='$name'";

  $result = $obj2->execute_query($sql);
  $result_cnt = $obj2->execute_query_cnt($sql);

  for($i=0; $i<$result_cnt; $i++){
    mysqli_data_seek($result, $i);
    $row = mysqli_fetch_array($result);

    array_push($boardArray, array('seq'=>$row['seq'],'title'=>$row['title'], 'cnt'=>$row['cnt']));
  }

  echo(json_encode($boardArray,JSON_UNESCAPED_UNICODE));

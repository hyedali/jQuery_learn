<?php
  include 'DB.php';

  $arrayList = array();
  $name = $_POST['name'];
  //$name = '피카츄';

  $name_select_sql = "select * from user where name = '?'";

  $row = SELECT_('jquery', $name_select_sql, $name);

  array_push($arrayList, array('id'=>$row['id'], 'pass'=>$row['pass'], 'name'=>$row['name']
  , 'email'=>$row['email'], 'number'=>$row['number'], 'addr'=>$row['addr']));

  echo(json_encode($arrayList,JSON_UNESCAPED_UNICODE));


 ?>

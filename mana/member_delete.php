<?php
  include 'DB.php';

  $userid = $_GET['userid'];
  //$userid = 'test3';

  $user_delete_sql = "delete from user where id='?'";

  $result = DELETE_('jquery', $user_delete_sql, $userid);

  echo($result);

  //$con = mysqli_connect('localhost', 'root', '', 'jquery');
  //$result = mysqli_query($con, $user_delete_sql);

 ?>

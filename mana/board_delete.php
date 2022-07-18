<?php

  include 'object.php';

  $obj3 = new Crud();

  $length = count($_POST['CL']);
  $str = $_POST['CL'][0];

  for($i=1; $i<$length; $i++){
    $str .= ",".$_POST['CL'][$i];
  }

  $sql = "delete from board where seq IN ($str);";

  $result = $obj3->execute_query($sql);

  echo("<script>location.href='member.html';</script>");

 ?>

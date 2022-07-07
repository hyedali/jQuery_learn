<?php
  $index = $_GET['index'];
  //$index = 1;

  $img = ['img.jpeg', 'img1.jpeg', 'img2.jpg', 'img3.jpeg', 'img4.jpeg'];
  $name = ['짱구', '철수', '유리', "맹구", "훈이"];

  $json = json_encode(array('img'=>$img[$index], 'name'=>$name[$index]));

  echo($json);
?>

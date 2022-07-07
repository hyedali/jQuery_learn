<?php
  include_once 'simple_html_dom.php';
  $cnt = 0;

  $index = $_GET['index'];

  $url = 'https://blog.naver.com/PostView.naver?blogId=zjvl851&logNo=222394550359&redirect=Dlog&widgetTypeCall=true&directAccess=false';
  $html = file_get_contents($url);
  if($html !== false){
    $html = str_get_html($html);
  }

  // foreach($html->find('div[class=se-component se-material se-l-default]') as $element){
  //   $cnt++;
  // }
  // for($i=0; $i<$cnt; $i++){
  //   $image = $html->find('img[class=se-material-thumbnail-resource]', $i);
  //   echo $image.'<br>';
  //   $title = $html->find('strong[class=se-material-title]', $i);
  //   echo $title."<br>";
  //   }

  $image = $html->find('img[class=se-material-thumbnail-resource]', $index)->src;
  $title = $html->find('strong[class=se-material-title]', $index);
  $title = htmlspecialchars($title);

  //echo(htmlspecialchars_decode($title));

  //echo($image."<br>".$title);

  $json = json_encode(array('img'=>$image, 'name'=>$title));

  echo($json);

 ?>

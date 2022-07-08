<?php
      $data=array();

      $con = mysqli_connect("localhost","root", "", "crayon");

    //  if(isset($_POST["action"])){
        $sql = "select * from episode";

        $result = mysqli_query($con, $sql);

        $total_recode = mysqli_num_rows($result); //전체수

        for($i=0; $i<$total_recode; $i++){
          mysqli_data_seek($result, $i);
          $row = mysqli_fetch_array($result);

          $num = $row["num"];
          $title = $row["title"];
          $content = $row["content"];

          $temp = array($num, $title, $content);
          array_push($data, $temp);
      }
        $json = json_encode($data);
        echo($json);
 //} ?>

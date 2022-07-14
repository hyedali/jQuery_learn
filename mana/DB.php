<?php

  // class test_ {
  //   //select문 (infoSelect)
  //   function SELECT_($DB_NAME, $SQL, $VALUE){
  //       $CON = mysqli_connect('localhost', 'root', '', $DB_NAME);
  //
  //       $SQL = str_replace('?', $VALUE, $SQL);
  //
  //       $RESULT = mysqli_query($CON, $SQL);
  //
  //       $ROW = mysqli_fetch_array($RESULT);
  //
  //       mysqli_close($CON);
  //
  //       return $ROW;
  //   }
  //
  //   //delete문 (member_delete)
  //   function DELETE_($DB_NAME, $SQL, $VALUE){
  //     $CON = mysqli_connect('localhost', 'root', '', $DB_NAME);
  //
  //     $SQL = str_replace('?', $VALUE, $SQL);
  //
  //     $RESULT = mysqli_query($CON, $SQL);
  //
  //     mysqli_close($CON);
  //
  //     return $RESULT;
  //   }
  //
  // }

  //select문 (infoSelect)
  function SELECT_($DB_NAME, $SQL, $VALUE){
      $CON = mysqli_connect('localhost', 'root', '', $DB_NAME);

      $SQL = str_replace('?', $VALUE, $SQL);

      $RESULT = mysqli_query($CON, $SQL);

      $ROW = mysqli_fetch_array($RESULT);

      mysqli_close($CON);

      return $ROW;
  }

  //delete문 (member_delete)
  function DELETE_($DB_NAME, $SQL, $VALUE){
    $CON = mysqli_connect('localhost', 'root', '', $DB_NAME);

    $SQL = str_replace('?', $VALUE, $SQL);

    $RESULT = mysqli_query($CON, $SQL);

    mysqli_close($CON);

    return $RESULT;
  }



 ?>

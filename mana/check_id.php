<?php
$userid = $_POST['userid'];
//$userid = 'user';

include 'object.php';

$obj1 = new Crud();
$arrayList = array();

$sql = "select * from user where id='$userid'";
$result = $obj1->execute_query_cnt($sql);

$result_array = array('cnt'=>$result);

echo(json_encode($result_array,JSON_UNESCAPED_UNICODE));

 ?>

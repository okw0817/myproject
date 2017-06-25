<?php
include ("config.php");

$myusername='okw0817';
$mypassword='123456';
$sql = "SELECT * FROM memberinfor2 WHERE id = '".$myusername."' AND pwd = '".$mypassword."'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);

echo $result;
?>
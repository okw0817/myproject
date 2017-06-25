<?php
 $host = 'localhost';
 $user = 'root';
 $pw = '123456';
 $dbName = 'member';
 $mysqli = new mysqli($host, $user, $pw, $dbName);
 
 $id=$_POST['id'];
 $password=($_POST['pwd']);
 $name=$_POST['name'];
 $nickname=$_POST['nickname'];

 $sql = "insert into memberinfo3 (id, pwd, name, nickname)";
 $sql = $sql. "values('$id','$password','$name', '$nickname')";
 if($mysqli->query($sql)){
  echo '회원 가입이 성공하였습니다.';
 }else{
  echo 'fail to insert sql';
 }
 mysqli_close($mysqli);
?>
<input type="button" value="로그인하러가기" onclick="location='index.html'">
</html>

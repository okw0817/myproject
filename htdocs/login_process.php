<?php

session_start();

$mysql_hostname = "localhost";

$mysql_user = "root";

$mysql_password = "123456";

$mysql_database = "member";

$mysqli = new mysqli($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);

$myusername=$_POST["id"]; 
$mypassword=$_POST["pwd"]


$sql = "SELECT * FROM memberinfor3 WHERE id = '$myusername' AND pwd = '$mypassword'";
$result = $mysqli->query($sql); 
$low = $result->fetch_array(MYSQLI_ASSOC);
//$count=mysql_num_rows($result);
 
        if (low != null) {                                               
            $_SESSION['ses_username'] = $low['name'];                          
            echo $_SESSION['ses_username'].'님 안녕하세요<p/>';          
            echo '<a href="./index.php">로그아웃 하기</a>';           
        }
 
        if($low == null){                                                    
            
         echo("<script>location.href='RSDB_starterror.php';</script>");         
 
 
            
        }
}
?>
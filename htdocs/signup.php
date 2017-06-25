<doctype html>
<html>
<head>
<title>sign up page</title>
</head>
<body>
<form name="join" method="post" action="memberSave.php">
 <h1>회원가입</h1>
 <table border="1">
  <tr>
   <td>ID</td>
   <td><input type="text" size="30" name="id"></td>
  </tr>
  <tr>
   <td>Password</td>
   <td><input type="password" size="30" name="pwd"></td>
  </tr>
  <tr>
   <td>name</td>
   <td><input type="text" size="12" maxlength="10" name="name"></td>
  </tr>
    <tr>
   <td>nickname</td>
   <td><input type="text" size="12" maxlength="10" name="nickname"></td>
  </tr>
 </table>
 <input type=submit value="확인"><input type=reset value="다시쓰기">
</form>

</body>
</html>
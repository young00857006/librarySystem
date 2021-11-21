<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;  //記得要跳出來，不然會重複轉址過多次
}
?>
<html xmlns=”http://www.w3.org/1999/xhtml”>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
  <style>
    body{
      
      text-align:center;
    }
    button{
      width:400px;
      height:300px;
      font-size:50px;
      box-sizing:border-box;
      margin-top:10%;
    }
    </style>
<body>

<form method="POST" action="login.php">
帳號：
<input type="text" name="username"><br/><br/>
密碼：
<input type="password" name="password"><br><br>
<input type="submit" value="登入" name="submit"><br><br>
<a href="register.php">還沒有帳號？現在就註冊！</a>
</form>
<table>
  <tr>
 <a href="select.php"><button>查詢</button></a> 
 <?php
 if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        
 echo '<a href="insert.php"><button>新增書籍</button></a>';
 }?>

  </tr>
 <!-- <li><a href="update.php">UPDATE，更新資料表中的資料</a></li>
 <li><a href="delete.php">DELETE，刪除資料表中的資料</a></li> -->
</table>


</body>

</html>
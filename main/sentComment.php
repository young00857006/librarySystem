<?php
require_once("config.php");
$username=$_POST['username'];
$ISBN=$_POST['ISBN'];
$context=$_POST['context'];
$sql="INSERT INTO comment (username,ISBN, context)
VALUES('".$username."','".$ISBN."','".$context."')";

if(mysqli_query($link, $sql)){
echo "回應成功<br>";
header("location:book.php?search=".$ISBN);
}else{
echo "Error creating table: " . mysqli_error($link);
}
?>
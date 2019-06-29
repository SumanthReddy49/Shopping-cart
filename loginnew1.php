<?php
session_start();
$username = $_POST['uname'];
$password = $_POST['pwd'];
$username = stripcslashes($username);
$password = stripcslashes($password);
$_SESSION["name"] = $username;
if (!empty($_POST['uname'])){
    
mysql_connect("localhost","demo1","P@ssw0rd");
mysql_select_db("cart");
$result = mysql_query("select * from information where username='$username' and password='$password' ") or die("failed to query database".mysql_error());
$row = mysql_fetch_array($result);
if ($row['username'] == $username && $row['password'] == $password){
   header("Location: http:shoppingcart.php");
}
else {
    echo ( "<font color = 'black'>Failed try!!!</font><br><br>");
 
     echo ( "<font color = 'black'>Seems like your account details do not match!!<br>Retry or click the link below to register with a new account</font><br>");
    echo "<a href=registration.html><button type = button>click</button></a>";
    }
}
else {
echo "<font color = 'white'>input something folk!Dont act smart ah!!</font>";
}
?>
<html>
<head>
<style type ="text/css">
body {
   background-size : cover;
   background repeat : no repeat;
}

</style>
</head>
<body background = "imageforwebpage.jpg">
</body>
</html>


  


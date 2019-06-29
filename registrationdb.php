<html>
<body>
<?php
ini_set('display_errors', 1);
session_start();
$username = $_POST['username'];
$password = $_POST['pwd'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$add = $_POST['add'];
$_SESSION["name"] = $username; 
$con=mysql_connect('localhost','demo1','P@ssw0rd') or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db($con,'cart') or die("Failed to connect to MySQL: " . mysql_error());
$user_check_query="SELECT username,email FROM information WHERE username='$username' OR email='$email' LIMIT 1"; 
$result=mysql_query($db,$user_check_query);
$user=mysql_fetch_assoc($result);
if($user){
    if($user['username']==$username){
        die('username already exists'.mysql_error());
    }
    if($user['e_mail']==$email){
        die('Email already exists'.mysql_error());
    }
}
$query = mysql_query($con,"INSERT INTO information (username,password,email,telephone) VALUES ('$username','$password','$email','$tel')");
$row=mysql_fetch_array($query);
$_SESSION['username'] = $username;
$_SESSION['success'] = "You are now logged in";
header("location: http:shoppingcart1.html");
?>
</body>
</html>


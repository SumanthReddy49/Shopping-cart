<html>
<head>

<style>
tr{
   border:1px solid black;
   background-color:#FFFFFF;

}
td{
  width:33.33%;
}
body {
    background-repeat:no repeat;
   background-size:cover;
}
</style> 
</head>


<body background = "index.jpeg">
<h1 align="center">WELCOME TO SHOPPING SPOT!!</h1>
<table width = "100%" border = "0">
<tr>
<td align = "center" ><img src ="http://localhost/SHOPPING CART/hoodie.jpeg" ></td>

<td align = "center"><img src = "http://localhost/SHOPPING CART/perfume.jpeg" ></td>
<td align = "center"><img src ="http://localhost/SHOPPING CART/T.jpg" ></td>
</tr>
<tr><td>HOODIE</td><td>PERFUME</td><td>MARVEL-T</td></tr>
<tr><td>PRICE : 4000</td><td>PRICE : 5000</td><td>PRICE : 2500</td></tr>
<tr>
<td align = "center"><form action ="shoppingcart.php" method = "POST"><input type = "hidden" name = "hoodie"><input type = "submit" name ="ADD TO CART" value = "ADD TO CART"></form></td>
<td align = "center"><form action ="shoppingcart.php" method = "POST"><input type = "hidden" name = "perfume"><input type = "submit" name ="ADD TO CART" value = "ADD TO CART"></form></td>
<td align = "center"><form action ="shoppingcart.php" method = "POST"><input type = "hidden" name = "T"><input type = "submit" name ="ADD TO CART" value = "ADD TO CART"></form></td>
</tr>
<tr>
<td align = "center"><form action ="shoppingcart.php" method = "POST"><input type = "hidden" name = "hoodier"><input type = "submit" name ="REMOVE FROM CART" value = "REMOVE FROM CART"></form></td>
<td align = "center"><form action ="shoppingcart.php" method = "POST"><input type = "hidden" name = "perfumer"><input type = "submit" name ="REMOVE FROM CART" value = "REMOVE FROM CART"></form></td>
<td align = "center"><form action ="shoppingcart.php" method = "POST"><input type = "hidden" name = "Tr"><input type = "submit" name ="REMOVE FROM CART" value = "REMOVE FROM CART"></form></td>
</tr>
</table>
<br>
<?php
session_start();
echo "<font color='red'>Nice to see u here </font>".$_SESSION["name"]."<br>";
$name = $_SESSION["name"];
mysql_connect("localhost","demo1","P@ssw0rd");
mysql_select_db("cart");
$result = mysql_query("select HOODIE,PERFUME,MARVELT FROM information where username = '$name'" );
$row = mysql_fetch_array($result);
if($row) {
       if(isset($_POST["hoodie"])) {   
            mysql_query("update information set HOODIE = ($row[0]+1) where username = '$name'");
}
       if(isset($_POST["perfume"])) {   
           mysql_query("update information set PERFUME = ($row[1]+1) where username = '$name'");
}
       if(isset($_POST["T"])) {   
            mysql_query("update information set MARVELT = ($row[2]+1) where username = '$name'");
} 
if(isset($_POST["hoodier"])) { if($row[0]>0){   
   mysql_query("update information set HOODIE = ($row[0]-1) where username = '$name'");
}
}
       if(isset($_POST["perfumer"])) { if($row[1]>0){   
           mysql_query("update information set PERFUME = ($row[1]-1) where username = '$name'");
}
}
       if(isset($_POST["Tr"])) { if($row[2]>0) {   
            mysql_query("update information set MARVELT = ($row[2]-1) where username = '$name'");
} 
}
}
$hoodie = mysql_fetch_array(mysql_query("select HOODIE from information where username = '$name'"));
$perfume = mysql_fetch_array(mysql_query("select PERFUME from information where username = '$name'"));
$T = mysql_fetch_array(mysql_query("select MARVELT from information where username = '$name'"));
echo "This is your cart<br>";
echo "No of hoodies:".$hoodie[0]; 
echo "<br>No of perfumes:".$perfume[0];
echo "<br>No of T's:".$T[0];
echo "<br>Total shopping price:".($hoodie[0]*4000+$perfume[0]*5000+$T[0]*2500)."Rs";     
?>
</body>
</html>




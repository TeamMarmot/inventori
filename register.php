<?php

$host="marmot.database.windows.net"; // Host name 
$username="marmot"; // Mysql username 
$password="Cantsee123"; // Mysql password 
$db_name="marmot"; // Database name 
$tbl_name="UserAccount"; // Table name 

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$myusername=$_POST['myusername']; 
$myfirstname=$_POST['myfirstname']; 
$mylastname=$_POST['mylastname']; 
$mytwitch=$_POST['mytwitch']; 
$mylinkedin=$_POST['mylinkedin']; 
$mytwitter=$_POST['mytwitter']; 

$myusername = stripslashes($myusername);
$myfirstname=$stripslashes($myfirstname);
$mylastname=$stripslashes($mylastname); 
$mytwitch=$stripslashes($mytwitch); 
$mylinkedin=$stripslashes($mylinkedin); 
$mytwitter=$stripslashes($mytwitter); 
$myusername = mysql_real_escape_string($myusername);
$mylastname=$mysql_real_escape_string['mylastname']; 
$mytwitch=$mysql_real_escape_string['mytwitch']; 
$mylinkedin=$mysql_real_escape_string['mylinkedin']; 
$mytwitter=$mysql_real_escape_string['mytwitter']; 
$sql="INSERT INTO [dbo].[UserAccount] VALUES ($mytwitter,$mylinkedin,null,$mytwitch,$myfirstname,$mylastname";
$result=mysql_query($sql);

/*
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("myusername");
session_register("mypassword"); 
header("location:login_success.php");
}
else {
echo "Wrong Username or Password";
}
*/
?>
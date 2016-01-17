<?php

$host="marmot.database.windows.net,1433"; // Host name 
$username="marmot@marmot"; // Mysql username 
$password="Cantsee123"; // Mysql password 
$db_name="marmot"; // Database name 
$tbl_name="[dbo].[UserAccount]"; // Table name 
$connectionOptions = array("Database"=>$db_name, "Uid"=>$username, "PWD"=>$password)
sqlsrv_connect("$host", conectionOptions)or die("ca

$myusername=$_POST['UserName']; 


$UserName = stripslashes($myusername);
 
$sql=SELECT *
	FROM [dbo].[UserAccount]
	WHERE myusername = UserName
	;

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
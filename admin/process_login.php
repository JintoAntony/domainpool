<?php

session_start();

//Post array is empty or not
if(empty($_POST))
{
exit;
}	

$username=$_POST['username'];

$password=$_POST['password'];

$conn=mysql_connect("localhost","root","root")or die("can not connect");
mysql_select_db("domainpool",$conn) or die("can not select database");

$query= "select username,password from admin where username='$username'";

$result= mysql_query($query,$conn) or die("wrong query");

$row = mysql_fetch_assoc($result);

if($row['username']==$username && $row['password']==$password)
		  {
		  
		    $_SESSION['user']=$row['username'];
			header("location:admin_home.php"); 
		  
		  }
else
       {

            echo "Invalid username and password";
	 
       }  	   


?>
<?php

$email=$_GET['email'];


$conn=mysql_connect("localhost","root","root")or die("can not connect");
mysql_select_db("domainpool",$conn) or die("can not select database");

if(isset($email))
	{

    
	$query2 = "DELETE FROM user WHERE user_email='$email'";
    $result2 = mysql_query($query2,$conn)or die("wrong query");

   if($result2)
     { header("location:buyer_management.php"); 
	 echo "Removed Successfully";
	 
	 }

   else
    { echo "Cannot delete this User"; }
	
	}
	
	?>
<?php
$connection = mysql_connect("localhost", "intenoxj_admin", "KN9yPkfskGjEN"); // Establishing Connection with Server..
$db = mysql_select_db("intenoxj_registration", $connection); // Selecting Database
//Fetching Values from URL
$name2=$_POST['name1'];
$email2=$_POST['email1'];
$phone2=$_POST['phone1'];
$college2=$_POST['college1'];
$message2=$_POST['message1'];
$year2=$_POST['year1'];
//Insert query
$query = mysql_query("insert into funk(name, email, phone,year, college, message) values ('$name2', '$email2', '$phone2','$year2','$college2','$message2')");
echo "Form Submitted Succesfully";
mysql_close($connection); // Connection Closed
?>

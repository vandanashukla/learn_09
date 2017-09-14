<?php
session_start();

?>

<?php

require 'dbinfo.php';
require 'register.html';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $dob=$_POST["dob"];
    $email = $_POST["email"];
    $type = $_POST["type"];
    $pass = $_POST["pass"];
	$r_pass= $_POST["r_pass"];
	
	if($pass == $r_pass)
	{
	
	$sql = "INSERT INTO Register(name,dob,type,email,pass) VALUES ('$name','$dob','$type','$email','$pass')";
    if ($conn->query($sql) === TRUE) {
            //$table = ($type == "user")?"student":"admin";
            //$query="select id,email from Register ";
           
            //$result=$conn->query($query);
            //$check=$result->fetch_assoc
		echo "<script>alert('You have been Registered Successfully. Please login to continue.')</script>";
               //header("Location:http://localhost/learn cpp/login.html");
		session_destroy();	  
    }
	}
	else{
		echo "<script>alert('your passwords do not match.')</script>";
	}

}
?>

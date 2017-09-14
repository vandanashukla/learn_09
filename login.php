<?php
session_start();
if($_POST)
{
	require "dbinfo.php";
	$username=$_POST['email'];
        
    $password=$_POST['pass'];
    
	$sql="select * from Register where email='$username' and pass='$password'";
            //$query="select * from Register";
            
    $result= mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			//$active = $row['active'];
            //$check=$result->fetch_assoc();
    if (count($row)>0) 
            {
                //$_SESSION["username"] = $check["id"];
                //$_SESSION["username"] = $check["name"];
                //$_SESSION["email"] = $check["email"];
                //$_SESSION["type"] = $type;
				//session_register("username");
				$_SESSION['login_user'] = $username;
				$_SESSION['passw']=$password;
				header("Location:http://localhost/learn cpp/t1.html");
            }
            else {
			echo "<script>alert('your email or password is invalid.')</script>";
			//echo " Given email or password is invalid.!";
			//header("Location:http://localhost/learn cpp/login.html");
			}	
}
				//header("Location:http://localhost/learn cpp/login.html");
            
        

?>
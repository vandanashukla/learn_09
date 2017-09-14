<?php
require 'dbinfo.php';
$LINK_SERVER=@mysqli_connect($server,$user,$pass)or die(errorReport(mysql_error()));
mysqli_query($LINK_SERVER,"create database hello");
mysqli_query($LINK_SERVER,"use hello");
mysqli_select_db($LINK_SERVER,"hello")or die(errorReport(mysql_error()));
$sql="CREATE TABLE Register(id int,
 name varchar(20) NOT NULL,
 dob date,  
 type varchar(10) NOT NULL,
 email varchar(25) ,
pass varchar(20),
 PRIMARY KEY(id,email));";
$sql1="CREATE TABLE Passwords(username varchar(25),
 password varchar(25) NOT NULL, FOREIGN KEY (username) REFERENCES Register(email) )";
$sql2="CREATE TABLE Session(username varchar(255) NOT NULL, sid varchar(255) PRIMARY KEY) ";
$sql3="INSERT INTO Passwords(username,password) VALUES ('admin','admin');";

if (mysqli_query($LINK_SERVER, $sql2) ) {
    echo "Tables created successfully";
} else {
    echo "Error creating table. " . mysqli_error($conn);
}
?>
<!--CREATE TABLE dummy ( id INT(5) UNSIGNED NOT NULL AUTO_INCREMENT , name VARCHAR(20) NOT NULL , PRIMARY KEY (id(4))) ENGINE = InnoDB; -->

<!--CREATE TABLE Register(id int(5) (AUTO INCREMENT) PRIMARY KEY,
 name varchar(20) NOT NULL,
 dob date,  
 type varchar(10) NOT NULL,
 email varchar(25),
 pass varchar(20)); -->
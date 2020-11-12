<?php

$mysql_host='localhost';
$mysql_username='root';
$mysql_pwd='';
$mysql_db='University';
$sql1='CREATE DATABASE test_db';


//connect to the database
$connectlink=@mysqli_connect($mysql_host,$mysql_username,$mysql_pwd,$mysql_db);

if(!$connectlink){
die('not connected to mysql database');
}

$result1=mysqli_query($connectlink,$sql1);
if(!$result1){
die("not created table in database");
}

$sql2="CREATE TABLE Employeess(eno VARCHAR(3) PRIMARY KEY,ename VARCHAR(10))";
$result2=mysqli_query($connectlink,$sql2)

?>
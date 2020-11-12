<?php

$mysql_host='localhost';
$mysql_username='root';$mysql_pwd='';

//CONNECt to the mysql database
$connectlink=mysqli_connect($mysql_host,$mysql_username,$mysql_pwd,'University');


//connect to a database
//$db=mysqli_select_db($connectlink,'University') or die('cannot connect to db');

//if(!$db)
//die('not connected');

//CREATe a new database
$query1="CREATE DATABASE testdb";

$query2="CREATE TABLE Employeess(eno VARCHAR(3) PRIMARY KEY,ename VARCHAR(10))";


//$result2=@mysqli_query($connectlink,$query2);


//$result1=@mysqli_query($connectlink,$query1);

/*if(!$result2){
die("not created table in database");
}*/
$e1='102';
$e2='abc';

//$query3="INSERT INTO Employees (eno,ename) VALUES('102', 'jin')";

//$sql = "INSERT INTO Employees (eno, ename) VALUES ('101', 'Doe')";
//$result3=@mysqli_query($connectlink,$query3);

$query='Select * from Student';
$result=mysqli_query($connectlink,$query);

while($d=mysqli_fetch_assoc($result))
{
echo "<table border=2>"."<tr>"."<td>".$d['name']."</td>"."</tr>"."<table>";

}

//Delete record form table

$query4="DELETE FROM Employees where eno=101";


$result4=@mysqli_query($connectlink,$query4);

//update record
$query5="UPDATE Employees set eno=101 where eno=102";

$result5=@mysqli_query($connectlink,$query5);


?>
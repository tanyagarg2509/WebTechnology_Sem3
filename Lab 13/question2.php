<?php
//Create connection

/*$conn=new PDO("mysql:host=localhost;dbname=university;","root","");*/

$dsn="mysql:host=localhost;dbname=university;";
$db_user="root";
$db_pass="";
try{

$conn=new PDO($dsn,$db_user,$db_pass);

//sql to create table
$sql1 = "CREATE TABLE student (
id INT(6),
firstname VARCHAR(30),
lastname VARCHAR(30),
email VARCHAR(50))";

$conn->exec($sql1);
echo "Table student created successfully";

//sql to insert record
$sql2 = "INSERT INTO student VALUES (111,'J3', 'D3d', 'abc@example.com')";

if ($conn->query($sql2) === TRUE) {
echo "New record created successfully";
}

//Prepare statment

$stmt = $conn->prepare("INSERT INTO student (id,firstname, lastname, email)
VALUES (?,?,?, ?)");
$stmt->bindParam(1, $id);
$stmt->bindParam(2, $firstname);
$stmt->bindParam(3, $lastname);
$stmt->bindParam(4, $email);

// insert a row
$id=115;
$firstname = "Rahul";
$lastname = "mn";
$email = "rm@gmail.com";
$stmt->execute();

// insert another row
$id=116;
$firstname = "Shivnai";
$lastname = "Ra";
$email = "sr@yahoo.com";
$stmt->execute();

// insert another row
$id=117;
$firstname = "soor";
$lastname = "Kapoor";
$email = "sk@gmail.com";
$stmt->execute();

echo "New records created successfully";
// sql to delete a record
$sql = "DELETE FROM student WHERE id=111";
// use exec() because no results are returned
$conn->exec($sql);
}
catch(PDOException $e){
echo "connection failed".$e->getMessage();
}
if($conn)
{
echo "connected";
}
?>
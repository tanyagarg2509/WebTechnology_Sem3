<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "University";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO Employees (eno,ename) VALUES (101, 'Doe');";
$sql .= "INSERT INTO Employees (eno,ename) VALUES (102, 'Meher');";
$sql .= "INSERT INTO Employees (eno,ename) VALUES (103, 'Dabas')";

if (mysqli_multi_query($conn, $sql)) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
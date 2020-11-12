<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "University";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE UUsers (
id INT(6),
firstname VARCHAR(30),
lastname VARCHAR(30),
email VARCHAR(50)
)";

/*if ($conn->query($sql) === TRUE) {
  echo "Table University users created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}*/

/*$sql = "INSERT INTO UUsers VALUES (101,'J', 'D', 'abc@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: ";
}*/

$sql = "SELECT id, firstname, lastname FROM UUsers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " .$row["lastname"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>




















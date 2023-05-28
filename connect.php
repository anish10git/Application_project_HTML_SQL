<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// // Create database
// $sql = "CREATE DATABASE mydb1";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;
// }


//sql to create table
$sql = "CREATE TABLE bank (bank_id VARCHAR(20)NOT NULL, bank_name VARCHAR(30) NOT NULL)";
$sql1 = "CREATE TABLE loan (loan_id VARCHAR(20)NOT NULL, loan_Name VARCHAR(30) NOT NULL)";
$sql2 = "CREATE TABLE interest (bank_id VARCHAR(20)NOT NULL, loan_id VARCHAR(20)NOT NULL, interestRate VARCHAR(20) NOT NULL)";
$sql3 = "CREATE TABLE customer (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, Cname VARCHAR(30) NOT NULL, Cage INT NOT NULL, Cgender VARCHAR(20), Coccupation VARCHAR(20), email VARCHAR(50), Cphone INT)";
if ($conn->query($sql) === TRUE && $conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE && $conn->query($sql3) === TRUE) {
  echo " bank, loan, interest and customer table are created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}


$conn->close();
?>
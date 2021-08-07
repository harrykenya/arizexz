<?php

$fName=$_POST['fName'];
$mName=$_POST['mName'];
$lName=$_POST['lName'];
$Dateofbirth=$_POST['Dateofbirth'];
$mNumber=$_POST['mNumber'];
$Email=$_POST['Email'];
$iNumber=$_POST['iNumber'];
$course=$_POST['course'];
$gender=$_POST['gender'];


$servername = "localhost";
$username = "username";
$password = "password";

$connect = new mysqli($servername, $username, $password);

if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}
echo "Connected successfully";

$database = "CREATE DATABASE MyDataBase";
if ($connect->query($database) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $connect->error;
}

$table = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fName VARCHAR(20),
    mName VARCHAR(20),
    lName VARCHAR(20),
    Dateofbirth VARCHAR(20),
    mNumber VARCHAR(20),
    Email VARCHAR(20),
    iNumber VARCHAR(20),
    course VARCHAR(20),
    gender VARCHAR(20),
)";

if ($connect->query($database) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $connect->error;
  }
  
  $database = "INSERT INTO MyGuests (fName, mName, lName, Dateofbirth, mNumber, Email, iNumber, gender)
  VALUES ('$fName', '$mName', '$lName', '$Dateofbirth', '$mNumber', '$Email', '$iNumber','$course' ,'$gender')";
  
  if ($connect->query($database) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $database . "<br>" . $connect->error;
  }

  $connect->close();

$email = "Dear $fName,$mName,$lName", "Your application has been succesfully submitted for $course .Please await the outcome in two weeks time.Yours Registrar;

$email = wordwrap($email,70);

mail($Email,"COURSE REGISTRATION",$email);


?>
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $firstName = $_POST["firstName"];
  $middleName = $_POST["middleName"];
  $lastName = $_POST["lastName"];
  $username = $_POST["username"];
  $password = $_POST["password"];
  $confirm_password = $_POST["confirm_password"];
  $birthday = $_POST["birthday"];
  $email = $_POST["email"];
  $contact_number = $_POST["contact_number"];


  // Check if password and confirm password match
  if ($password !== $confirm_password) {
    echo "Password and confirm password are not the same.";
    exit;
  }


  // Connect to the database
  $conn = new mysqli("localhost", "root", "", "dbs");



  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  // Prepare and execute the SQL statement
  $sql = "INSERT INTO regisform (firstName, middleName, lastName, username, password, birthday, email, contact_number) VALUES ('$firstName', '$middleName', '$lastName', '$username', '$password', '$birthday', '$email', '$contact_number')";
 
if ($conn->query($sql)== TRUE){
  header("Location: login.php");
  echo "Registration successful!";
}else{
  echo "Error: " . $sql . "<br>" . $conn->error;
}
  $conn->close();
 
echo "Registration successful!";
}
?>

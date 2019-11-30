<?php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "free-shopping";
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
if ($conn->connect_error) {
     die('Connection failed');
    } else {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT username,password FROM register WHERE username=? AND password=?  LIMIT 1";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $stmt->bind_result($username, $password);
    $stmt->store_result();
    if($stmt->fetch()){
            echo "$username is successfully Logged In";
    }else{
        echo "Incorrect password";
    }
    $stmt->close();
    $conn->close();
}
?>

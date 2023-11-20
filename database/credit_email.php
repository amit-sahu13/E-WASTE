<?php

global $email;


$servername = "localhost";
$username = "root";
$password = "MUroot@123";
$database = "ewaste";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die('Connection failed' . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
}





$sql = "INSERT INTO credit_email(email) VALUES('$email')";

if(mysqli_query($conn, $sql)){
    
}
else{
    echo "Failed to send";
}
mysqli_close($conn);
?>
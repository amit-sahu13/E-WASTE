<?php
global $Name;
global $Mobile;
global $Email;
global $Address;
global $Model;
$servername = "localhost";
$username = "root";
$password = "MUroot@123";
$database = "ewaste";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die('Connection failed' . $conn->connect_error);
}
if (isset($_POST['submit'])) {
    $Name = $_POST['name'];
    $Mobile = $_POST['contact'];
    $Email = $_POST['email'];
    $Address = $_POST['address'];
    $Model = $_POST['model'];
}
$sql = "INSERT INTO technical(Name,Mobile,Email,Address,Model) VALUES('$Name', '$Mobile', '$Email', '$Address', '$Model')";
if(mysqli_query($conn, $sql)){     
}
else{
    echo "Failed to send";
}
mysqli_close($conn);
?>
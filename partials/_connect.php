<?php
// connecting to db
$servername = "localhost";
$username = "root";
$password = "";
$database = "password_saver";

// making connection with db
$conn = mysqli_connect($servername,$username,$password,$database);

// checking connection condition
if (!$conn) {
    echo "Connection is not successful!";
} else {
    echo "Connection is successful!";
}

?>
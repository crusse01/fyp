<?php
//Development db variables - use this to Cloud9 DB
// $servername = "127.0.0.1";
// $username = "jissjames9";
// $password = "";
// $dbname = "dbtest";

//Production db variables - for Heroku ClearDB
$servername = "eu-cdbr-west-02.cleardb.net";
$username = "b812cc5d97ad5f";
$password = "1a00233b";
$dbname = "heroku_e61d47d159e53c8";

//Retrieving values POSTed
$user_name = $_POST["user_name"];
$address = $_POST["address"];
$phone = $_POST["phone"];

// Create connection - using the credentials above
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
    die("Conneciton failed: " . $conn->connect_error);
}

//SQL Query using the fetched values
$sql = "INSERT INTO tblUSERS(userNAME, userADDRESS, userPHONE)
VALUES ('$user_name', '$address', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
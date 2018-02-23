<?php
    
    //Connect to the database
    $host = "127.0.0.1";
    $user = "christian_russel";                     //Your Cloud 9 username
    $pass = "";                                  //Remember, there is NO password by default!
    $db = "login_db";                                  //Your database name you want to connect to
    $port = 3306;                                //The port #. It is always 3306
    
    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());

    $_POST['email'];
    $_POST['username'];
    $_POST['password'];
    $_POST['newpassword'];

    //And now to perform a simple query to make sure it's working
    $query = "UPDATE cred SET username = '". $_POST['username'] ."', password = '". $_POST['newpassword'] ."' WHERE email LIKE '". $_POST['email'] ."' AND password LIKE '". $_POST['password'] ."'";
    $result = mysqli_query($connection, $query);

        
        // echo "Welcome: " .$row[username];
        header("location: login.html"); // Redirecting To Login Page
?>

<!--Code based off W3Schools tutorial
https://www.w3schools.com/sql/sql_update.asp-->
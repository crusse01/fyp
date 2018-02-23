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

    //And now to perform a simple query to make sure it's working
    $query = "DELETE FROM cred WHERE email LIKE '". $_POST['email'] ."' AND username LIKE '". $_POST['username'] ."' AND password LIKE '". $_POST['password'] ."'";
   $result = mysqli_query($connection, $query);

        
        // echo "Welcome: " .$row[username];
        header("location: login.html"); // Redirecting To Login Page
?>
<!--Code based on W3Schools turorial
https://www.w3schools.com/sql/sql_delete.asp-->
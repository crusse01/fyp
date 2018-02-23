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
    $query = "INSERT INTO cred (email, username, password) VALUES  ('". $_POST['email'] ."', '". $_POST['username'] ."', '". $_POST['password'] ."')";
    
    $result = mysqli_query($connection, $query);
    
    // echo "Successfully added";
    
    header("location: login.html"); // Redirecting To Login Page
    
    
    /*This code is not entirely mine, i followed a tutorial and used stack overflow to help with some problems I was having
    https://community.c9.io/t/connecting-php-to-mysql/1606
    http://shodor.org/~kevink/phpTutorial/nileshc_getreqpost.php#3
    https://www.w3schools.com/php/php_forms.asp
    */

?>
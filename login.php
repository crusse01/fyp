<?php
    
    //Connect to the database
    $host = "127.0.0.1";
    $user = "christian_russel";                     //Your Cloud 9 username
    $pass = "";                                  //Remember, there is NO password by default!
    $db = "login_db";                                  //Your database name you want to connect to
    $port = 3306;                                //The port #. It is always 3306
    
    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());

    $_POST['email'];
    $_POST['password'];

    //And now to perform a simple query to make sure it's working
    $query = "SELECT * FROM cred WHERE email LIKE '". $_POST['email'] ."' AND password LIKE '". $_POST['password'] ."'";
    
    $result = mysqli_query($connection, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        
        // echo "Welcome: " .$row[username];
        header("location: index.html"); // Redirecting To Login Page
    }
    
    else {
        header("location: error.html"); //Redirecting to Error Page
    }
    
     /*This code is not entirely mine, i followed a tutorial and used stack overflow to help with some problems I was having
    https://community.c9.io/t/connecting-php-to-mysql/1606
    http://shodor.org/~kevink/phpTutorial/nileshc_getreqpost.php#3
    https://www.w3schools.com/php/php_forms.asp
    */

?>
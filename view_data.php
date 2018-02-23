<!DOCTYPE html>
<html>
    <head>
        <title>View Data</title>
        
        <body>
            
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
            
            //Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            //Check connection
            if ($conn->connect_error) {
                die("Conneciton failed: " . $conn->connect_error);
            }
            
            $sql = "SELECT userID, userNAME, userADDRESS, userPHONE FROM tblUsers";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                //output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "ID: " . $row["userID"]. " - Name: " . $row["userName"]. " " . "
                    - Address: " . $row["userADDRESS"]. " " . " - Phone: " . $row["userPHONE"]. "<br>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
            
            <a href="index.php">BACK</a>
        </body>
    </head>
</html>
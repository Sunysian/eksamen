<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require 'menu.php'?>
    <div style="display: flex; justify-content: center; margin-top: 20rem;">
        <form action="login.php" method="POST">
            <input type="text" name="loginusername" placeholder="Brukernavn" required><br><br>
            <input type="password" name="loginpassword" placeholder="Passord" required><br><br>
            <input type="submit" value="Login">
        </form>
    </div>


    <?php
        $servername = "localhost"; 
        $username = "root";  
        $password = "yosraDB"; 
        $database = "mydbeks"; 
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $database);
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        // Close the connection
        $conn->close();

        
    ?>
</body>
</html>
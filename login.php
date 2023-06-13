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
        error_reporting(0);
        $servername = "localhost"; 
        $username = "root";  
        $password = ""; 
        $database = "mydbeks"; 
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $database);
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve user input
        $loginusername = $_POST['loginusername'];
        $loginpassword = $_POST['loginpassword'];

        // Sanitize and validate user input (You can add more validation as per your requirements)
        $loginusername = $conn->real_escape_string($loginusername);
        $loginpassword = $conn->real_escape_string($loginpassword);

        // Query the database
        $query = "SELECT * FROM adminusers WHERE loginpassword = '$loginpassword'";
        $result = $conn->query($query);
        

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $storedHashedPassword = $row['loginpassword'];
            // Verify the password
            // Password is correct, start a session
            session_start();
            $_SESSION['loginusername'] = $loginusername;
            // Redirect to page
            header("Location: tables.php");
            exit();
        }
        
        $conn->close();

        
    ?>
</body>
</html>
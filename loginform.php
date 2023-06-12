<?php
        var_dump($_POST);
        // Establish database connection
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

        // Retrieve user input
        $loginusername = $_POST['loginusername'];
        $loginpassword = $_POST['loginpassword'];

        // Sanitize and validate user input (You can add more validation as per your requirements)
        $loginusername = $conn->real_escape_string($loginusername);
        $loginpassword = $conn->real_escape_string($loginpassword);

        // Query the database
        $query = "SELECT * FROM adminusers WHERE loginpassword = '$loginpassword'";
        $result = $conn->query($query);

        //$query = "SELECT * FROM adminusers WHERE loginusername = '$username' AND password = '$password'";
        //$result = $conn->query($query);
        
        if ($result->num_rows == 1) {
            // Password is correct, start a session
            session_start();
            $_SESSION['username'] = $username;
            // Redirect to a protected area or display a success message
            header("Location: welcome.php");
            exit();
        } else {
            // Invalid username or password
            echo "Invalid username or password.";
        }

        $conn->close();
    ?>
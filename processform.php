<?php
    $servername = "localhost"; 
    $username = "root";  
    $password = "yosraDB"; 
    $database = "mydbeks"; 
        
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $navn = $_POST['navn'];
    $adresse = $_POST['adresse'];
    $epost = $_POST['epost'];
    $telefonnummer = $_POST['telefonnummer'];
    $pris = $_POST['pris'];

    // Perform any necessary data validation or sanitization here

    // Insert the data into the database
    $sql = "INSERT INTO kunde (navn, adresse, epost, telefonnummer, pris) VALUES ('$navn', '$adresse', '$epost', '$telefonnummer', '$pris')";
    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
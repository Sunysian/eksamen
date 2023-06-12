<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    







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

        // Retrieve data from the table
        $query = "SELECT * FROM kunde";
        $result = $conn->query($query);

        // Check if any rows are returned
        if ($result->num_rows > 0) {
            // Start the table
            echo "<table>";
            echo "<tr><th>ID</th><th>navn</th><th>adresse</th><th>epost</th><th>telefonnummer</th><th>pris</th></tr>";
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                // Access the column values using the column names
                $column1 = $row['ID'];
                $column2 = $row['navn'];
                $column3 = $row['adresse'];
                $column4 = $row['epost'];
                $column5 = $row['telefonnummer'];
                $column6 = $row['pris'];
                
                // Display the data in table rows
                echo "<tr>";
                echo "<td>" . $column1 . "</td>";
                echo "<td>" . $column2 . "</td>";
                echo "<td>" . $column3 . "</td>";
                echo "<td>" . $column4 . "</td>";
                echo "<td>" . $column5 . "</td>";
                echo "<td>" . $column6 . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No data available.";
        }

        // Close the connection
        $conn->close();
    ?>

</body>
</html>
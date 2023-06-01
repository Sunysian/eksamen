<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>bestil billeter</title>
</head>
<body>
    <div id="menu">
        <a href="index.html"><img src="YAlogowhite.svg" alt="" style="height: 4em;"></svg>
        <div id="sites">
            <a href="index.php">Hjem</a>
            <a href="omKong.php">Om kongsberg</a>
            <a href="safarijeep.php"><u>bestil billeter</u></a>
        </div>
    </div>

    <div class="BESTILLING">
        <h1>BESTILLING</h1>
        <h2 class="text">Fyll inn</h2>
        <div class="text">
            <form method="POST" action="processform.php">
                <p>Navn</p>
                <input type="text" id="navn" name="navn" required>
                <p class="extramargin">Adresse</p>
                <input type="text" id="adresse" name="adresse" required>
                <p class="extramargin">E-post</p>
                <input type="text" id="epost" name="epost" required>
                <p class="extramargin">Telefonnumer</p>
                <input type="text" id="telefonnumer" name="telefonnummer" required>
                <h2 class="text extramargin">Type billeter</h2>
                <div class="ticketdiv">
                    <div class="tickets smallticket" id="barnbillet">
                        <p><b>Barn</b><br>(under 12)<br>199kr</p>
                        <input type="radio" name="pris" class="radio" value="199" id="barn" required>
                    </div>
                    <div class="tickets" id="voksenbillet">
                        <p><b>Voksen</b><br><br>369kr</p>
                        <input type="radio" name="pris" class="radio" value="369" id="voksen" required>
                    </div>
                    <div class="tickets" id="eldrebillet">
                        <p st><b>Eldre</b><br>(over 60)<br>249kr</p>
                        <input type="radio" name="pris" class="radio" value="249" id="eldre" required>
                    </div>
                </div>
            </div>
            <br>
            <input type="submit" value="submit" name="submit" style="border: none; background-color: rgb(98, 187, 113); color: white; border-radius: 10px; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px; margin-left: 39.7rem; font-weight: 500; font-size: 1.5rem;"/>
            </form>
        </div>





    <?php
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
        // ...

        // Close the connection
        $conn->close();
    ?>
    
    <script src="script.js"></script>
</body>
</html>



<!-- original kode fra en av mine prosjekter, endret det til å passe her-->
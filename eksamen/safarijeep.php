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
            <a href="index.html">Hjem</a>
            <a href="omKong.html">Om kongsberg</a>
            <a href="safarijeep.html"><u>bestil billeter</u></a>
        </div>
    </div>

    <div class="BESTILLING">
        <h1>BESTILLING</h1>
        <h2 class="text">Fyll inn</h2>
        <div class="text">
            <p>Navn</p>
            <input type="text" id="navn">
            <p class="extramargin">Adresse</p>
            <input type="text" id="adresse">
            <p class="extramargin">E-post</p>
            <input type="text" id="epost">
            <p class="extramargin">Telefonnumer</p>
            <input type="text" id="telefonnumer">
        </div>

        <h2 class="text extramargin">Type billeter</h2>
        <div class="ticketdiv">
            <div class="tickets smallticket" id="barnbillet">
                <p><b>Barn</b><br>(under 12)<br>199kr</p>
                <input type="radio" name="tickettype" class="radio" value="269" id="barn">
            </div>
            <div class="tickets" id="voksenbillet">
                <p><b>Voksen</b><br><br>369kr</p>
                <input type="radio" name="tickettype" class="radio" value="199" id="voksen">
            </div>
            <div class="tickets" id="eldrebillet">
                <p st><b>Eldre</b><br>(over 60)<br>249kr</p>
                <input type="radio" name="tickettype" class="radio" value="349" id="eldre">
            </div>
        </div>

        <button class="button" onclick="checkout()">betal</button>
        <input type="submit" value="Logg inn" name="submit" />
    </div>
        <br>
        <input type="submit" value="Betal" name="submit" style="border: none; background-color: rgb(98, 187, 113); color: white; border-radius: 10px; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px; margin-left: 39.7rem; font-weight: 500; font-size: 1.5rem; cursor: pointer;"/>
    <?php
        if(isset($_POST['submit'])){
            //Gjøre om POST-data til variabler
            $brukernavn = $_POST['brukernavn'];
            $passord = $_POST['passord'];
            
            //Koble til databasen
            $dbc = mysqli_connect('localhost', 'root', '', 'mydb')
              or die('Error connecting to MySQL server.');
            
            //Gjøre klar SQL-strengen
            $query = "INSERT INTO users VALUES ('$brukernavn','$passord')";
            
            //Utføre spørringen
            $result = mysqli_query($dbc, $query)
              or die('Error querying database.');
            
            //Koble fra databasen
            mysqli_close($dbc);

            //Sjekke om spørringen gir resultater
            if($result){
                //Gyldig login
                echo "Takk for at du lagde bruker! Trykk <a href='index.php'>her</a> for å logge inn";
            }else{
                //Ugyldig login
                echo "Noe gikk galt, prøv igjen!";
            }
        }
    ?>
    
    <script src="script.js"></script>
</body>
</html>



<!-- original kode fra en av mine prosjekter, endret det til å passe her-->
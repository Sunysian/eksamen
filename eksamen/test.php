<?php
    //Databasetilkobling, med databaseplassering, brukernavn, passord og databasenavn 
    $tilkobling = new mysqli("localhost","root","","mydbeks");
?>
<?php
    //Sjekker og viser om det er feil med tilkoblingen til databasen
    if ($tilkobling->connect_errno)
        echo ("Failed to connect to MySQL: 
         (" . $tilkobling->connect_errno . ")
         " . $tilkobling->connect_error);

    //Sjekker og viser om det er noe feil med spørringen som kjøres mot databasen
    if (mysqli_errno($tilkobling))
        echo ("Error in query, " . $sql . ",  execution, MySQL returns: 
         (" . $tilkobling->errno . ")
         " . $tilkobling->error );
?>
<?php 
 
//Hvis det er en GET med kommandoen "Insert"
if (isset($_POST["command"])) {if ($_POST["command"]=="insert"){
//Lager insertspørringen
$sql_insert = sprintf("INSERT INTO kunde (navn, adresse, epost, telefonnummer, pris) VALUES ('%s', '%s', '%s', '%s', '%s')",
    $tilkobling->real_escape_string($_POST["navn"]),
    $tilkobling->real_escape_string($_POST["adresse"]),
    $tilkobling->real_escape_string($_POST["epost"]),
    $tilkobling->real_escape_string($_POST["telefonnummer"]),
    $tilkobling->real_escape_string($_POST["pris"])
    );

    //Gjør en "Insert"
    $tilkobling->query($sql_insert);}}

//Lager Selectspørringen
$sql_select = "SELECT navn, adresse, epost, telefonnummer, pris, ID FROM kunde";

//Kjører spørringen mot databasen og resultatet settes i datasettet 
$datasett = $tilkobling->query($sql_select);

?>
<!-- For hver rad i datasettet, lager PHPkoden en rad i HTML-tabelen ,
med kolonner for feltene: navn, adresse, epost, telefonnummer, pris-->
<table border="0" >
   <tr>
      <th>Navn</th>
      <th>Adresse</th>
      <th>Epost</th>
      <th>Telefonnummer</th>
      <th>Pris</th>
   </tr>
    <?php while($rad = mysqli_fetch_array($datasett)) { ?>
        <tr><form method="POST" action="test.php" >
      <input type="hidden" name="command" value="do_update">
      <input type="hidden" name="ID" value="<?php echo($rad["ID"]); ?>">
      <?php
      if (isset($_GET["command"])){
            if ($_GET["command"]=="update"){
                  if ($rad["ID"] == $_GET["ID"]){
      ?>
      <td>
         <input type="text" name = "navn" value = "<?php echo ($rad["navn"]); ?>" style="background-color : #d1d1d1;">
      </td>
      <?php } else { ?>
            <td> 
            <?php echo ($rad["navn"]); ?>
            </td>
      <?php }}else { ?>
            <td> 
            <?php echo ($rad["navn"]); ?>
            </td>
       <?php }} else { ?>
            <td> 
            <?php echo ($rad["navn"]); ?>
            </td>
            <?php } ?>
      <?php
      if (isset($_GET["command"])){
            if ($_GET["command"]=="update"){
                  if ($rad["ID"] == $_GET["ID"]){
      ?>
      <td>
         <input type="text" name = "adresse" value = "<?php echo ($rad["adresse"]); ?>" style="background-color : #d1d1d1;">
      </td>
      <?php } else { ?>
            <td> 
            <?php echo ($rad["adresse"]); ?>
            </td>
      <?php }}else { ?>
            <td> 
            <?php echo ($rad["adresse"]); ?>
            </td>
       <?php }} else { ?>
            <td> 
            <?php echo ($rad["adresse"]); ?>
            </td>
            <?php } ?>
      <?php
      if (isset($_GET["command"])){
            if ($_GET["command"]=="update"){
                  if ($rad["ID"] == $_GET["ID"]){
      ?>
      <td>
         <input type="text" name = "epost" value = "<?php echo ($rad["epost"]); ?>" style="background-color : #d1d1d1;">
      </td>
      <?php } else { ?>
            <td> 
            <?php echo ($rad["epost"]); ?>
            </td>
      <?php }}else { ?>
            <td> 
            <?php echo ($rad["epost"]); ?>
            </td>
       <?php }} else { ?>
            <td> 
            <?php echo ($rad["epost"]); ?>
            </td>
            <?php } ?>
      <?php
      if (isset($_GET["command"])){
            if ($_GET["command"]=="update"){
                  if ($rad["ID"] == $_GET["ID"]){
      ?>
      <td>
         <input type="text" name = "telefonnummer" value = "<?php echo ($rad["telefonnummer"]); ?>" style="background-color : #d1d1d1;">
      </td>
      <?php } else { ?>
            <td> 
            <?php echo ($rad["telefonnummer"]); ?>
            </td>
      <?php }}else { ?>
            <td> 
            <?php echo ($rad["telefonnummer"]); ?>
            </td>
       <?php }} else { ?>
            <td> 
            <?php echo ($rad["telefonnummer"]); ?>
            </td>
            <?php } ?>
      <?php
      if (isset($_GET["command"])){
            if ($_GET["command"]=="update"){
                  if ($rad["ID"] == $_GET["ID"]){
      ?>
      <td>
         <input type="text" name = "pris" value = "<?php echo ($rad["pris"]); ?>" style="background-color : #d1d1d1;">
      </td>
               <td>
                  <input type="submit" value="Endre">
               </td>
            </form>
      <?php } else { ?>
            <td> 
            <?php echo ($rad["pris"]); ?>
            </td>
      <?php }}else { ?>
            <td> 
            <?php echo ($rad["pris"]); ?>
            </td>
       <?php }} else { ?>
            <td> 
            <?php echo ($rad["pris"]); ?>
            </td>
            <?php } ?>
        </tr>
    <?php } ?>
    <form action="test.php&command=insert&" method="POST" > <input type="hidden" name="command" value="insert"> <tr>
    <td>
    <input type="text" name = "navn" value = "" style="background-color : #d1d1d1;"> 
    </td>
    <td>
    <input type="text" name = "adresse" value = "" style="background-color : #d1d1d1;"> 
    </td>
    <td>
    <input type="text" name = "epost" value = "" style="background-color : #d1d1d1;"> 
    </td>
    <td>
    <input type="text" name = "telefonnummer" value = "" style="background-color : #d1d1d1;"> 
    </td>
    <td>
    <input type="text" name = "pris" value = "" style="background-color : #d1d1d1;"> 
    </td><td><input type="submit" value="Ny"> </td></tr></form>
</table>

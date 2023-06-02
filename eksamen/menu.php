<?php
// Get the current page
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div id="menu">
        <a href="index.php"><img src="YAlogowhite.svg" alt="" style="height: 4em;"></svg>
        <div id="sites">
            <ul style="list-style-type: none; display: flex;">
                <li <?php if ($current_page === 'index.php') echo ' class="active"'; ?>><a href="index.php">Hjem</a></li>
                <li <?php if ($current_page === 'omturen.php') echo ' class="active"'; ?>><a href="omturen.php">Om Turene</a></li>
                <li <?php if ($current_page === 'safarijeep.php') echo ' class="active"'; ?>><a href="safarijeep.php">Bestil Billetter</a></li>
            </ul>
        </div>
    </div>
</body>
</html>
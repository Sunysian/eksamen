<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=<?=$version?>">
    <title>Hjem</title>
</head>
<body>
    <?php require 'menu.php' ?>
    <div  id="header">
        <p>Har du lyst å vite mer om turene?</p>
        <button onclick="clicking(1)">Les videre</button>
    </div>
    
    <div id="content">
        <div class="row">
            <div class="innercolumn">
                <p>
                    <svg focusable="false" aria-hidden="true" viewBox="0 0 16 16" width="1em" height="1em"><path fill="#000000" fill-rule="evenodd" d="M15.971 4.831l-11.14 11.14L0 11.14l1.212-1.212 2.175 2.175.963-.963-2.175-2.175.979-.98 2.175 2.175.963-.963-2.175-2.175.963-.962 2.905 2.905.963-.963-2.905-2.905.979-.98 2.175 2.175.963-.963-2.175-2.175.98-.979L11.14 4.35l.963-.963-2.175-2.175L11.14 0z"></path></svg>
                    6,3 km
                    <br>
                    <svg focusable="false" aria-hidden="true" viewBox="0 0 512 512" width="1em" height="1em"><path fill="#000000" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"></path></svg>
                    2 timer
                    <br>
                    <svg focusable="false" aria-hidden="true" width="14" height="14" viewBox="0 0 14 14" class="height-icon"><path fill="#000000" d="M12.8577 5.17159L4.2448 12.7534C3.75287 13.1803 4.05303 14 4.69504 14H13.3079C13.6914 14 13.9999 13.6841 13.9999 13.2913V5.70949C14.0083 5.10329 13.3079 4.77884 12.8577 5.17159Z" fill="#1B7B60"></path><path fill="#000000" d="M7.88365 4.56857C7.88365 5.03943 8.26542 5.40848 8.72355 5.40848C9.18168 5.40848 9.56346 5.0267 9.56346 4.56857V1.39984C9.56346 0.623566 8.93989 0 8.16362 0H5.00761C4.53676 0 4.16771 0.381775 4.16771 0.839905C4.16771 1.29803 4.54948 1.67981 5.00761 1.67981H6.68742L0.248154 8.1318C-0.0827179 8.46268 -0.0827179 8.99716 0.248154 9.32803C0.413589 9.49347 0.629928 9.56982 0.846267 9.56982C1.06261 9.56982 1.27895 9.49347 1.44438 9.32803L7.88365 2.88876V4.56857Z" fill="#1B7B60"></path></svg>
                    342 høydemeter totalt
                    <br>
                    <svg focusable="false" aria-hidden="true" viewBox="0 0 19 21" width="1em" height="1em"><path fill="#000000" fill-rule="evenodd" d="M1.429 19.429h15.714V8H1.429v11.429zM5.714 5.857V2.643c0-.201-.156-.357-.357-.357h-.714c-.201 0-.357.156-.357.357v3.214c0 .201.156.357.357.357h.714c.201 0 .357-.156.357-.357zm8.572 0V2.643c0-.201-.157-.357-.357-.357h-.715c-.2 0-.357.156-.357.357v3.214c0 .201.156.357.357.357h.715c.2 0 .357-.156.357-.357zm4.285-.714v14.286c0 .78-.647 1.428-1.428 1.428H1.429A1.439 1.439 0 0 1 0 19.43V5.143c0-.781.647-1.429 1.429-1.429h1.428V2.643c0-.982.804-1.786 1.786-1.786h.714c.982 0 1.786.804 1.786 1.786v1.071h4.286V2.643c0-.982.803-1.786 1.785-1.786h.715c.982 0 1.785.804 1.785 1.786v1.071h1.429c.781 0 1.428.648 1.428 1.429z"></path></svg>
                    Sesong: Jun - Okt
                </p>
                <button onclick="clicking(2)">bestil billetter</button>
            </div>
            <img src="jeep.jpg" alt="">
        </div>

        <div>

        </div>

        <div class="row">
            <img src="route.jpg" alt="" style="padding-top: 5em; padding-bottom: 5em;">
            <div class="innercolumn">
                <p>
                    Rundtur i Svartås - gruveåsen
                </p>
                <button onclick="clicking(3)">Les om turen</button>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>Har du spørsmål eller vil samarbeide med oss? Kontakt oss gjerne.</p>
        <p>E-post: <a href="mailto:example@example.com" style="color: white;">kontakt@prosjektet.no</a></p>
        <p>Telefon: 12345678</p>
    </div>
    
    <script src="script.js?v=<?=$version?>"></script>
</body>
</html>


<!--
    kilder

    for logo: https://www.kongsberg.kommune.no/om-kongsberg
    for svg ved siden av tekst og bilder ved siden; https://ut.no/turforslag/116294
-->
<?php
include 'function.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="wilders.css">
    <script src="https://kit.fontawesome.com/9fbc16b7ca.js" crossorigin="anonymous"'></script>
    <title>Page des wilders</title>
</head>


<body>

    <nav class="navbar-mobile">
   <i class="fa-solid fa-bars"></i>
        <div class="nav-list-mobile">
            <a href="#">Home</a>
            <ul>
                <li><a href="#">Wilders</a></li>
                <li class="sousMenu"><a href="#">Amina</a></li>
                <li class="sousMenu"><a href="#">Benjamin</a></li>
                <li class="sousMenu"><a href="#">Victor</a></li>
                <li class="sousMenu"><a href="#">Thomas</a></li>
                <li class="sousMenu"><a href="#">Paul</a></li>
                <li class="sousMenu"><a href="#">Merwan</a></li>
                <li class="sousMenu"><a href="#">Nicky</a></li>
                <li class="sousMenu"><a href="#">Pierre-Louis</a></li>
                <li class="sousMenu"><a href="#">Ryad</a></li>
                <li class="sousMenu"><a href="#">Aude</a></li>
                <li class="sousMenu"><a href="#">Romain</a></li>
            </ul>
            <a href="#">A propos</a>
        </div>
    </nav>
    <main>
        <div class="containers">
        <?php showWilders() ?> 
        </div>
    </main>
             <script src="index.js">
             </script>
    </body>

</html>
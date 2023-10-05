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
           <li> <a href="/index.php">Home</a></li>
              <ul> <a href="/indexWilders.php">Wilders</a>
               <li> <a href="/wildersAmina.html">Amina</a></li>
               <li> <a href="/wildersBenjamin.html">Benjamin</a></li>
               <li> <a href="/wildersVictor.html">Victor</a></li>
               <li> <a href="/wildersThomas.html">Thomas</a></li>
               <li> <a href="/wildersPaul.html">Paul</a></li>
               <li> <a href="/wildersMerwan.html">Merwan</a></li>
               <li> <a href="/wildersNicky.html">Nicky</a></li>
               <li> <a href="/wildersPlouis.html">Pierre-Louis</a></li>
               <li> <a href="/wildersRyad.html">Ryad</a></li>
               <li> <a href="/wildersAude.html">Aude</a></li>
               <li> <a href="/wildersRomain.html">Romain</a></li></ul>
           <li> <a href="/aboutus.html">A propos</a></li>
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
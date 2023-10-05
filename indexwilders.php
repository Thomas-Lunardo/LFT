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
           <li> <a href="#">Home</a></li>
              <ul> <a href="#">Wilders</a>
               <li> <a href="#">Amina</a></li>
               <li> <a href="#">Benjamin</a></li>
               <li> <a href="#">Victor</a></li>
               <li> <a href="#">Thomas</a></li>
               <li> <a href="#">Paul</a></li>
               <li> <a href="#">Merwan</a></li>
               <li> <a href="#">Nicky</a></li>
               <li> <a href="#">Pierre-Louis</a></li>
               <li> <a href="#">Ryad</a></li>
               <li> <a href="#">Aude</a></li>
               <li> <a href="#">Romain</a></li></ul>
           <li> <a href="#">A propos</a></li>
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
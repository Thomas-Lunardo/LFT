<?php
<<<<<<< HEAD

function showWilders()
{
    $images = array(
        './images/wilders/aminav2.png',
        './images/wilders/victorv2.png',
        './images/wilders/thomasv2.png',
        './images/wilders/merwanv2.png',
        './images/wilders/benjaminv2.png',
        './images/wilders/paulv2.png',
        './images/wilders/nickyv2.png',
        './images/wilders/audev2.png',
        './images/wilders/wilders.png',
        './images/wilders/ryadv2.png',
        './images/wilders/pierrelouisv2.png',
        './images/wilders/romainv2.png',

    );

    $links = array(
        './wildersamina.html',
        './wildersvictor.html',
        './wildersthomas.html',
        './wildersmerwan.html',
        './wildersbenjamin.html',
        './wilderspaul.html',
        './wildersnicky.html',
        './wildersaude.html',
        './aboutus.html',
        './wildersryad.html',
        './wildersplouis.html',
        './wildersromain.html',

    );

    for ($i = 0; $i < count($images); $i++) {
        echo "<a href =  '$links[$i]' ><img src= '$images[$i]'/></a> ";
    };
};
=======
include 'function.php'
>>>>>>> 71f1e791fafe7f3a620c70a35902e1a6846219d2
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
           <li> <a href="/index.html">Home</a></li>
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
<<<<<<< HEAD
        <div class='containers'>
            <?php echo showWilders() ?>
=======
        <div class="containers">
        <?php showWilders() ?> 
>>>>>>> 71f1e791fafe7f3a620c70a35902e1a6846219d2
        </div>
    </main>
             <script src="index.js">
             </script>
    </body>

</html>
<?php


function showwilders()
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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="wilders.css">
    <title>Document</title>
</head>


<body>
    <nav>
        <div class="navbar">
            <div class="container nav-container">
                <input class="checkbox" type="checkbox" name="" id="" />
                <div class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </div>
                <div class="menu-items">
                    <li><a href="#">Home</a></li>
                    <ul><a href="#">Wilders</a>
                        <li class="sousmenu"><ahref="#">Amina</a></li>
                        <li class="sousmenu"><ahref="#">Benjamin</a></li>
                        <li class="sousmenu"><ahref="#">Victor</a></li>
                        <li class="sousmenu"><ahref="#">Thomas</a></li>
                        <li class="sousmenu"><ahref="#">Paul</a></li>
                        <li class="sousmenu" ><ahref="#">Merwan</a></li>
                        <li><ahref="#">Nicky</a></li>
                        <li><ahref="#">Pierre-Louis</a></li>
                        <li><ahref="#">Aude</a></li>
                        <li><ahref="#">Ryad</a></li>
                        <li><ahref="#">Romain</a></li>
                    </ul>
                    <li><a href="#">A propos</a></li>
                </div>
            </div>
        </div>
    </nav>
    <main>
        <div class='containers'>
            <?php echo showwilders() ?>
        </div>
    </main>

</body>

</html>
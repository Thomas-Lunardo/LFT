<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="wilders.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <?php

        $images = array(
            './images/wilders/aminav2.png', './images/wilders/benjaminv2.png', './images/wilders/victorv2.png',
            './images/wilders/thomasv2.png', './images/wilders/paulv2.png', './images/wilders/merwanv2.png',
            './images/wilders/nickyv2.png', './images/wilders/pierrelouisv2.png', './images/wilders/audev2.png',
            './images/wilders/ryadv2.png', './images/wilders/romainv2.png',
        );

        $links = array(
            './wildersamina.html', './wildersbenjamin.html', './wildersvictor.html', './wildersthomas.html',
            './wilderspaul.html', './wildersmerwan.html', './wildersnicky.html', './wildersplouis.html', './wildersaude.html',
            './wildersryad.html', './wildersromain.html',
        );

        for ($i = 0; $i < count($images); $i++) {

            echo "<a href =  '$links[$i]' ><img src= '$images[$i]'/></a>";
        };
        ?>
    </div>
</body>

</html>
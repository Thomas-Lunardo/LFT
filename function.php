<?php

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
        './wildersAmina.html',
        './wildersVictor.html',
        './wildersThomas.html',
        './wildersMerwan.html',
        './wildersBenjamin.html',
        './wildersPaul.html',
        './wildersNicky.html',
        './wildersAude.html',
        './aboutus.html',
        './wildersRyad.html',
        './wildersPlouis.html',
        './wildersRomain.html',

    );

    for ($i = 0; $i < count($images); $i++) {

        echo "<a href =  '$links[$i]' ><img src= '$images[$i]'/></a> ";
    };
};

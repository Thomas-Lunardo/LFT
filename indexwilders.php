<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="wilders.css">
    <title>Document</title>
</head>
<body>
    <!-- <div class="parent">
        <div class="div1"> </div>
        <div class="div2"> </div>
        <div class="div3"> </div>
        <div class="div4"> </div>
        <div class="div5"> </div>
        <div class="div6"> </div>
        <div class="div7"> </div>
        <div class="div8"> </div>
        <div class="div9"> </div>
        <div class="div10"> </div>
        <div class="div11"> </div>
        <div class="div12"> </div>
        </div> -->

        <?php    foreach ($teamwilders as $w){
    echo '<a href="' . $w['lien'] . '"><img src =" ' .$w['image'] . '"/></a>';
    };      
    ?>
</body>
</html>
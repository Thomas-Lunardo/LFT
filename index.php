<a href="./images/desktop/amina_small.png"></a>
<?php

// http://localhost:8000/index.php

$dataTeachers = [
  [
  'class' => 'darkClass',
  'lastname' => 'Chakir',
  'firstname' => 'Amina',
  'title' => 'Maitresse Jedi',
  'link' => 'wildersamina.html',
  'image' => '/images/desktop/amina_small.png',
  'arrow' => '/assets/images/Arrowright.png',
],
[
  'class' => 'clearClass',
  'lastname' => 'Richard',
  'firstname' => 'Benjamin',
  'title' => 'Chevalier Jedi',
  'link' => 'wildersbenjamin.html',
  'image' => '/images/desktop/benjamin_small.png',
  'arrow' => '/assets/images/Arrowright.png',
],
];

$dataStudents = [
  [
    'class' => 'clearClass',
    'lastname' => 'Anclin',
    'firstname' => 'Victor',
    'title' => 'Padawan',
    'link' => 'wildersvictor.html',
    'image' => '/images/desktop/victor_small.png',
    'arrow' => '/assets/images/Arrowright.png',
],
[
    'class' => 'darkClass',
    'lastname' => 'Lunardo',
    'firstname' => 'Thomas',
    'title' => 'Padawan',
    'link' => 'wildersthomas.html',
    'image' => '/images/desktop/thomas_small.png',
    'arrow' => '/assets/images/Arrowright.png',
],
[
    'class' => 'darkClass',
    'lastname' => 'Hernandez',
    'firstname' => 'Paul',
    'title' => 'Padawan',
    'link' => 'wilderspaul.html',
    'image' => '/images/desktop/paul_small.png',
    'arrow' => '/assets/images/Arrowright.png',
],
[
    'class' => 'clearClass',
    'lastname' => 'Si Tayeb',
    'firstname' => 'Merwan',
    'title' => 'Padawan',
    'link' => 'wildersmerwan.html',
    'image' => '/images/desktop/merwan_small.png',
    'arrow' => '/assets/images/Arrowright.png',
],
[
    'class' => 'clearClass',
    'lastname' => 'Rasamoelina',
    'firstname' => 'Nicky',
    'title' => 'Padawan',
    'link' => 'wildersnicky.html',
    'image' => '/images/desktop/nicky_small.png',
    'arrow' => '/assets/images/Arrowright.png',
],
[
    'class' => 'darkClass',
    'lastname' => 'Bonnier',
    'firstname' => 'Pierre-Louis',
    'title' => 'Padawan',
    'link' => 'wildersplouis.htmlclass10pierrelouis_small.png',
    'arrow' => '/assets/images/Arrowright.png',
],
[
    'class' => 'darkClass',
    'lastname' => 'Monnet',
    'firstname' => 'Aude',
    'title' => 'Padawan',
    'link' => 'wildersaude.html',
    'image' => '/images/desktop/aude_small.png',
    'arrow' => '/assets/images/Arrowright.png',
],
[
    'class' => 'clearClass',
    'lastname' => 'Zaatour',
    'firstname' => 'Ryad',
    'title' => 'padawan',
    'link' => 'wildersryad.html',
    'image' => '/images/desktop/ryad_small.png',
    'arrow' => '/assets/images/Arrowright.png',
],
[
    'class' => 'clearClass',
    'lastname' => 'Guiot',
    'firstname' => 'Romain',
    'title' => 'Padawan',
    'link' => 'wildersromain.html',
    'image' => '/images/desktop/romain_small.png',
    'arrow' => '/assets/images/Arrowright.png',
],
];
  ?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Best PHP Session Ever</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" media="screen and (min-width: 420px)" media="screen" href="home_desktop_style.css" type="text/css" />
  </head>
  <body>
    <div class="homeScroll">
      <hgroup>
      <h3>BEST</h3>
      <h2>PHP</h2>
      <h3>SESSION EVER</h3>
  </hgroup>
  <a href="#header"><img src="./assets/circle-chevron-down-solid.png" alt="small button invite you to scroll"></a>    
  </div>    
    <header id="header">
      <nav id="nav" class="active">
        <ul>
          <li>
            <a href="index.html">Accueil</a>
          </li>
          <li>
            <a href="#underNav">Wilders</a>
          </li>
          <li>
            <a href="aboutus.html">A propos</a>
          </li>
        </ul>
        <div id="icons"></div>
        <h2>BSPE</h2>
      </nav>
        <div class="headAboutCard">
          <p>A PROPOS</p>
          <hr>
          <p>Brace yourself wilders are coming.</p>
        </div>
        <div class="mindCards">
          <div>
            <p>ALTRUISME</p>
            <p>La réussite du groupe en tête,
              aucun membre ne sera laissé en arrière.</p>
          </div>
          <div>
            <p>FOCUS</p>
            <p>Un but commun,
              franchir le mur qui se dresse devant eux</p>
          </div>
          <div>
            <p>ENTHOUSIASME</p>
            <p>La soif d’apprendre, avec le sourire.
              Toujours en quête de perfectionnement</p>
          </div>
        </div>
        <p>Decouvrir</p>
      </div>
    </header>
    <main>
      <hgroup>
        <h1>Nos Wilders</h1>
        <h2>WILDERS</h2>
        <hr>
        <p>SESSION DE SEPTEMBRE 2023 - FEVRIER 2024</p>
      </hgroup>
      <div class="homeGrid">
      <?php foreach($dataTeachers as $key => $value) {?>
        <div class="<?php echo $value['class']?>" id="ChakirHome">
          <p><?php echo $value['lastname'] ?></p>
          <p><?php echo $value['firstname'] ?></p>
          <p><?php echo $value['title'] ?></p>
          <a href="wildersamina.html"><img src="./assets/Arrowright.png" class="desktopChevronLink" alt="chevron circle-chevron-right-solid"></a>
          </div>
          <?php } ?>
        <?php foreach($dataStudents as $key => $value) {?>
        <div class="<?php echo $value['class']?>" id="LunardoHome">
          <p><?php echo $value['lastname'] ?></p>
          <p><?php echo $value['firstname'] ?></p>
          <p><?php echo $value['title'] ?></p>
          <a href="wildersthomas.html"><img src="./assets/Arrowright.png" alt="chevron circle-chevron-right-solid"></a>
        </div>
        <?php } ?>
        <div class="studentHomeCardDark" id="A_propos">
          <p>A propos</p>
          <a href="aboutus.html"><img src="./assets/Arrowright.png" alt="chevron circle-chevron-right-solid" class="aPropos"></a>
        </div>
      </div>
    </main>
    <footer>
      <hgroup>
      <h3>BEST SESSION PHP EVER</h3>
      <p>SESSION DE SEPTEMBRE 2023 - FEVRIER 2024</p>
      <p>Wild Code School - Lyon</p>
      <p>17 Rue Delandine, 69002 Lyon</p>
      <button><a href="mailto:toto@nolife.com">Contactez-nous</a></button>
      <p>+339 78 45 04 38</p>
      <p>Projet@wildcodeschool.com</p>
    </hgroup>
     <a href="#header" ><img src="./assets/circle-chevron-up-solid.png" alt="arrowup" class="down"/></a>
    </footer>

    <script src="./index.js"></script>
  </body>
</html>

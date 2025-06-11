<?php
// ROUTER PRINCIPAL

// ROUTE DES MONSTERS
// PATTERN: /?monstersPage
// CTRL: monstersPageController
// ACTION: indexAction
if(isset($_GET['monstersPage'])):
    include_once '../app/controllers/monstersPageController.php';
    App\Controllers\MonsterPageController\indexAction($connexion);

// ROUTE PAR DEFAUT
// PATTERN : /
// CTRL: pagesController
// ACTION: homeAction
else:
    include_once '../app/controllers/pagesController.php';
    App\Controllers\PagesController\homeAction($connexion);
endif;
<?php
// ROUTER PRINCIPAL

// ROUTE DES MONSTERS
// PATTERN: /?monstersPage

if(isset($_GET['monstersPage'])):
    include_once '../app/routers/monsters.php';

// ROUTE PAR DEFAUT
// PATTERN : /
// CTRL: pagesController
// ACTION: homeAction
else:
    include_once '../app/controllers/pagesController.php';
    App\Controllers\PagesController\homeAction($connexion);
endif;
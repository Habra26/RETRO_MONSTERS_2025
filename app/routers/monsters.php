<?php

include '../app/controllers/monstersPageController.php';

use App\Controllers\MonsterPageController;

switch($_GET['monstersPage']):
    case 'show':
        MonsterPageController\showAction($connexion, $_GET['id']);
        break;

    case 'add':
        MonsterPageController\addAction($connexion);
        break;
        
    default:
        MonsterPageController\indexAction($connexion);
        break;
endswitch;


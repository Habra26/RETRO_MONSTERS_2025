<?php 

namespace App\Controllers\MonsterPageController;

use \PDO;

function indexAction(PDO $connexion) {

    // Demande des données aux modèles
    
    include_once '../app/models/monstersModel.php';
    $monsters = \App\Models\Monstersmodel\findAll($connexion);

    // Charger la vue 'home' dans $content

    global $content, $title;
    $title = "Monsters";
    ob_start();
    include '../app/views/monsters/index.php';
    $content = ob_get_clean();
}
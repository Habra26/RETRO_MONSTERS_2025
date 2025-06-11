<?php 

namespace App\Controllers\PagesController;

use \PDO;

function homeAction(PDO $connexion) {

    // Demande des données aux modèles
    include_once '../app/models/randomMonstermodel.php';
    $randomMonster = \App\Models\RandomMonsterModel\findOne($connexion);

    include_once '../app/models/monstersModel.php';
    $monsters = \App\Models\Monstersmodel\findAll($connexion);

    // Charger la vue 'home' dans $content

    global $content, $title;
    $title = "Accueil";
    ob_start();
    include '../app/views/pages/home.php';
    $content = ob_get_clean();
}
<?php 

namespace App\Controllers\MonsterPageController;

use \PDO;

function indexAction(PDO $connexion) {

    // Demande des données aux modèles
    
    include_once '../app/models/monstersModel.php';
    $monsters = \App\Models\MonstersModel\findAll($connexion, 9);

    // Charger la vue 'home' dans $content

    global $content, $title;
    $title = "Monsters";
    ob_start();
    include '../app/views/monsters/index.php';
    $content = ob_get_clean();
}

function showAction(PDO $connexion, string $id) {
    include_once '../app/models/monstersModel.php';
    $monster = \App\Models\MonstersModel\findOneById($connexion, $id);

    global $content, $title;
    $title = $monster['name'];
    ob_start();
    include '../app/views/monsters/show.php';
    $content = ob_get_clean();
}

function addAction(PDO $connexion){
    global $content, $title;
    $title = "Ajouter";
    ob_start();
    include '../app/views/monsters/add.php';
    $content = ob_get_clean();
}
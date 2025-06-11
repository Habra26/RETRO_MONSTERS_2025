<?php

namespace App\Models\Typesmodel;

use \PDO;

function findAll(PDO $connexion): array {
    $sql = "SELECT *
            FROM monster_types
            ORDER BY name ASC";
    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}
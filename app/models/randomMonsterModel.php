<?php
namespace App\Models\RandomMonsterModel;

use \PDO;

function findOne(PDO $connexion): array {
    $sql = "SELECT m.*, mt.name AS type_name
            FROM monsters m
            LEFT JOIN monster_types mt ON m.type_id = mt.id
            ORDER BY RAND()
            LIMIT 1";
    return $connexion->query($sql)->fetch(PDO::FETCH_ASSOC);
}


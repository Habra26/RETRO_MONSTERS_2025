<?php

namespace App\Models\Monstersmodel;

use \PDO;

function findAll(PDO $connexion): array {
    $sql = "SELECT m.*, mt.name AS type_name
            FROM monsters m
            LEFT JOIN monster_types mt ON m.type_id = mt.id
            ORDER BY m.created_at DESC
            LIMIT 3";
    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}
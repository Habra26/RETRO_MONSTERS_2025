<?php

namespace App\Models\Monstersmodel;

use \PDO;

function findAll(PDO $connexion, int $limit = 3): array {
    $sql = "SELECT m.*, mt.name AS type_name
            FROM monsters m
            LEFT JOIN monster_types mt ON m.type_id = mt.id
            ORDER BY m.created_at DESC
            LIMIT :limit;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':limit', $limit, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}

function findOneById(PDO $connexion, string $id): array {
    $sql = "SELECT m.*, mt.name AS type_name
            FROM monsters m
            LEFT JOIN monster_types mt ON m.type_id = mt.id
            WHERE m.id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_STR);
    $rs->execute();
    return $rs->fetch(PDO::FETCH_ASSOC);
}
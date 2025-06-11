<?php

namespace App\Models\Raresmodel;

use \PDO;

function findAll(PDO $connexion): array {
    $sql = "SELECT *
            FROM rareties
            ORDER BY id ASC";
    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}
<?php

function showMembers()
{
    $pdo = dbConnect();
    $stmt = $pdo->prepare("SELECT abonnement_soort, email, username FROM users");
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

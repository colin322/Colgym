<?php

function showEventAanmeldingen()
{
    $pdo = dbConnect();
    $stmt = $pdo->prepare("SELECT email, naam, les FROM evenement_aanmeldingen");
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
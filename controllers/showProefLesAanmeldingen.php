<?php

function showProefLesAanmeldingen()
{
    $pdo = dbConnect();
    $stmt = $pdo->prepare("SELECT email, naam, telefoonnummer, datum FROM proefles_aanmeldingen");
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
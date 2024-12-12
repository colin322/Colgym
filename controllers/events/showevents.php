<?php

function showEvents()
{
    $pdo = dbConnect();
    $stmt = $pdo->prepare("SELECT * FROM evenementen");
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function showEventsInfo()
{
    $pdo = dbConnect();
    $id = $_GET['id'] ?? null;
    $stmt = $pdo->prepare('SELECT * FROM evenementen WHERE id=:id');
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    return $rows;
}

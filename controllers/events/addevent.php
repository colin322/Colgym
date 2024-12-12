<?php


function addEvent()
{
    $pdo = dbConnect();
    if (isset($_POST['add_event'])) {

        if (!empty($_POST['naam_event']) && !empty($_POST['omschrijving_event']) && !empty($_POST['datum-tijd_event']) && !empty($_POST['plaats_event'])) {
            $eventnaam = $_POST['naam_event'];
            $afbeeldingURL = $_POST['afbeeldingURL_event'];
            $omschrijving = $_POST['omschrijving_event'];
            $datum = $_POST['datum-tijd_event'];
            $plaats = $_POST['plaats_event'];

            $sql = "INSERT INTO evenementen (naam, afbeelding, omschrijving, datum_tijd, plaats) VALUES (:eventnaam, :afbeeldingURL, :omschrijving, :datum, :plaats)";
            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(':eventnaam', $eventnaam);
            $stmt->bindParam(':afbeeldingURL', $afbeeldingURL);
            $stmt->bindParam(':omschrijving', $omschrijving);
            $stmt->bindParam(':datum', $datum);
            $stmt->bindParam(':plaats', $plaats);

            $stmt->execute();
            header('Location: ?page=succes-addevent');
            exit();
        } else {
            return "Voer de velden in";
        }
    }
}

<?php


function aanmeldingEvent()
{
    $pdo = dbConnect();
    if (isset($_POST['event_aanmelding'])) {

        if (!empty($_POST['naam_event_aanmelding']) && !empty($_POST['email_event_aanmelding']) && !empty($_POST['les_event_aanmelding'])) {
            $wachtwoord = $_POST['email_event_aanmelding'];
            $naam = $_POST['naam_event_aanmelding'];
            $les = $_POST['les_event_aanmelding'];

            $sql = "INSERT INTO evenement_aanmeldingen (naam, email, les) VALUES (:naam, :email, :les)";
            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(':email', $wachtwoord);
            $stmt->bindParam(':naam', $naam);
            $stmt->bindParam(':les', $les);

            $stmt->execute();
            header("Location: ?page=succes-proefles");
            exit();
        } else {
            return "Voer de velden in";
        }
    }
}

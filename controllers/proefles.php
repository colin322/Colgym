<?php


function aanmeldingProefLes()
{
    $pdo = dbConnect();
    if (isset($_POST['proefles'])) {
    
        if (!empty($_POST['name_proefles']) && !empty($_POST['email_proefles']) && !empty($_POST['nummer_proefles']) && !empty($_POST['date_proefles'])) {
            $email = $_POST['email_proefles'];
            $naam = $_POST['name_proefles'];
            $nummer = $_POST['nummer_proefles'];
            $datum = $_POST['date_proefles'];

            $sql = "INSERT INTO proefles_aanmeldingen (naam, email, telefoonnummer, datum) VALUES (:naam, :email, :nummer, :datum)";
            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':naam', $naam);
            $stmt->bindParam(':nummer', $nummer);
            $stmt->bindParam(':datum', $datum);

            try {
                $stmt->execute();
                header("Location: ?page=succes-proefles");
                exit();
            } catch (PDOException $e) {
                if ($e->errorInfo[1] == 1062) {
                    return "Dit e-mailadres is al in gebruik.";
                } 
            }
        } else {
            return "Voer de velden in";
        }
    }
}

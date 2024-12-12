<?php

function removeEvent()
{
    if (isset($_POST['remove-event']) && isset($_POST['event_id'])) {
        $pdo = dbConnect();
        $id = $_POST['event_id'];
        $stmt = $pdo->prepare("DELETE FROM evenementen WHERE id = ?;");
        $stmt->execute([$id]);

        header("Location: ?page=succes-removed");
        exit();
    }
}

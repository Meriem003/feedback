<?php
    if (isset($_POST["envoyer"])) {

        $nom = $_POST["nom"];
        $message = $_POST["message"];

        $commentaires = new feedback($nom, $message,  $pdo);
        $commentaires->add();
    }
?>
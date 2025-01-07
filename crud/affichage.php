<?php
    $commentaires = new feedback (null,null,$pdo);
    $messages = $commentaires->affichage();
    foreach($messages as $row){
        echo "<tr>";
        echo "<td>{$row['nom']}</td>";
        echo "<td>{$row['message']}</td>";
        echo "<tr>";
    }
?>
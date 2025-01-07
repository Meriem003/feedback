<?php
include '../model/conn.php';

class feedback {
    public $id;
    public $nom;
    public $message;
    public $pdo;

    public function __construct($nom, $message, $pdo) {
        $this->nom = $nom;
        $this->message = $message;
        $this->pdo = $pdo;
    }

    public function add() {
        $sql = "INSERT INTO commentaires (nom, message) VALUES (?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$this->nom, $this->message ]);
    }
}
?>

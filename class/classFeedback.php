<?php
class feedback {
    public $nom;
    public $message;
    private $pdo;

    public function __construct($nom, $message, $pdo) {
        $this->nom = $nom;
        $this->message = $message;
        $this->pdo = $pdo;
    }
    public function add() {
        $sql = "INSERT INTO commentaires (nom, message) VALUES (?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$this->nom, $this->message]);
    }
    public function affichage(){
        $sql = "SELECT * FROM commentaires";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $messages = [];
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $messages[] = $row;
        }
        return $messages;
        }
    }
?>

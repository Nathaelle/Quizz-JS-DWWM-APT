<?php

class Utilisateur extends DbConnect {

    private $id_utilisateur;
    private $pseudo;
    private $passwd;

    function insert() {

        $query = "INSERT INTO Utilisateurs (pseudo, passwd) VALUES( :pseudo, :passwd)";
        $preparedQuery = $this->pdo->prepare($query);
        $preparedQuery->bindValue("pseudo", $this->pseudo, PDO::PARAM_STR);
        $preparedQuery->bindValue("passwd", $this->passwd, PDO::PARAM_STR);
        return $preparedQuery->execute();

        // EXEMPLE INJECTION SQL
        // $pseudo = "Jean'--";
        // $passwd = "hievauivhez??";

        // $query = "SELECT id_utilisateur, pseudo, passwd FROM Utilisateur 
        //             WHERE pseudo = '$pseudo' AND passwd = '$passwd'";

        // $query = "SELECT id_utilisateur, pseudo, passwd FROM Utilisateur 
        //             WHERE pseudo = 'Jean'--' AND passwd = 'hievauivhez??'";

    }

}
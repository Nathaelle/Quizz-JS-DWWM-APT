<?php

class Question extends DbConnect {

    private $id;
    private $intitule;

    function __construct() {
        parent::__construct();
        // Permet de pouvoir "surcharger" une méthode = ajouter des instructions spécifiques pour la classe fille
    }
    
}
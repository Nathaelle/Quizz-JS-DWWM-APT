<?php

class Reponse extends DbConnect {

    private $id;
    private $label;
    private $value;

    function __construct() {
        parent::__construct();
        // Permet de pouvoir "surcharger" une méthode = ajouter des instructions spécifiques pour la classe fille
    }
    
}
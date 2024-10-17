<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of FactureControleur
 *
 * @author benty
 */
require_once "model/factureManager.class.php";
require_once "./outil/outils.php";

class FactureControleur {
   private $factureManager;
   
   public function __construct() {
       $this->factureManager = new factureManager();
   }
   function afficherAccueil() {
       require "vue/accueil.view.php";
   }
   function afficherFactures(){
      $tabFactures=$this->factureManager->lireFactures();
      require "vue/afficherfactures.view.php";
   }
}

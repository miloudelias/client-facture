<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of index
 *
 * @author elias
 */
require_once "controleur/FactureControleur.class.php";
require_once "outil/outils.php";
require_once "outil/Securite.class.php";
require_once "controleur/ClientControleur.class.php";
session_start();
$factureControleur = new FactureControleur;

try{
    if(empty($_GET['action'])){
        $factureControleur->afficherAccueil();
    }
    elseif(isset($_GET['action'])){
        if($_GET['action']=="tab"){
            $factureControleur->afficherFactures();
        }
    }    
} catch (Exception $ex) {

}

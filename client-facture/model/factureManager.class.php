<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of factureManager
 *
 * @author elias
 */
require_once "connexion.class.php";
require_once "facture.class.php";
class factureManager extends Connexion {
    function lireFactures(){
        $stmt = $this->getBdd()->prepare("SELECT * FROM facture");
        $stmt->execute();
        $bddLivres = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
		$factures=[];
        foreach($bddFactures as $facture){
            $f=new Facture($facture['id'], $facture['montant'], $facture['description'],$facture['idClient'], $facture['payee']);
            $factures[]=$f;
        }
        return $factures;
    }
    
    function lireFactureById($id){
        $stmt = $this->getBdd()->prepare("SELECT * FROM facture WHERE id=:id");
        $stmt->bindValue(":id",$id,PDO::PARAM_STR);
        $cpt = $stmt->execute();
        $livre = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();  
        //echo "id=".$id."<br>";
        $f=new Facture($facture['id'], $facture['montant'], $facture['description'], $facture['idClient'], $facture['payee']);
        return $f;
    }
}

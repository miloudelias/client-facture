<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of facture
 *
 * @author elias
 */
class Facture {
    private $id;
    private $montant;
    private $description;
    private $payee;
    private $idClient;
    
    public function __construct($id, $montant, $description,$payee,) {
        $this->id = $id;
        $this->montant = $montant;
        $this->description = $description;
        $this->payee = $payee;
    }
    
    public function __toString(): string {
        return "Facture[id=" . $this->id
                . ", montant=" . $this->montant
                . ", description=" . $this->description
                .", idClient=". $this->idClient
                .", payée=".$this->payee
                . "]";
    }
    
    public function getId() {
        return $this->id;
    }

    public function getMontant() {
        return $this->montant;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setMontant($montant): void {
        $this->montant = $montant;
    }

    public function setDescription($description): void {
        $this->description = $description;
    }
    
    public function getPayee() {
        return $this->payee;
    }

    public function getIdClient() {
        return $this->idClient;
    }

    public function setPayee($payee): void {
        $this->payee = $payee;
    }

    public function setIdClient($idClient): void {
        $this->idClient = $idClient;
    }

}


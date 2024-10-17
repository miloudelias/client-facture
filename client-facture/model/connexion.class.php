<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
/*
function getPdo(){
    $login="root";
    $mdp="";
    $bd="client-facture";
    $serveur="localhost";
	$port="3306";
    try {
        $pdo = new PDO("mysql:host=$serveur;dbname=$bd;port=$port", $login, $mdp);
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
        return $pdo;
    } catch (PDOException $e) {
        print "Erreur de connexion PDO :".$e;
        die();
    }
}
*/
abstract class Connexion {
    private static $pdo;
    private static $servername = 'localhost';
    private static $username = 'root';
    private static $password = '';
    
    private static function setBdd(){
        self::$pdo = new PDO("mysql:host=localhost;dbname=client-facture;charset=utf8","root","");
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    }
    
    protected function getBdd(){
        if(self::$pdo === null){
            self::setBdd();
        }
        return self::$pdo;
    }
}

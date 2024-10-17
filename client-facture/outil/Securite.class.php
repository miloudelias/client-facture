<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Securite
 *
 * @author benty
 */
class Securite {
    public static function verifAccessAdmin(){
        return (isset($_SESSION['role']) && !empty($_SESSION['role']) && $_SESSION['role'] === "admin");
    }
}

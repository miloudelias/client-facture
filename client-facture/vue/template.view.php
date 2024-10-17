<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
require_once "outil/Securite.class.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css" type="text/css" media="screen" />
    <title><?php echo $titre ?></title>
</head>
<body >
<div class="container">
    <h1 class="relief">Gestion facture-clients</h1>
    <h1 class="relief">Factures simplifiées, clients ravis : votre succès, notre mission !<h1>
</div>
    <!-- https://getbootstrap.com/docs/5.1/components/navs-tabs/ -->
    <div class="container">
        <div class="row">
            <div class="col-11">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=list-clients">Liste des clients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=list-factures">Liste des factures</a>
                    </li>
                    <?php if(Securite::verifAccessAdmin()){ // creer et administrer livres sont maintenant
                        // soumis à authetification. 
                        // Ajout de gestion administrateur.
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=tab">Aministration factures</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=creer">Créer facture</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=admin">Gérer clients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=creer-user">Créer client</a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-1 text-right">
                <?php if(Securite::verifAccessAdmin()){ // Ajout possibilité de se logger ?>
                    <a class="nav-link text-center" href="index.php?action=logout">logout</a>
                <?php } else { ?>
                    <a class="nav-link text-center" href="index.php?action=login">login</a>
                <?php } ?>    
            </div>
       </div>
    </div>            
            
            
            
            

    <div class="container">
        <h2><?php echo $titre ?></h2>
        <?php echo $content ?>
    </div>

    <div class="container">
    <footer>
        <p>Copyright perroquet - Tous droits réservés<br />
        <a href="#">Me contacter !</a></p>
    </footer>
    </div>
</body>
</html>
<?php ob_start()?>

h3>Gestion Factures/Clients</h3>
<p>Une bonne gestion de ses factures assure une bonne appréciation auprès de leurs fidèles clients ! Suivez vos factures dans ce site, nous nous occupons de gérer nos clients ainsi que leurs factures. </p>
<div class="conteneur-ligne">
    <div class="element">
        <iframe width="560" height="315" src="https://www.youtube.com/watch?v=j4XgvqZZLs4&pp=ygUOZmFjdHVyZSBjbGllbnQ%3D" 
            title="YouTube video player" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
        </iframe>
    </div>
    <div class="element">
        <p>
        Payez vos factures, c'est important! 
        </p>
    </div>
</div>
<h3>Organisation interne</h3>
<p>
    Organisé et géré par Elias ZAINA
</p>
<?php
    $content=ob_get_clean();
    $titre = "Page d'accueil";
    require "template.view.php";
?>
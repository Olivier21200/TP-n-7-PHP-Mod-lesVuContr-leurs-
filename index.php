<?php 
    echo" <h1> Tp n°7 prog Web</h1>" ;

    echo basename(__FILE__, ".php"); /* Returns The Current php File Name */

    require_once('controleurs/ControleurPrincipal.php'); //include de la class

    $vue = new vue('accueil');
    $Ctl = new  ControleurPrincipal($vue); // instancie un ControleurPrincipal.

    
?>   
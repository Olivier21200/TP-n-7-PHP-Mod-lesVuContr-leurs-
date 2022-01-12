<?php 
    echo" <h1> Tp n°7 prog Web</h1>" ;

    echo basename(__FILE__, ".php"); /* Returns The Current php File Name */

    //index.php?page={R:1}

    $tabUrl = parse_url ( $_SERVER [ 'REQUEST_URI' ] ) ;
    
    require_once('controleurs/ControleurPrincipal.php'); //include de la class

    $Ctl = new  ControleurPrincipal(); // instancie un ControleurPrincipal.

?>   
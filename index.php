<?php 
    echo" <h1> Tp n°7 prog Web</h1>" ;

    echo basename(__FILE__, ".php"); /* Returns The Current php File Name */













    
    require_once('ControleurPrincipal.php'); //include de la class

    $Ctl = new  ControleurPrincipal(); // instancie un ControleurPrincipal.

?>   
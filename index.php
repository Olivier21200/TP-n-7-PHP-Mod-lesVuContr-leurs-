<?php 
    echo" <h1> Tp n°7 prog Web</h1>" ;

    echo basename(__FILE__, ".php"); /* Returns The Current php File Name */

    //index.php?page={R:1}

    $tabUrl = parse_url ( $_SERVER [ 'REQUEST_URI' ] ) ;
    
    $chaineUrl = $_SERVER['PHP_SELF']; 
    $url = basename($chaineUrl,'test');
    echo "Vous vous trouvez sur la page : " . $url;
    
    require_once('controleurs/ControleurPrincipal.php'); //include de la class

    $Ctl = new  ControleurPrincipal(); // instancie un ControleurPrincipal.

?>   
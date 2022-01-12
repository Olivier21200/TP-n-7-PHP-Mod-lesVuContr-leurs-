<?php 
require_once("vues/vue.php");
require_once("vues/VueAccueil.php");

class ControleurPrincipal 
{
    private $_vue;// attribut « vue »

     //Constructeur
     public function __construct(vue $vue) 
     {
        $this->_vue = $vue;
        $this->traiterDonneesGet();//appel de la fonction 1,
        $this->afficher();//appel de la fonction 2;
     }

     //Fonction qui pour le moment ne fais rien
     public function traiterDonneesGet()
     {
        $url = $_SERVER['REQUEST_URI']; /* Returns The Current php File Name */
        
        if(strpos($url,'accueil'))
        {
            $this->_vue = new VueAccueil("accueil");
        }
     }

      //Fonction qui affiche ok
      public function afficher()
      {
         echo $this->_vue->afficher() ; //affiche la page   
      }
 

}


?>
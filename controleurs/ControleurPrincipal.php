<?php 
require_once("vues/vue.php");
require_once("vues/VueAccueil.php");
require_once("vues/VueParc.php");
require_once("modeles/ordinateurs.php");

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
        $ordinateurs = new ordinateurs();
        if(strpos($url,'accueil'))
        {
            $this->_vue = new VueAccueil("accueil");
        }

        if(strpos($url,'parc'))
        {
            $this->_vue = new VueParc($ordinateurs);
        }
     }

      //Fonction qui affiche ok
      public function afficher()
      {
         echo $this->_vue->afficher() ; //affiche la page   
      }
 

}


?>
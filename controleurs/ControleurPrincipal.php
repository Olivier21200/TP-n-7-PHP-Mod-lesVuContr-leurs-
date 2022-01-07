<?php 
require_once("../vues/vue.php");

class ControleurPrincipal 
{
    private vue $_vue; // attribut « vue »


     //Constructeur
     public function __construct(/*$vue*/) 
     {
        // $this->_vue=$vue;
        $this->traiterDonneesGet();//appel de la fonction 1,
        $this->afficher();//appel de la fonction 2;
     }

     //Fonction qui pour le moment ne fais rien
     public function traiterDonneesGet()
     {
         
     }

      //Fonction qui affiche ok
      public function afficher()
      {
          echo $this->_vue->afficher() ; //affiche la page
      }
 

}


?>
<?php 

class vue
{
    private $_titre; // attribut « titre »


     //Constructeur de la vue
     public function __construct($titre) 
     {
        $this->_titre = $titre; //init titre page
     }
     
     // fournira le code d’entête d’une page HTML jusqu’à la balise <body>
     public function afficherEntete() 
     {
         
     }

     // fournira le code de pied d’une page HTML à partir de la balise </body> inclue
     public function afficherPied() 
     {

     }

     // affichera « Page introuvable
     public function afficherCorps() 
     {
        echo"<p>Page introuvable</p>";
     }
     
     //affichage de l'ensemble de la page
     public function  afficher() 
     {
        $this->afficherEntete();
        $this->afficherCorps();
        $this->afficherPied();
     }

     //Fonction qui return le titre de la page
     public function titre()
     {
         return $this->_titre;
     }

}
?>
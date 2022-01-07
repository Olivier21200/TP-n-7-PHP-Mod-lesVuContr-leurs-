<?php 

require_once('../modeles/ordinateurs.php');

class VueParc extends vue
{
    private ordinateurs $ordinateurs;

    //Constructeur de VueParc
    public function __construct(ordinateurs $ordinateurs) 
    {
       
    }

    //Fonction qui return ordinateurs
    public function ordinateurs()
    {
        return $this->ordinateurs;
    }

     // affichera « Bienvenue dans le corp de la page html
    public function afficherCorps() 
    {
        echo"<p>Bienvenue</p>";
    }

}

?>
<?php 

require_once('/modeles/ordinateurs.php');

class VueParc extends vue
{
    private $_ordinateurs;

    //Constructeur de VueParc
    public function __construct(ordinateurs $ordinateurs) 
    {
       $this->_ordinateurs=$ordinateurs;
    }

    //Fonction qui return ordinateurs
    public function ordinateurs()
    {
        return $this->_ordinateurs;
    }

     // affichera « Bienvenue dans le corp de la page html
    public function afficherCorps() 
    {
        foreach($this->_ordinateurs as $data)
        {   
            
        }
    }

}

?>
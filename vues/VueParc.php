<?php 

require_once('../modeles/ordinateurs.php');

class VueParc 
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

}

?>
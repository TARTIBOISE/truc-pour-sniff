<?php
//ceci est un commentaire
namespace app;

class Validateur
{//un autre
    public function check($input)
    //ça aussi c'est un commentaire
    {
        if (strlen($input) < 2) {
            return false;
        } else {
            return true;
        }
    }
}

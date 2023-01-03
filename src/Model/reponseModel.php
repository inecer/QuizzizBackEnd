<?php

namespace Ez\Model;

use Ez\Entity\Reponse;
use Ez\Service\serviceBDD;

class reponseModel
{
    private $bdd;

    /**
     * @param $bdd
     */
    public function __construct()
    {
        $this->bdd = Servicebdd::getConnect();
    }

    public function getFetchAll()
    {
        $requete = $this->bdd->prepare("select * from reponse");
        $requete->execute();
        $tabReponse=[];
        foreach ($requete->fetchAll() as $value) {
            $reponse = new Reponse();
            $reponse->setValeur($value["valeur"]);
            $reponse->setCheminImage($value["cheminImage"]);
            $tabReponse[] = $reponse;
        }
        return $tabReponse;
    }

    public function addReponse(Reponse $reponse)
    {
        $requete = "INSERT INTO reponse(valeur, cheminImage) VALUES ('{$reponse->getValeur()}', '{$reponse->getCheminImage()}')";
        $resultat = $this->bdd->prepare($requete);
        $resultat->execute();
    }
}
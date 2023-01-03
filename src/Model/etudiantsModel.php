<?php

namespace Ez\Model;

use Ez\Entity\Etudiants;
use Ez\service\serviceBDD;

class etudiantsModel
{
    private $bdd;

    public function __construct()
    {
        $this->bdd = serviceBDD::getConnect();
    }

    public function getFetchAll()
    {
        $requete=$this->bdd->prepare('SELECT * FROM etudiants');
        $requete->execute();
        foreach ($requete->fetchAll() as $value)

        {
            $etudiants = new etudiants();
            $etudiants->setIdEtudiant($value["idEtudiant"]);
            $etudiants->setLogin($value["loginEtudiant"]);
            $etudiants->setMotDePasse($value["motsdepasseEtudiant"]);
            $etudiants->setNom($value["nomEtudiant"]);
            $etudiants->setPrenom($value["prenomEtudiant"]);
            $etudiants->setEmail($value["emailEtudiant"]);
            $tabEtudiants[] = $etudiants;
        }

        return $tabEtudiants;

    }

    public function getFetchId()
    {
        $requete=$this->bdd->prepare("SELECT * FROM etudiants WHERE idEtudiants = 'id'");
        $requete->execute();
        $result = $requete->fetch();

        {
            $etudiants = new etudiants();
            $etudiants->setIdEtudiant($result["idEtudiant"]);
            $etudiants->setLogin($result["loginEtudiant"]);
            $etudiants->setMotDePasse($result["motsdepasseEtudiant"]);
            $etudiants->setNom($result["nomEtudiant"]);
            $etudiants->setPrenom($result["prenomEtudiant"]);
            $etudiants->setEmail($result["emailEtudiant"]);
            $tabEtudiants[] = $etudiants;
        }

        return $etudiants;

    }


}
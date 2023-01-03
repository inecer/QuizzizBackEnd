<?php

namespace Ez\Model;
use Ez\Entity\Qcmfait;
use Ez\service\serviceBDD;

class qcmfaitModel
{
    private $bdd;

    public function __construct()
    {
        $this->bdd = BddService::getConnect();
    }

    public function getFetchAll()
    {
        $requete = $this->bdd->prepare(query: "SELECT * FROM qcmfait");
        $requete->execute();
        $tabQcmfait = [];

        foreach ($requete->fetchAll() as $value)
        {
            $qcmfait = new Qcmfait();
            $qcmfait->setIdEtudiant($value["idEtudiant"]);
            $qcmfait->setIdQuestionnaire($value["idQuestionnaire"]);
            $qcmfait->setDateFait($value["dateFait"]);
            $qcmfait->setPoint($value["point"]);
            $tabQcmfait[] = $qcmfait;
        }

        return $tabQcmfait;
    }


}
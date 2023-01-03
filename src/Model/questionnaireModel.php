<?php

namespace Ez\Model;

use Ez\DebugHandler;
use Ez\Entity\Questionnaire;
use Ez\service\serviceBDD;

class questionnaireModel
{
    private $bdd;

    public function __construct()
    {
        $this->bdd=serviceBDD::getConnect();
    }

    public function getFetchAll()
    {
        $requete=$this->bdd->prepare("SELECT * FROM questionnaire");
        $requete->execute();
        $tabQuestionnaire=[];
        foreach ($requete->fetchAll() as $value)
        {
            $questionnaire=new Questionnaire();
            $questionnaire->setIdQuestionnaire($value["idQuestionnaire"]);
            $questionnaire->setLibelleQuestionnaire($value["libelleQuestionnaire"]);
            $tabQuestionnaire[]=$questionnaire;
        }
        return $tabQuestionnaire;
    }

    public function getFetchId(int $id)
    {
        $requete=$this->bdd->prepare("SELECT * FROM questionnaire WHERE idQuestionnaire='$id'");
        $requete->execute();
        $result=$requete->fetch();

        $questionnaire=new Questionnaire();
        $questionnaire->setIdQuestionnaire($result["idQuestionnaire"]);
        $questionnaire->setLibelleQuestionnaire($result["libelleQuestionnaire"]);

        return $questionnaire;
    }

    public function addQuestionnaire(){
        $requete=$this->bdd->prepare("INSERT INTO questionnaire (idQuestionnaire, libelleQuestionnaire)
        values ({$_POST['idQuestionnaire']}, '{$_POST['libelleQuestionnaire']}')");
        $requete->execute();
    }

}
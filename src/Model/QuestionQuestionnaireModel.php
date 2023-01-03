<?php

namespace Ez\Model;

use Ez\Entity\Questionquestionnaire;
use Ez\service\serviceBDD;
class QuestionQuestionnaireModel
{
    private $bdd;

    public function __construct()
    {
        $this->bdd=serviceBDD::getConnect();
    }

    public function getFetchAll()
    {
        $requete=$this->bdd->prepare("SELECT * FROM questionquestionnaire");
        $requete->execute();
        $tabQuestionquestionnaire=[];
        foreach ($requete->fetchAll() as $value){
            $questionquestionnaire=new Questionquestionnaire($value["idQuestionnaire"], $value["idQuestion"]);
            $tabQuestionquestionnaire[]=$questionquestionnaire;
        }
        return $tabQuestionquestionnaire;
    }

    public function addQuestionquestionnaire(){
        $requete=$this->bdd->prepare("INSERT INTO questionquestionnaire (idQuestionnaire,idQuestion)
        values ({$_POST['idQuestionnaire']},{$_POST['idQuestion']})");
        $requete->execute();
    }

}
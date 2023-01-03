<?php

namespace Ez\Model;

use Ez\Entity\Question;
use Ez\service\serviceBDD;

class questionModel
{
    private $bdd;

    public function __construct()
    {
        $this->bdd=serviceBDD::getConnect();
    }

    public function getFetchAll(){
        $requete=$this->bdd->prepare("SELECT * FROM question");
        $requete->execute();
        $tabQuestion=[];
        foreach ($requete->fetchAll() as $value){
            $question = new Question();
            $question->setIdQuestion($value["idQuestion"]);
            $question->setLibelleQuestion($value["libelleQuestion"]);
            $question->setType($value["type"]);
            $question->setNbReponse($value["nbReponse"]);
            $question->setNbBonneReponse($value["nbBonneReponse"]);
            $tabQuestion[]=$question;
        }
        return $tabQuestion;
    }

    public function addQuestion(){
        $requete=$this->bdd->prepare("INSERT INTO question (idQuestion,libelleQuestion,type,nbReponse,nbBonneReponse)
        values ({$_POST['idQuestion']},'{$_POST['libelleQuestion']}',1,{$_POST['nbReponse']},{$_POST['nbBonneReponse']})");
        $requete->execute();
    }

}
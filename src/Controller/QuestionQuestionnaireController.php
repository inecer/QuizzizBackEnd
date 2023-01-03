<?php

namespace Ez\Controller;

use Ez\Model\QuestionQuestionnaireModel;
use Ez\service\TwigService;

class QuestionQuestionnaireController implements ControllerInterface
{

    public function getOutput()
    {
        $add=false;
        if (isset($_POST["idQuestionnaire"]) and $_POST["idQuestion"]){
            $questionquestionnaireModel=new questionquestionnaireModel();
            $questionquestionnaireModel->addQuestionquestionnaire();
            $add=true;
        }

        $twig = TwigService::getEnvironment();
        $questionquestionnaireModel = new questionquestionnaireModel();
        echo $twig->render('questionquestionnaire.html.twig', [
            'questionquestionnaire' => $questionquestionnaireModel->getFetchAll(),
            'add'=>$add
        ]);
    }

    public function setInput($get, $post, $vars)
    {
        // TODO: Implement setInput() method.
    }
}
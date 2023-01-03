<?php

namespace Ez\Controller;

use Ez\service\TwigService;
use Ez\Model\questionModel;

class QuestionsController implements ControllerInterface
{

    public function getOutput()
    {
        $add=false;
        if (isset($_POST["idQuestion"]) and $_POST["libelleQuestion"] and $_POST["nbReponse"] and $_POST["nbBonneReponse"]){
            $questionModel=new questionModel();
            $questionModel->addQuestion();
            $add=true;
        }

        $twig = TwigService::getEnvironment();
        $questionModel = new questionModel();
        echo $twig->render('questions.html.twig', [
            'questions' => $questionModel->getFetchAll(),
            'add'=>$add
        ]);
    }

    public function setInput($get, $post, $vars)
    {
        // TODO: Implement setInput() method.
    }
}
<?php

namespace Ez\Controller;

use Ez\Model\questionnaireModel;
use Ez\service\TwigService;

class QuestionnaireController implements ControllerInterface
{

    public function getOutput()
    {
        $add=false;
        if (isset($_POST["idQuestionnaire"]) and $_POST["libelleQuestionnaire"]) {
            $questionnaireModel = new questionnaireModel();
            $questionnaireModel->addQuestionnaire();
            $add = true;
        }

        // TWIG
        $twig = TwigService::getEnvironment();
        $questionnaireModel = new questionnaireModel();
        echo $twig->render('questionnaire.html.twig', [
            'questionnaires' => $questionnaireModel->getFetchAll(),
            'add'=>$add
        ]);


    }

    public function setInput($get, $post, $vars)
    {
        // TODO: Implement setInput() method.
    }
}
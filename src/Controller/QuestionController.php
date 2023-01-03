<?php

namespace Ez\Controller;

use Ez\service\TwigService;
use Ez\Model\questionnaireModel;

class QuestionController implements ControllerInterface
{
    public function getOutput()
    {
        // TWIG
        $twig = TwigService::getEnvironment();
        // Obj connect Mysql -> Obj Questionnaire
        $questionnaireModel = new questionnaireModel();
        // je teste la variable GET /?id
        if (isset($this->idQuestion)) {
            echo $twig->render('questionnaires.html.twig', [
                'questionnaires' => $questionnaireModel->getFetchId((int)$this->idQuestion)
            ]);
        }}

        public function setInput($get, $post, $vars)
        {
            $this->idQuestion=$vars["id"];
        }


}
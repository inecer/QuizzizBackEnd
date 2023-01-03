<?php

namespace Ez\Controller;

use Ez\service\TwigService;
use Ez\Model\questionnaireModel;
class HomeController implements ControllerInterface
{
    public function getOutput()
    {
        $twig = TwigService::getEnvironment();
        // Obj connect Mysql -> Obj Questionnaire
        $questionnaireModel = new questionnaireModel();

        echo $twig->render('home.html.twig', [
            'result' => $questionnaireModel->getFetchAll(),
            'visu' => false
        ]);    }



    public function setInput($get, $post, $vars)
    {
        // TODO: Implement setInput() method.
    }

}
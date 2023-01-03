<?php

namespace Ez\Controller;

use Ez\DebugHandler;
use Ez\service\TwigService;
use Ez\Entity\Reponse;
use Ez\Model\reponseModel;

class ReponseController implements ControllerInterface
{
    private $Post;
    public function getOutput()
    {

        $twig = TwigService::getEnvironment();

        if (!empty($this->Post)){
            $reponseModel = new reponseModel();
            $reponse = new Reponse();
            $reponse->setValeur($this->Post['valeur']);
            $reponse->setCheminImage($this->Post['cheminImage']);
            $reponseModel->AddReponse($reponse);
        }
        $reponseModel = new reponseModel();
        echo $twig->render('reponse.html.twig',[
        'reponse' => $reponseModel->getFetchAll()]);
        // TODO: Implement getOutput() method.
    }

    public function setInput($get, $post, $vars)
    {
        $this->Post = $post;
    }
}
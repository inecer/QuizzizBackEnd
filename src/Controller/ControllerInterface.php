<?php

namespace Ez\Controller;

interface ControllerInterface
{
    /**
     * Methode de sortie VIEW
     * @return mixed
     */

    public function getOutput();

    public function setInput($get, $post, $vars);

}
<?php

namespace Ez\Entity;

class Questionreponse
{
    private $idQuestion;
    private $idReponse;
    private $ordre;
    private $bonne;

    /**
     * @param $idQuestion
     * @param $idReponse
     * @param $ordre
     * @param $bonne
     */
    public function __construct($idQuestion, $idReponse, $ordre, $bonne)
    {
        $this->idQuestion = $idQuestion;
        $this->idReponse = $idReponse;
        $this->ordre = $ordre;
        $this->bonne = $bonne;
    }

    /**
     * @return mixed
     */
    public function getIdQuestion()
    {
        return $this->idQuestion;
    }

    /**
     * @param mixed $idQuestion
     */
    public function setIdQuestion($idQuestion): void
    {
        $this->idQuestion = $idQuestion;
    }

    /**
     * @return mixed
     */
    public function getIdReponse()
    {
        return $this->idReponse;
    }

    /**
     * @param mixed $idReponse
     */
    public function setIdReponse($idReponse): void
    {
        $this->idReponse = $idReponse;
    }

    /**
     * @return mixed
     */
    public function getOrdre()
    {
        return $this->ordre;
    }

    /**
     * @param mixed $ordre
     */
    public function setOrdre($ordre): void
    {
        $this->ordre = $ordre;
    }

    /**
     * @return mixed
     */
    public function getBonne()
    {
        return $this->bonne;
    }

    /**
     * @param mixed $bonne
     */
    public function setBonne($bonne): void
    {
        $this->bonne = $bonne;
    }

}
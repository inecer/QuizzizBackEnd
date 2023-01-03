<?php

namespace Ez\Entity;

class   Question
{
    private $idQuestion;
    private $libelleQuestion;
    private $type;
    private $nbReponse;
    private $nbBonneReponse;

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
    public function getLibelleQuestion()
    {
        return $this->libelleQuestion;
    }

    /**
     * @param mixed $libelleQuestion
     */
    public function setLibelleQuestion($libelleQuestion): void
    {
        $this->libelleQuestion = $libelleQuestion;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getNbReponse()
    {
        return $this->nbReponse;
    }

    /**
     * @param mixed $nbReponse
     */
    public function setNbReponse($nbReponse): void
    {
        $this->nbReponse = $nbReponse;
    }

    /**
     * @return mixed
     */
    public function getNbBonneReponse()
    {
        return $this->nbBonneReponse;
    }

    /**
     * @param mixed $nbBonneReponse
     */
    public function setNbBonneReponse($nbBonneReponse): void
    {
        $this->nbBonneReponse = $nbBonneReponse;
    }
}
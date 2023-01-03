<?php

namespace Ez\Entity;

class Questionnaire
{
    private $idQuestionnaire=0;
    private $libelleQuestionnaire="";

    /**
     * @return mixed
     */
    public function getIdQuestionnaire()
    {
        return $this->idQuestionnaire;
    }

    /**
     * @param mixed $idQuestionnaire
     */
    public function setIdQuestionnaire($idQuestionnaire): void
    {
        $this->idQuestionnaire = $idQuestionnaire;
    }

    /**
     * @return mixed
     */
    public function getLibelleQuestionnaire()
    {
        return $this->libelleQuestionnaire;
    }

    /**
     * @param mixed $libelleQuestionnaire
     */
    public function setLibelleQuestionnaire($libelleQuestionnaire): void
    {
        $this->libelleQuestionnaire = $libelleQuestionnaire;
    }

}
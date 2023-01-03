<?php

namespace Ez\Entity;

class Questionquestionnaire
{
    private $idQuestionnaire;
    private $idQuestion;

    /**
     * @param $idQuestionnaire
     * @param $idQuestion
     */
    public function __construct($idQuestionnaire, $idQuestion)
    {
        $this->idQuestionnaire = $idQuestionnaire;
        $this->idQuestion = $idQuestion;
    }

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



}
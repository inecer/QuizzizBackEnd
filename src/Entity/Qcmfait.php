<?php

namespace Ez\Entity;

class Qcmfait
{
    private $idEtudiant;
    private $idQuestionnaire;
    private $dateFait;
    private $point;

    /**
     * @return mixed
     */
    public function getIdEtudiant()
    {
        return $this->idEtudiant;
    }

    /**
     * @param mixed $idEtudiant
     */
    public function setIdEtudiant($idEtudiant): void
    {
        $this->idEtudiant = $idEtudiant;
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
    public function getDateFait()
    {
        return $this->dateFait;
    }

    /**
     * @param mixed $dateFait
     */
    public function setDateFait($dateFait): void
    {
        $this->dateFait = $dateFait;
    }

    /**
     * @return mixed
     */
    public function getPoint()
    {
        return $this->point;
    }

    /**
     * @param mixed $point
     */
    public function setPoint($point): void
    {
        $this->point = $point;
    }



}
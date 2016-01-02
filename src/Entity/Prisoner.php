<?php

namespace PHPWeekly\Entity;

/**
 * Class Prisoner
 * @package challenge\Entity
 */
class Prisoner
{

    /**
     * @param string $name
     * @param string $discipline
     * @param $previousResponse
     */
    public function __construct($name = 'Buck', $discipline = 'php', $previousResponse = "")
    {
        if ( $previousResponse != 'confess' && $previousResponse != 'silent') {
            $previousResponse = 'silent';
        }

        $this->name = $name;
        $this->discipline = $discipline;
        $this->previousResponse = $previousResponse;
    }

    /**
     * @return string
     */
    public function getDiscipline()
    {
        return $this->discipline;
    }

    /**
     * @param string $discipline
     * @return Prisoner
     */
    public function setDiscipline($discipline)
    {
        $this->discipline = $discipline;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Prisoner
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getPreviousResponse()
    {
        return $this->previousResponse;
    }

    /**
     * @param string $previousResponse
     * @return Prisoner
     */
    public function setPreviousResponse($previousResponse)
    {
        $this->previousResponse = $previousResponse;
        return $this;
    }
    
}
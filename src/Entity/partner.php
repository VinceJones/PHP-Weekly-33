<?php

namespace Entity;

/**
 * Class Partner
 * @package challenge\Entity
 */
class Partner
{

    /**
     * @param string $name
     * @param string $discipline
     * @param $partnerPreviousResponse
     * @param $playerPreviousResponse
     */
    public function __construct($name = 'Buck', $discipline = 'php', $partnerPreviousResponse = "", $playerPreviousResponse = "")
    {
        $this->name = $name;
        $this->discipline = $discipline;
        $this->partnerPreviousResponse = $partnerPreviousResponse;
        $this->playerPreviousResponse = $playerPreviousResponse;
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
     * @return Partner
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
     * @return Partner
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getPartnerPreviousResponse()
    {
        return $this->partnerPreviousResponse;
    }

    /**
     * @param string $partnerPreviousResponse
     * @return Partner
     */
    public function setPartnerPreviousResponse($partnerPreviousResponse)
    {
        $this->partnerPreviousResponse = $partnerPreviousResponse;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlayerPreviousResponse()
    {
        return $this->playerPreviousResponse;
    }

    /**
     * @param string $playerPreviousResponse
     * @return Partner
     */
    public function setPlayerPreviousResponse($playerPreviousResponse)
    {
        $this->playerPreviousResponse = $playerPreviousResponse;
        return $this;
    }
}
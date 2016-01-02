<?php

namespace PHPWeekly\Factory;

use PHPWeekly\Entity\Prisoner;
use PHPWeekly\Service\Deliberator;
use PHPWeekly\Service\FileWhisperer;

/**
 * Class PrisonerFactory
 * @package PHPWeekly\Factory
 */
class PrisonerFactory
	{

	/**
	 * @param $arguments
     */
	public function __construct( $arguments )
	{
		$this->otherGuy = new Prisoner($arguments[1], $arguments[2], $arguments[3]);
		$this->me = new Prisoner("Vince", "php", $arguments[4]);

		$this->otherGuyFile = new FileWhisperer($this->otherGuy);
		$this->myFile = new FileWhisperer($this->me);

		$this->deliberator = new Deliberator($this->me, $this->otherGuy);
	}


	/**
	 * @return string
     */
	public function getAnswer()
	{
		$answer = $this->deliberator->getAnswer($this->myFile, $this->otherGuyFile);

		$this->otherGuyFile->writeFile($this->otherGuy);
		$this->myFile->writeFile($this->me);

		$scores = $this->deliberator->getScore($this->myFile, $this->otherGuyFile);

		return $answer;
	}
}
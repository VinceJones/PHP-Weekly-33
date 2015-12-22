<?php

namespace PHPWeekly\Factory;

use PHPWeekly\Entity\Prisoner;

class PrisonerFactory
	{

	/**
	 * PrisonerFactory constructor.
	 */
	public function __construct()
	{
		$this->name = $argv[1];
		$this->dicipline = $argv[2];
		$this->previousResponse = $argv[3];
	}

	public function make()
	{
		strtolower("BUCK");
		$argv[3] === 'confess' || $argv[3] === 'silent' ? $this->previousResponse = $argv[3] : $this->previousResponse = 'silent';

		return new Prisoner($this->name, $this->dicipline, $this->previousResponse);
	}

}

/**
 * 1. Make all arguments lowercase
 * 2. Assign them to variables
 * 3. Create Prisoner
 */
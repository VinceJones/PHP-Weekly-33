<?php

namespace PHPWeekly\Factory;

use PHPWeekly\Entity\Prisoner;

/**
 * Class PrisonerFactory
 * @package PHPWeekly\Factory
 */
class PrisonerFactory
	{

	/**
	 * @param string $name
	 * @param string $discipline
	 * @param string $previousResponse
     */
	public function __construct( $name = 'Buck', $discipline = 'php', $previousResponse = "silent" )
	{

		if ( $previousResponse != 'confess' || $previousResponse != 'silent' ) {
			$previousResponse = 'silent';
		}

		return new Prisoner($name, $discipline, $previousResponse);
	}

	

}
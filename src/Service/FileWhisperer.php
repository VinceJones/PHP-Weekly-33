<?php

namespace PHPWeekly\Service;

use PHPWeekly\Entity\Prisoner;

/**
 * Class FileWhisperer
 * @package PHPWeekly\Service
 */
class FileWhisperer {

	/**
	 * @param string $discipline
	 * @param string $name
	 */
	public function __construct( $discipline = '', $name = 'UncleBuck' )
	{
		if ( !file_exists("data/".$discipline."-".$name."txt") ) {
			$this->file = fopen( "data/" . $discipline . "-" . $name . "txt", "w" );
		}
	}

	/**
	 * @param \PHPWeekly\Entity\Prisoner $prisoner
	 *
	 * @return bool
	 */
	public function writeFile(Prisoner $prisoner)
	{

		$txt = $prisoner->getPartnerPreviousResponse().PHP_EOL;
		fwrite($this->file, $txt);
		fclose($this->file);
		return true;
	}

	/**
	 * @param \PHPWeekly\Entity\Prisoner $prisoner
	 *
	 * @return array
	 */
	public function readFile(Prisoner $prisoner)
	{
		return file($this->file);
	}
}
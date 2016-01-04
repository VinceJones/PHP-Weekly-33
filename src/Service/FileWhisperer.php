<?php

namespace PHPWeekly\Service;

use PHPWeekly\Entity\Prisoner;

/**
 * Class FileWhisperer
 * @package PHPWeekly\Service
 */
class FileWhisperer {


	/**
	 * @param Prisoner $prisoner
     */
	public function __construct( Prisoner $prisoner )
	{
		$this->fileName = "data/" .$prisoner->getDiscipline(). "-" . $prisoner->getName().".txt";

		if ( file_exists($this->fileName) ) {

			if ( file_exists("data/php-Vince.txt") ) {
				$file = file_get_contents("data/php-Vince.txt");
				$fileArray = explode(PHP_EOL, $file);
				if ( count($fileArray) > 99 ) {
					unlink("data/php-Vince.txt");
				}
			}
			return;
		}

		$this->file = fopen( $this->fileName, "w" );
	}

	/**
	 * @param \PHPWeekly\Entity\Prisoner $prisoner
	 *
	 * @return bool
	 */
	public function writeFile(Prisoner $prisoner)
	{
		$txt = $this->readFile();
		$txt .= strtolower($prisoner->getPreviousResponse()).PHP_EOL;
		file_put_contents($this->fileName, $txt);

		return;
	}


	/**
	 * @return string
     */
	public function readFile()
	{
		$file = file_get_contents($this->fileName);
		return $file;
	}

	/**
	 * @return array
     */
	public function fileArray()
	{
		return file($this->fileName);
	}

	/**
	 * @return array
     */
	public function explodeFile()
	{
		$file = $this->readFile();
		$answers = explode(PHP_EOL, $file);
		return $answers;

	}

	public function countFile()
	{
		$file = $this->explodeFile();
		return count($file);
	}
}
<?php
/**
 * File index.php
 *
 * @author Vince Jones <vjones@nerdery.com>
 */


use PHPWeekly\Entity\Prisoner;
use PHPWeekly\Service\Deliberator;
use PHPWeekly\Service\FileWhisperer;


require_once 'vendor/autoload.php';

$otherGuy= new Prisoner($argv[1], $argv[2], $argv[3]);
$me = new Prisoner("Vince", "php", $argv[4]);


$otherGuyFile = new FileWhisperer($otherGuy);
$myFile = new FileWhisperer($me);

$deliberator = new Deliberator($me, $otherGuy);
$answer = $deliberator->getAnswer($myFile, $otherGuyFile);

$otherGuyFile->writeFile($otherGuy);
$myFile->writeFile($me);

$scores = $deliberator->getScore($myFile, $otherGuyFile);

echo $answer.PHP_EOL;


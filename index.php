<?php
/**
 * File index.php
 *
 * @author Vince Jones <vjones@nerdery.com>
 */

use PHPWeekly\Factory\PrisonerFactory;

require_once 'vendor/autoload.php';

$prisonerFactory = new PrisonerFactory($argv);
$answer = $prisonerFactory->getAnswer();

echo $answer.PHP_EOL;
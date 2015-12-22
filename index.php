<?php
/**
 * File index.php
 *
 * @author Vince Jones <vjones@nerdery.com>
 */


use PHPWeekly\Entity\Prisoner;

require_once 'vendor/autoload.php';





$partner = new Partner($partnerName, $partnerDiscipline, $partnerPreviousResponse, $playerPreviousResponse);


echo $partner->getName().PHP_EOL;
echo $partner->getPartnerPreviousResponse().PHP_EOL;


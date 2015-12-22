<?php
/**
 * File index.php
 *
 * @author Vince Jones <vjones@nerdery.com>
 */


use PHPWeekly\Entity\Partner;

require_once 'vendor/autoload.php';


$partnerName = $argv[1];
$partnerDiscipline = $argv[2];
$argv[3] === 'confess' || $argv[3] === 'silent' ? $partnerPreviousResponse = $argv[3] : $partnerPreviousResponse = 'silent';
$argv[4] === 'confess' || $argv[4] === 'silent' ? $partnerPreviousResponse = $argv[4] : $partnerPreviousResponse = 'silent';


$partner = new Partner($partnerName, $partnerDiscipline, $partnerPreviousResponse, $playerPreviousResponse);


echo $partner->getName().PHP_EOL;
echo $partner->getPartnerPreviousResponse().PHP_EOL;


//// __contruct
//$myfile = fopen("data/".$partnerDiscipline."prisoner_responses.txt", "w") or die("Unable to open file!");
//$txt = $parnterName.PHP_EOL;
//fwrite($myfile, $txt);
//$txt = $partnerDiscipline;
//fwrite($myfile, $txt);
//
//// function addResponse
//
//
//fclose($myfile);

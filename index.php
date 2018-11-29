<?php

require_once('honeypot.php');
require_once('Filter.php);

$honeypot = new HoneyPot();

$ipAdress = $honeypot->ip;

$options = array(
    'ipv4' => true,
    'ipv6' => true,
    'private' => true,
    'reserved' => true,
);

if(Filter::IPValidate($ipAdress,$options)))
{
    $honeypot->writeFile();
    $honeypot->printPage();
} else {
    print "Noob com VPN";
}

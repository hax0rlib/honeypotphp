<?php

require_once('honeypot.php');
require_once("Filter.php");

$honeypot = new HoneyPot();

$ipAdress = $honeypot->this->ip;

$options = array(
    'ipv4' => true,
    'ipv6' => true,
    'private' => true,
    'reserved' => true,
);

if(var_dump(Filter::IPValidate($ipAdress,$options)) == TRUE)
{
    $honeypot->writeFile();
    $honeypot->printPage();
} else {
    print "Noob com VPN";
}



 ?>

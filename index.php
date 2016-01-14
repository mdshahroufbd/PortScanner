<?php
require_once 'scan.php';

$a = convertRange(75, 85);
foreach ($a as $port){
    //print $port."\n";
}

$scan = scan("google.com", $a);
var_dump($scan);
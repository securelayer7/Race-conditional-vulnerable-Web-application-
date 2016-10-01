<?php
$fil = fopen('amount.txt', 'w');
fwrite($fil, 10000);
fclose($fil);

ob_start();
$url = "./index.php";
header('Location: '.$url);
ob_end_flush();
die();
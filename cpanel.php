<?php
function start_donating()
{
    $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if (strpos($actual_link, 'donate') !== false)
    {
 
 
    }
    else
    {
        return;
    }
    $fil = fopen('amount.txt', 'r');
    $dat = fread($fil, filesize('amount.txt'));
 
    if ($dat< 5000)
    {
        echo "<br>";
        echo "Insufficient funds. for donating";
 
    }
    else
    {
 
        $new_money = $dat-5000;
        $bull = fopen('amount.txt', 'w');      
        sleep(3);
        fwrite($bull, $new_money);
        fclose($bull);
       
        $acc1 = fopen('account.txt', 'r');
        $dat = fread($acc1, filesize('account.txt'));
        $add_money =$dat."\n"."5000";
        $acc = fopen('account.txt', 'w');      
        fwrite($acc, $add_money);
        fclose($acc);
    }
}
 
if( $_GET["name"] || $_GET["pass"] )
{
    $name = $_GET["name"];
    $pass = $_GET["pass"];
   
    if (($name == "root" || $name == "ROOT") && $pass == "password")
    {
 
        echo "<h1><center>Race Condition Demo</center></h1>";
        echo "Welcome , ".$name;
        echo "<br>";
        echo "<br>";
        echo "<a href='./reset.php'>Reset balance";
        echo "<br>";
        echo "<br>";
        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $actual_link  = $actual_link . "&donate=true";
        echo "<a href='".$actual_link."'>Donate Rs 5k to XYZ Organization</a>";
        echo "<br>";
        echo "<a href='".$actual_link."'>Donate Rs 5k to Ishaq</a>";
 
        if (strpos($actual_link, 'donate') !== false)
        {
 
            start_donating();
 
        }
 
        $fil = fopen('amount.txt', 'r');
        $dat = fread($fil, filesize('amount.txt'));
        echo "<br>";
        echo "You have ".$dat." in your balance";
 
 
    }
    else if(($name == "ishaq" || $name == "ISHAQ") && $pass == "pass") {
    if(file_exists('account.txt') && file_exists('ishaq_account.txt')) {
        $account = fopen('account.txt', 'r');
           
        $x= fread($account, filesize('account.txt'));
 
        $account = fopen('account.txt', 'r');
           
        $y= fread($account, filesize('ishaq_account.txt'));
       
 $req=explode( '\n', $x );
 
foreach($req as $x){
 if (!isset($line)) {  $line =0; }
$y +=$line;
}
 
        echo "<br>";
        echo "You have ".$line." in your balance";
    } else {
        $acc = fopen('account.txt', 'w');      
        fwrite($acc, 0);
        fclose($acc);
        echo "You have 0 in your balance";
       
        $acc = fopen('ishaq_account.txt', 'w');      
        fwrite($acc, 0);
        fclose($acc);
    }
}
    else
    {
 
        echo "Username or password you entered is incorrect";
    }
 
 
}
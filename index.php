<?php
if( (isset($_GET["name"]) && !empty($_GET["name"])) || (isset($_GET["pass"]) && !empty($_GET["pass"]))) 
{
    $name = $_GET["name"];
    $pass = $_GET["pass"];
    if ((($name == "root" || $name == "ROOT") && $pass == "password") || (($name == "ishaq" || $name == "ISHAQ") && $pass == "pass")) {
        ob_start();
        $url = "./cpanel.php?name=".$name."&pass=".$pass;
        header('Location: '.$url);
        ob_end_flush();
        die();

}
    else 
    {
        echo "Username or password you entered is incorrect";
    }
    exit();
}
?>
<html>
<body>
<center>
    <h1>Race Condition Demo</h1>
    <br>

    <br>
<form action = "<?php $_PHP_SELF ?>" method = "GET">
    Username: <input type = "text" name = "name" />
    Password: <input type = "password" name = "pass" />
    <input type = "submit" />
</form>

    
</center>
</body>
</html>
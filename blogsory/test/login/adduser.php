<?php
error_reporting(E_ALL || ~E_NOTICE);
include("../php/coon.php");
$a=md5($_GET['password']);

$sql="INSERT INTO `users` ( `name`,`password`) VALUES ('$_GET[name]','$a')";
    if($coon->query($sql))
    {
        $b="ok";
        echo $b;
    }

?>

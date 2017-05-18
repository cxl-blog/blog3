<?php
/**
 * Created by PhpStorm.
 * User: YOGA
 * Date: 2017/5/16
 * Time: 13:50
 */
error_reporting(E_ALL || ~E_NOTICE);
include ("../php/coon.php");
include "../php/change.php";
$name=$_COOKIE['loadname'];
$sql="DELETE FROM `mood` WHERE name='$name'";
$coon->query($sql);
$body=str($_POST['body']);
$sql="INSERT INTO `mood` ( `name`, `body`) VALUES ('$_COOKIE[loadname]','$body')";
if($coon->query($sql))
    echo "ok";

?>
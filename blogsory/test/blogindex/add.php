<?php
/**
 * Created by PhpStorm.
 * User: YOGA
 * Date: 2017/4/22
 * Time: 14:57
 */
error_reporting(E_ALL || ~E_NOTICE);
include ("../php/coon.php");
include "../php/change.php";
//$body=str($_GET['body']);
$sql="INSERT INTO `blogtexts` ( `name`,`regdata`,`title`, `body`) VALUES ('$_GET[name]','$_GET[regdata]',
	   '$_GET[title]', '$_GET[body]')";
if($coon->query($sql))
    echo "ok";

?>
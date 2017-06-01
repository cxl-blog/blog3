<?php
/**
 * Created by PhpStorm.
 * User: YOGA
 * Date: 2017/4/24
 * Time: 16:33
 */
error_reporting(E_ALL || ~E_NOTICE);
include ("../php/coon.php");
$sql="INSERT INTO `comments` ( `uid`,`name`,`regdata`, `remark`) VALUES ('$_GET[id]','$_GET[name]',
	   '$_GET[regdata]', '$_GET[remark]')";
if($coon->query($sql))
    echo "ok";

?>
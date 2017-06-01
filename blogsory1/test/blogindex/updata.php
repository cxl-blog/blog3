<?php
/**
 * Created by PhpStorm.
 * User: YOGA
 * Date: 2017/4/17
 * Time: 19:24
 */
error_reporting(E_ALL || ~E_NOTICE);

include ("../php/coon.php");
$id=$_GET['id'];
$sql="UPDATE `blogtexts` SET `title`='$_GET[title]' , `regdata`='$_GET[regdata]',`body`='$_GET[body]' WHERE id='$id'";

if($coon->query($sql))
    echo "ok";
?>
<?php
/**
 * Created by PhpStorm.
 * User: YOGA
 * Date: 2017/5/16
 * Time: 15:26
 *///
error_reporting(E_ALL || ~E_NOTICE);
include ("../php/coon.php");
$name=$_COOKIE['loadname'];
$sql="select * from `mood` WHERE name='$name'";
$qurr=$coon->query($sql);

$row=$qurr->fetch_array(MYSQLI_ASSOC);

$response=$row['body'];
echo $response;
?>
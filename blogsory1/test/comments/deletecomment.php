<?php
/**
 * Created by PhpStorm.
 * User: YOGA
 * Date: 2017/4/28
 * Time: 10:33
 */
include "../php/coon.php";
$id=$_GET['id'];
$sql="DELETE FROM `comments`  WHERE id=$id";
if($coon->query($sql))
    // header('location: index.html');
    echo "ok";
?>
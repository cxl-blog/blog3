<?php
/**
 * Created by PhpStorm.
 * User: YOGA
 * Date: 2017/4/24
 * Time: 17:08
 */
error_reporting(E_ALL || ~E_NOTICE);
include ("../php/coon.php");
$id=$_GET['id'];
$sql  = "SELECT * FROM `comments` WHERE uid=$id";
$qurr=$coon->query($sql);
$response = array();
while ($row=$qurr->fetch_array(MYSQLI_ASSOC)) {


    $response[] = $row;
    //$response[]['password']=$row['password'];
}
echo json_encode($response, JSON_UNESCAPED_UNICODE);


?>
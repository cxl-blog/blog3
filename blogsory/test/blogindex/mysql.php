<?php
/**
 * Created by PhpStorm.
 * User: YOGA
 * Date: 2017/4/15
 * Time: 18:42
 */
error_reporting(E_ALL || ~E_NOTICE);
include ("../php/coon.php");
$name=$_COOKIE['loadname'];
$sql="select * from `blogtexts` WHERE name='$name'";
$qurr=mysqli_query($coon,$sql);
$response=array();
while ($row=mysqli_fetch_array($qurr,MYSQLI_ASSOC)) {

    $response[] = $row;

}
echo json_encode($response, JSON_UNESCAPED_UNICODE);
?>

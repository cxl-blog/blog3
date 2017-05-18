<?php
/**
 * Created by PhpStorm.
 * User: YOGA
 * Date: 2017/4/19
 * Time: 15:16
 */
error_reporting(E_ALL || ~E_NOTICE);
include("php/coon.php");
//file_get_contents('php://input');
//$n=$_GET['n'];
//session_start();
//$_SESSION['name']=$_GET['name'];
//$sql  = "SELECT * FROM `talks`";
$sql="SELECT * from `talks` where id = (SELECT max(id) FROM `talks`)";
$qurr=$coon->query($sql);
$response = array();
$rows=mysqli_num_rows($qurr);
//echo $rows;
//while($row=$qurr->fetch_array(MYSQLI_ASSOC))

    $row=$qurr->fetch_array(MYSQLI_ASSOC);

    $response[]= $row;
    //$response[]['password']=$row['password'];

echo json_encode($response, JSON_UNESCAPED_UNICODE);


//print_r($_SERVER);
?>
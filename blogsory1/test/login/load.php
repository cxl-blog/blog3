<?php
//$a=date('Y-m-d');
//echo $a;
error_reporting(E_ALL || ~E_NOTICE);
include("../php/coon.php");

if(isset($_GET['chick']))
{
    setcookie("name1",$_GET['loadname'],time()+60*60*24,"/");
    setcookie("password1",$_GET['password'],time()+60*60*24,"/");
}
setcookie("loadname",$_GET['loadname'],0,"/");
    $sql = "SELECT * FROM `users`";
    $qurr = $coon->query($sql);
    $response = array();
    while ($row = $qurr->fetch_array(MYSQLI_ASSOC)) {


        $response[] = $row;
    }
echo json_encode($response, JSON_UNESCAPED_UNICODE);

 
//print_r($_SERVER);

////////////////////////////////////////////////
?>

<?php
/**
 * Created by PhpStorm.
 * User: YOGA
 * Date: 2017/4/17
 * Time: 19:49
 */
error_reporting(E_ALL || ~E_NOTICE);
include ("../php/coon.php");
$id=$_GET['id'];
$sql="select * from `blogtexts` WHERE id=$id";
$qurr=$coon->query($sql);
$response=array();
$row=$qurr->fetch_array(MYSQLI_ASSOC);

    $response[]=$row;

echo json_encode($response, JSON_UNESCAPED_UNICODE);

/*include("sql.php");
$id=$_GET['id'];
//echo $id;
$sqlname="`blogtexts`";
$mysql=new mysql($id,$sqlname);
$mysql->mysql_show();
//echo $mysql->id;*/
?>
<?php
/**
 * Created by PhpStorm.
 * User: YOGA
 * Date: 2017/4/17
 * Time: 19:24
 */
error_reporting(E_ALL || ~E_NOTICE);
include("sql.php");
$sqlname="`blogtexts`";
$id=$_GET['id'];
$mysql=new mysql($id,$sqlname);
$mysql->mysql_updata();
?>
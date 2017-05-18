
<?php
/**
 * Created by PhpStorm.
 * User: YOGA
 * Date: 2017/4/17
 * Time: 20:09
 */
include("sql.php");
$id=$_GET['id'];
$sqlname="`blogtexts`";
$mysql=new mysql($id,$sqlname);
$mysql->mysql_delete();
?>
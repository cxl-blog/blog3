
<?php
/**
 * Created by PhpStorm.
 * User: YOGA
 * Date: 2017/4/18
 * Time: 18:23
 */
//header('Content-Type:text/html;charset=GBK');
error_reporting(E_ALL || ~E_NOTICE);
$name=$_GET['name'];
//$name=11;
//$date=date("Y-m-d");
/*$time = explode ( " ", microtime () );
$time = $time [1] . ($time [0] * 1000);
$time2 = explode ( ".", $time );
$time = $time2 [0];
$date=date("m/d H:i:s").(":".$time);
echo $date;
*/
//$date1=date("H:i:s");
//echo $date1;
//$body=222;
$date=$_GET['date'];
$body=$_GET['body'];
include ("php/coon.php");
//echo $name.$date.$body;
$n=$_GET['n'];
$sql="INSERT INTO `talks` ( `name`,`regdata`, `remark`) VALUES ('$name','$date', '$body')";
if($coon->query($sql))
{
    
    setcookie("n",$n);
}

//$response=$name.":".$body;
//echo $response;
//echo json_enco;
//echo json_encode($response, JSON_UNESCAPED_UNICODE);
?>
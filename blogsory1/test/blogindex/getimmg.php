<?php
/**
 * Created by PhpStorm.
 * User: YOGA
 * Date: 2017/5/19
 * Time: 11:01
 */
error_reporting(E_ALL || ~E_NOTICE);
$name=$_COOKIE['loadname'];
$dir    = "../uploadfiles/useruploadimg/".$name;
$files1 = scandir($dir);
//$files2 = scandir($dir);
$response=array();
//while ($files1)
$i=0;
$response=$files1;
//while ($files1[$i])
//print_r($response);
$res=array();
while ($response[$i])
{
    if(($response[$i]!=".")&&($response[$i]!="..")){
    //echo $response[$i].",";
        //$res[]="{";
        echo $response[$i]."。";

           // $res[]=$response[$i];
        //$res[]="}";
    }
    $i++;
}
echo $i-2;
//print_r($res)

//while ($response)
   // echo json_encode($res, JSON_UNESCAPED_UNICODE);
/*$i=0;
while ($files1[$i])
{
    //if($files1[$i]!=".")
    if($files1[$i]!="..")
    $response[]=$files1[$i];

    $i++;
}
//print_r($response);
//print_r($files2);
print_r($response);
*/
?>

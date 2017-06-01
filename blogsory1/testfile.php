<?php
/**
 * Created by PhpStorm.
 * User: YOGA
 * Date: 2017/5/18
 * Time: 18:59
 */
    header("Content-type:text/html;charset=utf-8");
    //要创建的多级目录
 /*   $path="userimg/ccl";
//判断目录存在否，存在给出提示，不存在则创建目录
if (is_dir($path)){
    echo "对不起！目录 " . $path . " 已经存在！";
}else{
    //第三个参数是“true”表示能创建多级目录，iconv防止中文目录乱码
    $res=mkdir(iconv("UTF-8", "GBK", $path),0777,true);
    if ($res){
        echo "目录 $path 创建成功";
    }else{
        echo "目录 $path 创建失败";
    }
}
*?
  
  */
print_r($_FILES);
?>
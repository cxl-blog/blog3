<?php
/**
 * Created by PhpStorm.
 * User: YOGA
 * Date: 2017/5/19
 * Time: 10:36
 */
//error_reporting(E_ALL || ~E_NOTICE);
header("Content-type:text/html;charset=utf-8");
$name=$_COOKIE['loadname'];
$path=getcwd()."\\useruploadimg\\".$name."\\";
//判断目录存在否，存在给出提示，不存在则创建目录
if (!is_dir($path)){

    //第三个参数是“true”表示能创建多级目录，iconv防止中文目录乱码
    mkdir(iconv("UTF-8", "GBK", $path),0777,true);
}
//print_r($_POST);
function makefilename()
{
    $filename=$_FILES['file']['name'];
    return $filename;

}
	$newfilename=makefilename();
	$newfile_dir=$path.$newfilename;
	if(file_exists($_FILES['file']['tmp_name']))
    {
        move_uploaded_file($_FILES['file']['tmp_name'], $newfile_dir);
        echo ("客户端文件：".$_FILES['file']['name']."<BR>");
        echo ("文件类型：".$_FILES['file']['type']."<BR>");
        echo ("文件大小：".$_FILES['file']['size']."<BR>");
        echo ("服务器临时文件名：".$_FILES['file']['tmp_name']."<BR>");
        echo ("上传后文件名：".$newfilename."<br>");
        ?>文件上传成功[<a href="upload.html">继续上传</a>
        <?php
    }
    else
    {
        echo  "error";

    }







?>
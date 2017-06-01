<?php
//error_reporting(E_ALL || ~E_NOTICE);
header("Content-type:text/html;charset=utf-8");
//要创建的多级目录
$path=getcwd()."\\useruploadimg/ccl\\";
//判断目录存在否，存在给出提示，不存在则创建目录
if (!is_dir($path)){

	//第三个参数是“true”表示能创建多级目录，iconv防止中文目录乱码
	$res=mkdir(iconv("UTF-8", "utf8", $path),0777,true);
}

function makefilename()
	{
		//$curtime=getdate();
		//$filename=$curtime['year'].$curtime['month'].$curtime['mday'].$_FILES['file1']['type'];
		$filename=$_FILES['file1']['name'];
		return $filename;

	}
	$newfilename=makefilename();
	$newfile_dir=$path.$newfilename;
	if(file_exists($_FILES['file1']['tmp_name']))
	{
		move_uploaded_file($_FILES['file1']['tmp_name'], $newfile_dir);
		echo ("客户端文件：".$_FILES['file1']['name']."<BR>");
		echo ("文件类型：".$_FILES['file1']['type']."<BR>");
		echo ("文件大小：".$_FILES['file1']['size']."<BR>");
		echo ("服务器临时文件名：".$_FILES['file1']['tmp_name']."<BR>");
		echo ("上传后文件名：".$newfilename."<br>");
		?>文件上传成功[<a href="upload.html">继续上传</a>
		<?php
	}
	else
	{
		echo  "error";

	}



?>



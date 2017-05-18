<?php
/**
 * Created by PhpStorm.
 * User: YOGA
 * Date: 2017/4/17
 * Time: 19:32
 */
//include ("sql.php");
$id=$_GET['id'];
//$sqlname="'blogtexts'";
//$mysql=new mysql($id,$sqlname);
//$mysql->mysql_selectid();
//while ($row=)
$date=date("Y-m-d");

$coon=mysqli_connect("localhost","root","","sql1") or die("链接失败");
mysqli_query($coon,"SET NAMES UTF8");
$sql="select * from blogtexts WHERE id=$id";
$result=mysqli_query($coon,$sql);
$row=mysqli_fetch_array($result);


?>
<html>
<form action="updata.php" method="get" name="form1">
    <p>id:<?php echo $id ?>
        <br>
        <input type="hidden" name="id" id="id"  value="<?php echo $id ?>"/>
        <input name="date" type="hidden" value="<?php echo $date ?>" />
        作者：<?php echo $row['name'] ?>
    </p>
    <p>修改时间：<?php echo $date ?>
    </p>
    <p>title：
        <label for="title"></label>
        <input type="text" name="title" id="title" value="<?php echo $row['title'] ?>" />
    </p>
    <p>body：
        <label for="body"></label>
        <textarea name="body" id="body" cols="45" rows="5"><?php echo $row['body'] ?></textarea>


    </p>
    <p>
        <input type="submit" name="submit1" id="submit1" value="更改" />
    </p>
</form>
</html>

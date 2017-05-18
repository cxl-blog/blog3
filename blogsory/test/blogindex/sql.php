<?php
/**
 * Created by PhpStorm.
 * User: YOGA
 * Date: 2017/4/17
 * Time: 18:48
 */
class mysql
{
    public $id;
    public $sqlname;
    function coon()
    {
        $coon=mysqli_connect("localhost","root","","sql1") or die("链接失败");
        $coon->query("SET NAMES UTF8");
    }
    function __construct($id,$sqlname)
    {
        $this->id=$id;
        $this->sqlname=$sqlname;
    }

    function mysql_select1()
    {
        include("../php/coon.php");
        //$coon=mysqli_connect("localhost","root","","sql1") or die("链接失败");
        //mysqli_query($coon,"SET NAMES UTF8");
        $sql="select * from $this->sqlname";
        $result=mysqli_query($coon,$sql);
        //$row=$qurr->fetch_array();
        $response=array();
        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
        {
            $response[]=$row;

        }
        echo json_encode($response, JSON_UNESCAPED_UNICODE);
    }
    function mysql_selectid()
    {

        $coon=mysqli_connect("localhost","root","","sql1") or die("链接失败");
        mysqli_query($coon,"SET NAMES UTF8");
        $sql="select * from $this->sqlname WHERE id=$this->id";
        $result=mysqli_query($coon,$sql);
        
    }
    function mysql_selectpage()
    {
        
    }
    function mysql_updata()
    {
        $coon=mysqli_connect("localhost","root","","sql1") or die("链接失败");
        mysqli_query($coon,"SET NAMES UTF8");
        $sql="UPDATE $this->sqlname SET `title`='$_GET[title]' , `regdata`='$_GET[regdata]',`body`='$_GET[body]' WHERE id=$this->id";
        if(mysqli_query($coon,$sql))
        {
            echo "ok";
            //header("location: index.html");
        }
        //$row=$qurr->fetch_array();

    }
    function mysql_delete()
    {
        $coon=mysqli_connect("localhost","root","","sql1") or die("链接失败");
        $coon->query("SET NAMES UTF8");
        $sql="DELETE FROM $this->sqlname  WHERE id=$this->id";
        if($coon->query($sql))
           // header('location: index.html');
        echo "ok";
    }
    function mysql_show()
    {

        $coon=mysqli_connect("localhost","root","","sql1") or die("链接失败");
        mysqli_query($coon,"SET NAMES UTF8");
        $sql="SELECT * FROM $this->sqlname  WHERE id=$this->id";
        $result=mysqli_query($coon,$sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                echo "<h1>id:".$this->id."</h1><br>";
                echo "name:".$row['name']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                echo "regdata:".$row['regdata']."<br>";
                echo "title:".$row['title']."<br>";
                echo "body:<h2>".$row['body']."</h2>";
            
        
    }
}
?>
/**
 * Created by YOGA on 2017/4/28.
 */
function getCookie(c_name)
{
    if (document.cookie.length>0)
    {
        c_start=document.cookie.indexOf(c_name + "=");
        if (c_start!=-1)
        {
            c_start=c_start + c_name.length+1;
            c_end=document.cookie.indexOf(";",c_start);
            if (c_end==-1)
                c_end=document.cookie.length;
            return decodeURIComponent(document.cookie.substring(c_start,c_end))
        }
    }
    return "";
}
function GetQueryString(name)//查找参数内容
{
    var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
    var r = window.location.search.substr(1).match(reg);
    if(r!=null)return decodeURIComponent(r[2]); return null;
}
function pagevlan( pagenum) {//分页
    page=GetQueryString("page");
    name=GetQueryString("name");
    if(page==null)
        page=1;
    if(page<=1)
        page=1;
    var page1=page;
    //var pagesize=1;
    //var page=1;
    offset=(page-1)*pagesize;
    //page++;
    //var pageid=page;
    var page_list=page-1;
    // var a=++page;
    var page_ne=++page1;
    var page_last=Math.ceil(pagenum/pagesize);
    var div=document.getElementById("div2");
    var tr=document.createElement("tr");
    var span1=document.createElement("td");
    var span2=document.createElement("td");
    var span3=document.createElement("td");
    var span4=document.createElement("td");

    div.appendChild(tr);
    tr.appendChild(span1);



    var f=">首页";
    var s=">上一页";
    var x=">下一页";
    var m=">末页";
    //onClick=\"send_request()\"onClick=\"send_request()\"
    var url = "<a  href=?id="+id+"page=1";
    var url1 = "<a  href=?id="+id+"&page=";
    //var url2 = "<a href=edit.php?id=";
    //div.append("<a  href=?page=1>首页</a>&nbsp;&nbsp;");
    span1.innerHTML="共有"+page_last+"页&nbsp;"+page+"/"+page_last+url+f+"</a>&nbsp;";
    if(page_list>=1) {
        tr.appendChild(span2);
        span2.innerHTML = url1 + page_list + s + "</a>&nbsp;";
    }
    //div.append("<a  href=?page="+page_list+">上一页</a>&nbsp;&nbsp;");
    if(page_ne<=page_last) {
        tr.appendChild(span3);
        span3.innerHTML = url1 + page_ne + x + "</a>&nbsp;";
    }
    //div.append("<a  href=?page="+page_next+">下一页</a>&nbsp;&nbsp;");
    //div.append("<a  href=?page="+page_last+">首页</a>&nbsp;&nbsp;")
    tr.appendChild(span4);
    span4.innerHTML = url1 + page_last + m + "</a>";


}
function strreplace(ment) {
    var reg=new RegExp("[\n\r]","g"); //创建正则RegExp对象
    var reg1= ment.replace(reg,"<br>");
    var reg2=new RegExp(" ","g");
    return reg1.replace(reg2,"&nbsp;");


}
function delCookie(name)///清除cookie
{
    var exp = new Date();
    exp.setTime(exp.getTime() - 1);
    var cval=getCookie(name);
    if(cval!=null)
        document.cookie= name + "="+cval+";expires="+exp.toGMTString();
}
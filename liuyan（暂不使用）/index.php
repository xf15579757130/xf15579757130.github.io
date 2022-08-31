<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
<title>留言_谢飞个人博客</title>
<meta name="keywords" content="" />
<meta name="description" content="说点儿吧" />
<link href="../css/base.css" rel="stylesheet">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<script src="../js/jquery.js"></script>
<script src="../js/nav.js"></script>
<style>
    body {
        margin: 0;
        background: #eee;
    }

    .background {
        margin: 0 auto;
        max-width: 800px;
        min-width: 320px;
        padding-bottom: 0.1px;
    }

    .top {
        text-align: center;
        background: #00A600;
        color: #FFFFFF;
        height: 56px;
        width: auto;
        line-height: 56px;
        font-size: 17px;
        padding-left: 10px;
        box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.2);
        position: fixed;
    }

    .list {
        padding-top: 20px;
        padding-bottom: 0px;
    }

    .card {
        box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.2);
        background: #fff;
        margin: 10px;
        padding: 10px;
    }

    .list_title {
   
        color: #000;
        font-size: 15px;

    }
    
    .list_time {
      color: #999;
        float: right;
        text-align: right;
        font-size: 1em;
       
    }

    .list_content {
        text-indent:2em;
        font-size: 1em;
        margin: 5px;
        color: #333;
        word-wrap: break-word;
        word-break: break-all;
    }


    .write {

        width: 50px;
        height: 50px;
        background: #e01109;
        text-align: center;
        line-height: 55px;
        border-radius: 50%;
        color: #fff;
        font-size: 1.0em;
        box-shadow: 1px 3px 5px rgba(0, 0, 0, 0.3);
        position: fixed;
        bottom: 3%;
        right: 33.6%;
     
    }
    @media only screen and (max-width: 1080px) {


.write {
    
        width: 100%;
        height: 30px;
        background: #00A600;
        text-align: center;
        line-height: 30px;
        border-radius:0%;
        color: #fff;
        font-size: 1.0em;
        box-shadow: 1px 3px 5px rgba(0, 0, 0, 0.3);
        position: fixed;
        bottom: 3.8%;
        right: 0%;
     
    }

</style>
<body>
<header>

  <div class="touxiang"><i><img src="../images/xiefei.png" alt="谢飞"></i>
    <h2>谢飞个人博客</h2>
    <p>一个爱好游戏、前端代码的90后站长。</p>
  </div>
  <p class="guanzhu">关注我<img src="../images/wx.png" alt="谢飞个人微信号：xf15579757130" class="weixin"></p>
  <!--导航栏-begin--> 
  <nav >
    <ul>
 <li><a href="../index.html">网站首页</a></li>
 <li><a href="../bokeriji/bokeriji.html">博客日记</a></li>
 <li><a href="../suiyansuiyu/suiyansuiyu.html">碎言碎语</a></li>
 <li><a href="../bokedaohang/bokedaohang.html">博客导航</a></li>
 <li><a href="../wodexiangce/wodexiangce.html">我的相册</a></li>
 <li><a href="../shijianzhou/shijianzhou.html">时间轴</a></li>
 <li><a href="#">游戏</a></li>
 <li><a href="../jitariji/jitariji.html">吉他日记</a></li>
 <li><a href="#">绘画学习</a></li>
<li><a href="../htmlstudy/htmlstudy.html">html学习</a></li>
 <li><a href="../guanyubozhu/guanyubozhu.html">关于博主</a></li>
 <li><a href="../liuyan/index.php">留言</a></li>

    </ul>
  </nav>

   <!--导航栏-end--> 
</header>
<!--header end-->
<main>
  <p class="weizhi">您现在的位置是：<a href="../index.html">首页</a>&nbsp;>&nbsp;<a href="index.php">留言</a></p>
  <article> 
  
  <div class="container">
 
     

      <div class="pinglun_box">
        <h2>网友留言</h2>
<!-- 评论 开始 -->
<div class="background">
    <!--聊天列表-->
    <div class="list">
        <?php
        //聊天路径
        $file = 'feedback.txt';

        //判断是否存在
        if (!is_file($file)) {

            echo '<div align="center">还没有聊天内容呢！</div>';

        } else {
            //读取文件
            $message = file_get_contents($file);

            //转化为数组
            $pieces = explode("【", $message);
            $arrlength = count($pieces);

            for ($x = 1; $x < $arrlength; $x++) {

                $data = $pieces[$x];

                //截取名字
                $title = strstr($data, '】', true);

                //截取内容
                $content = strstr(strstr($data, "《"), "》", true);
                
                //截取头像
                $tx = strstr(strstr($data, "{"), "}", true);

                //截取聊天时间
                $time = strstr(strstr($data, "["), "]", true);

                $tx = str_replace("", "", $tx);

                $content = str_replace("《", "", $content);

                $time = str_replace("【", "", $time);

                //输出内容
                echo '
            <div class="card">
            <div class="list_title">'.nl2br(htmlentities($title,ENT_QUOTES,"UTF-8")).'       <div class="list_time">'.$time.']</div></div>
            <div class="list_content">'.nl2br(htmlentities($content,ENT_QUOTES,"UTF-8")).'  </div>
           
             <hr style="height:0px;border:none;border-top:1px solid #161823;" />  
        
              <hr style="height:0px;border:none;border-top:1px solid #161823;" /> 
            </div>';

            }
        }
        ?>
    </div>
    

    <!--x悬浮按钮-->
      
        <a href="write.html" target="_blank">
        <div class="write">
            <div>留言</div>
        </div>
    </a>


</div>
<!-- 评论 结束 -->
      </div>
    </div> 
    
  </article>
  <!--article end-->
  
  <aside>
     <!--搜索框-begin--> 
<script>
var DOM = (document.getElementById) ? 1 : 0;

 var NS4 = (document.layers) ? 1 : 0;

 var IE4 = 0; if (document.all) {      IE4 = 1;      DOM = 0; }
var win = window;    

var n    = 0;
function findIt() {     

if (document.getElementById("searchstr").value != "")         

findInPage(document.getElementById("searchstr").value); 

}

function findInPage(str) {   

 var txt, i, found;
    if (str == "")   

      return false;
    if (DOM)     {       

  win.find(str, false, true);     

    return true;   

 }
    if (NS4) {     

    if (!win.find(str))   

          while(win.find(str, false, true))             

    n++;         

else         

    n++;
         if (n == 0)       

      alert("未找到指定内容.");   

 }
    if (IE4) {       

  txt = win.document.body.createTextRange();
         for (i = 0; i <= n && (found = txt.findText(str)) != false; i++) {  

            txt.moveStart("character", 1);         

    txt.moveEnd("textedit");       

  }
    if (found) {     

    txt.moveStart("character", -1);  

        txt.findText(str);       

  txt.select();         

txt.scrollIntoView();     

    n++;   

 }     else {     

    if (n > 0) {  

            n = 0;           

  findInPage(str);     

    }          else   

          alert("未找到指定内容.");   

      }   

 }
    return false;

 } // --> </script>
    <div class="search">
  <input type="text" id="searchstr" name="searchstr" class="textbox" > <input type="button" value="搜索" onclick="javascript:findIt();" class="sbttn">  
</div>
  <!--搜索框-end--> 
   
    <div class="tagsclous">
      <h2 class="aside_title">标签云</h2>
      <ul>
<a href="e/tags/~tagname=女程序员&tempid=1.html" target="_blank">女程序员</a> <a href="http://mood.qingqingblog.com/e/tags/?tagname=%E4%BA%92%E8%81%94%E7%BD%91&tempid=1" target="_blank">互联网</a> <a href="e/tags/~tagname=自由&tempid=1.html" target="_blank">自由</a> <a href="e/tags/~tagname=底气&tempid=1.html" target="_blank">底气</a> <a href="e/tags/~tagname=忙碌生活&tempid=1.html" target="_blank">忙碌生活</a> <a href="e/tags/~tagname=建站流程&tempid=1.html" target="_blank">建站流程</a> <a href="e/tags/~tagname=个人网站&tempid=1.html" target="_blank">个人网站</a> <a href="e/tags/~tagname=建站初衷&tempid=1.html" target="_blank">建站初衷</a> <a href="e/tags/~tagname=个人博客&tempid=1.html" target="_blank">个人博客</a> <a href="e/tags/~tagname=草根站长&tempid=1.html" target="_blank">草根站长</a> <a href="e/tags/~tagname=618活动&tempid=1.html" target="_blank">618活动</a> <a href="e/tags/~tagname=心得&tempid=1.html" target="_blank">心得</a> <a href="e/tags/~tagname=感受&tempid=1.html" target="_blank">感受</a> <a href="e/tags/~tagname=直播&tempid=1.html" target="_blank">直播</a> <a href="http://mood.qingqingblog.com/e/tags/?tagname=%E9%98%BF%E9%87%8C%E4%BA%91&tempid=1" target="_blank">阿里云</a>    </ul>
 
        
    </div>

  </aside>
  <!--aside end--> 
</main>

<footer>
  <p> © 2021-2022 xiefeiblog 版权所有：谢飞个人博客 </p>
  <p><span><a href="sitamap.xml" target="_blank"></a></span><span>备案号：<a href="http://beian.miit.gov.cn">粤ICP备2021120190</a></span><span></span></p>
  <p></p>
</footer
<!--footer end-->

</body>
</html>



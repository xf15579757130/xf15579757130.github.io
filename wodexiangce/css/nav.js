// JavaScript Document

$(document).ready(function(){
 //除了首页外当前URL对当前栏目高亮突出显示
    $("nav li a:not(:first)").each(function(){
        $this = $(this);
        if($this[0].href==String(window.location)){
            $this.parent().addClass("current");
        }
    });
//当前URL对当前栏目高亮突出显示
    $("nav li a").each(function(){
        $this = $(this);
        if($this[0].href==String(window.location)){
            $this.parent().addClass("current");
        }
    });

});




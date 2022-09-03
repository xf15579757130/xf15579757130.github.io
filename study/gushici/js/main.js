// JavaScript Document

$(document).ready(function () {	

 //nav 		
    var obj=null;
    var As=document.getElementById('starlist').getElementsByTagName('a');
    obj = As[0];
    for(i=1;i<As.length;i++){if(window.location.href.indexOf(As[i].href)>=0)
    obj=As[i];}
    obj.id='selected';


	$("#mnavh").click(function(){
    $("#starlist").toggle();
	$("#mnavh").toggleClass("open");
	});

  
	
});

	
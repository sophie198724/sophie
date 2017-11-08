/*$(".content .row .box").eq(0).click(function(){
	$(".content .row .box").eq(4).removeClass("after").css("background-color","#6cc9f2")
	$(".content-box>ul").eq(3).addClass("hide")
	$(this).css("background-color","#0082ce")
	$(this).addClass("after").siblings().removeClass("after").css("background-color","#6cc9f2")
	$(".content-box>ul").eq(2).removeClass("hide").siblings().addClass("hide")
})

$(".content .row .box").eq(1).click(function(){
	$(".content .row .box").eq(4).removeClass("after").css("background-color","#6cc9f2")
	$(".content-box>ul").eq(3).addClass("hide")
	$(this).css("background-color","#0082ce")
	$(this).addClass("after").siblings().removeClass("after").css("background-color","#6cc9f2")
	$(".content-box>ul").eq(0).removeClass("hide").siblings().addClass("hide")
})

$(".content .row .box").eq(2).click(function(){
	$(".content .row .box").eq(4).removeClass("after").css("background-color","#6cc9f2")
	$(".content-box>ul").eq(3).addClass("hide")
	$(this).css("background-color","#0082ce")
	$(this).addClass("after").siblings().removeClass("after").css("background-color","#6cc9f2")
	$(".content-box>ul").eq(1).removeClass("hide").siblings().addClass("hide")
})

$(".content .row .box").eq(3).click(function(){
	$(".content .row .box").eq(0).removeClass("after").css("background-color","#6cc9f2")
	$(".content-box>ul").eq(0).addClass("hide")
	$(".content .row .box").eq(1).removeClass("after").css("background-color","#6cc9f2")
	$(".content-box>ul").eq(1).addClass("hide")
	$(".content .row .box").eq(2).removeClass("after").css("background-color","#6cc9f2")
	$(".content-box>ul").eq(2).addClass("hide")
	$(this).css("background-color","#0082ce").siblings().css("background-color","#6cc9f2")
	$(".content .row .box").eq(1).removeClass("after")
	$(".content .row .box").eq(2).removeClass("after")
	$(".content .row .box").eq(0).removeClass("after")
	$(".content .row .box").eq(4).removeClass("after")
	$(".content-box>ul").addClass("hide")
})

$(".content .row .box").eq(4).click(function(){
	$(".content .row .box").eq(0).removeClass("after").css("background-color","#6cc9f2")
	$(".content-box>ul").eq(0).addClass("hide")
	$(".content .row .box").eq(1).removeClass("after").css("background-color","#6cc9f2")
	$(".content-box>ul").eq(1).addClass("hide")
	$(".content .row .box").eq(2).removeClass("after").css("background-color","#6cc9f2")
	$(".content-box>ul").eq(2).addClass("hide")
	$(this).css("background-color","#0082ce")
	$(this).addClass("after").siblings().removeClass("after").css("background-color","#6cc9f2")
	$(".content-box>ul").eq(3).removeClass("hide").siblings().addClass("hide")
})

$(".content .row .box").eq(5).click(function(){
	$(".content .row .box").eq(0).removeClass("after").css("background-color","#6cc9f2")
	$(".content-box>ul").eq(0).addClass("hide")
	$(".content .row .box").eq(1).removeClass("after").css("background-color","#6cc9f2")
	$(".content-box>ul").eq(1).addClass("hide")
	$(".content .row .box").eq(2).removeClass("after").css("background-color","#6cc9f2")
	$(".content-box>ul").eq(2).addClass("hide")
	$(this).css("background-color","#0082ce").siblings().css("background-color","#6cc9f2")
	$(".content .row .box").eq(1).removeClass("after")
	$(".content .row .box").eq(2).removeClass("after")
	$(".content .row .box").eq(0).removeClass("after")
	$(".content .row .box").eq(4).removeClass("after")
	$(".content-box>ul").addClass("hide")
})



$(".content .row ").click(function(){
$(this).siblings().children().css("background-color","#6cc9f2")
$(".content-box>ul").css("background-color","white")
})

$(".content .content-box>ul").eq(0).click(function(){
	$(".content .row .box").eq(1).css("background-color","#0082ce")
})
$(".content .content-box>ul").eq(1).click(function(){
	$(".content .row .box").eq(2).css("background-color","#0082ce")
})

*/



$(".content .content-box>ul>li>span").click(function(){
	$(this).prev().slideToggle()
	$(this).parent().siblings().find("ul").slideUp()
	$(this).parent().siblings().find("span").text("+").css("transform","rotate(0deg)")
	if($(this).text()=="+"){
		$(this).text("-").css("transform","rotate(180deg)")
	}else{
		$(this).text("+").css("transform","rotate(0deg)")
	}
	
})


//var imgList=['bannar.png','bannar.png','bannar.png','bannar.png'];
////图片轮播
//setInterval(bannar,4000);
//var index=1;
//function bannar(){
//	$(".bannar img").attr("src","img/"+imgList[index++]);
//	if(index==imgList.length){
//		index=0
//	}
//}
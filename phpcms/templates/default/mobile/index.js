

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
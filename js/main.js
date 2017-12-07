$(document).ready(function(){
	
	$(document).scroll(function(){
		var detect_test = $("#test").offset().top;
		var scroll_position = $(this).scrollTop();
		if(scroll_position>detect_test){
			$(".navbar-default").css("background","rgba(52, 73, 94,1.0)");

			$("li").hover(function(){
		        $(this).css("background", "rgba(44, 62, 80,1.0) ");
		        }, function(){
		        $(this).css("background", "transparent ");
   			 });

			
		}
		else{
			$(".navbar-default").css("background","transparent ");
			$(".navbar-default").css("transition","all .45s ease-in");
			
			

			$("li").hover(function(){
		        $(this).css("background", "transparent ");
		        }, function(){
		        $(this).css("background", "transparent ");
   			 });
			
		}
	});

});
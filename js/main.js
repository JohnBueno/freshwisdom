$('document').ready(function(){

	$('.menu li.menu-item').hover(
		function(){
			
			if(!$(this).hasClass('current_page_item') && $(this).find('.sub-menu').length == 0 && !$(this).parent().hasClass('sub-menu')){
				$(this).stop(true, false).animate({'height': '30px'}, 150);
			}

		},
		function(){

			if(!$(this).hasClass('current_page_item') && $(this).find('.sub-menu').length == 0 && !$(this).parent().hasClass('sub-menu')){
				$(this).stop(true, false).animate({'height': '26px'}, 150);
			}

		}
	);

	
	//$('.navigation ul.dropdown a').css('opacity', 0);
	
	$('.navigation li').hover(
		function(){
		
			$(this).find('ul.sub-menu').stop(true, false).slideDown(150);
		
		},
		function(){
		
			$(this).find('ul.sub-menu').stop(true, false).slideUp(150);
			
		}
	);
	
	$('#gen-y').click(function(){
		$('#recession').slideDown();
		$('#push-up').animate({'top':'-30px'});	
	});
	
	$('#recession').click(function(){
		$('#growth').slideDown();
		$('#push-up').animate({'top':'-60px'});		
	});
	
	$(".fancybox").fancybox(); 
});
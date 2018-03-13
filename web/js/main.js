$(document).ready(function(){
	$('.bxslider').bxSlider({
		mode: 'fade',
		pagerType:'short',
		pagerShortSeparator:' / ',
	});
	$('.bxslider_recommendations').bxSlider({
		mode: 'fade',
		pagerType:'short',
		pagerShortSeparator:' / ',
	});
	$('.bxslider_simpleToComplex').bxSlider({
		slideWidth: 300,
		minSlides: 2,
		maxSlides: 3,
		slideMargin: 20,
		moveSlides: 1,
		pager:false,
	});
	$('.bx_buildingInfo').bxSlider({
		mode: 'fade',
		pagerType:'short',
		pagerShortSeparator:' / ',
	});
	
	// Выбор вида здания
	if ($(".tabs_li").length > 1){
		$(".tabs_li").each(function (i) {
			$(".tabs_li:eq("+i+")").click(function(){
				var tab_id=i+1;
				$(".tabs_li").removeClass("active");
				$(this).addClass("active");
				$(".buildingInfo_block_content .tab").stop(false,false).hide();
				$("#tab"+tab_id).stop(false,false).show();
				
				return false;
			})
		});
	}
	
	// Выбор характеристик 
	if ($(".characteristicsSection_tabs_li").length > 1){
		$(".characteristicsSection_tabs_li").each(function (i) {
			$(".characteristicsSection_tabs_li:eq("+i+")").click(function(){
				var tab_id=i+1;
				$(".characteristicsSection_tabs_li").removeClass("active");
				$(this).addClass("active");
				$(".characteristicsSection_content .characteristicsSection_tab").stop(false,false).hide();
				$("#characteristicsSection_tab"+tab_id).stop(false,false).show();
				
				return false;
			})
		});
	}
	
	// Маска для телефона 
	if($('.inputTel').length > 0){ 
		$(".inputTel").mask("+7 (999)-999-99-99",{placeholder:"_"});
	}
	
	$('a.productPage_navTitle').click(function(){
		$(this).parent("li").toggleClass( "open" );
		var link = $(this).siblings(".productPage_subMenu")
		if(link.hasClass("open")){
			link.stop().slideUp(500);
			link.removeClass("open");
		}else{
			link.stop().slideDown(500);
			link.addClass("open");
		}
	});
	
	// Скроллбар
	if($('.privacyPolicyBlock').length > 0){ 
		$(".privacyPolicyBlock").mCustomScrollbar({
			axis:"yx", 
			theme:"light",
		});
	}
	
	
	// Формы
	if (document.getElementById('privacyPolicy')){
		var commonDialog = new DialogFx(document.getElementById('privacyPolicy'));
		$(".privacyPolicy-trigger").click(commonDialog.toggle.bind(commonDialog));
	}
	if (document.getElementById('form_requestCall')){
		var commonDialog = new DialogFx(document.getElementById('form_requestCall'));
		$(".requestCall-trigger").click(commonDialog.toggle.bind(commonDialog));
	}
	if (document.getElementById('form_application')){
		var commonDialog = new DialogFx(document.getElementById('form_application'));
		$(".application-trigger").click(commonDialog.toggle.bind(commonDialog));
	}
	$(".dialog__content").click(function(e) {
		e.stopPropagation();
	});
});
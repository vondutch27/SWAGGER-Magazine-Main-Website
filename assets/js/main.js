$(window).load(function(){
	adjustHeights();
});

//Mobile Menu Starts
var ww = document.body.clientWidth;

$(document).ready(function() {

	$(".mainMenu ul li a").each(function() {
		if ($(this).next().length > 0) {
			$(this).addClass("parent");
		};
	})
	
	$(".hamburger-menu").click(function(e) {
		e.preventDefault();
		$(this).toggleClass("hamburger-menu-active");
		$(".mainMenu").slideToggle('fast');
		$(".bar").toggleClass("animate");
	});
	adjustMenu();
})

$(window).bind('resize orientationchange', function() {
	ww = document.body.clientWidth;
	adjustMenu();
	adjustHeights();
});

var adjustMenu = function() {
	if (ww < 1281) {
		$(".hamburger-menu").css("display", "block");
		if (!$(".hamburger-menu").hasClass("active")) {
			$(".mainMenu").hide();
		} else {
			$(".mainMenu").show();
		}
		$(".mainMenu ul li").unbind('mouseenter mouseleave');
		$(".mainMenu ul li a.parent").unbind('click').bind('click', function(e) {
			// must be attached to anchor element to prevent bubbling
			e.preventDefault();
			$(this).parent("li").toggleClass("hover");
		});
	} 
	else if (ww >= 1281) {
		$(".hamburger-menu").css("display", "none");
		$(".mainMenu").show();
		$(".mainMenu ul li").removeClass("hover");
		$(".mainMenu ul li a").unbind('click');
		$(".mainMenu ul li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
		 	// must be attached to li so that mouseleave is not triggered when hover over submenu
		 	$(this).toggleClass('hover');
		 });
	}

	var pageHeaderHeight = $(".site-header").outerHeight();
	// $(".fullWidthContainer").css('margin-top', pageHeaderHeight);
}

var adjustHeights = function() {
	if (ww > 961) {
		// var topSidebarHeight = $(".topSidebar").height();
		// $(".topBanner").css('min-height', topSidebarHeight);

		var windowHeight = $(window).height();
		var headerHeight = $(".site-header").outerHeight();

		var bannerHeight = windowHeight - headerHeight;

		var sideBlockHeight = bannerHeight/3;

		$(".topBanner").css('height', bannerHeight);
		$(".topSidebar .postBlock").css('height', sideBlockHeight);
        $(".topSidebar .latestPosts").css('height', sideBlockHeight*2);
		

		var midPostBlockHeight = $(".midBlock .postList .postBlock").height();
		$(".midBlock .rightColumn .kingSwag").css('min-height', midPostBlockHeight);
		$(".midBlock .postList .postBlock").css('min-height', midPostBlockHeight);

		// var midPostHeaderHeight = $(".midBlock .postList .postBlock header").height();
		// $(".midBlock .postList .postBlock header").css('min-height', midPostHeaderHeight);

		var catBlockHeight = $(".catBlock .articlesList").outerHeight();
		$(".catBlock .featuredAricle").css('height', catBlockHeight);
	}
}

//scroll function
// $(window).scroll(function () {
// 	if ($("header.site-header").offset().top > 0) {
// 		$("header.site-header").addClass("sticky")
// 	} else {
// 		$("header.site-header").removeClass("sticky")
// 	}
// });
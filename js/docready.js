$(document).ready(function() {
		$(".fancybox").fancybox({
			maxWidth	: 670,
			maxHeight	: 240,
			width		: '70%',
			height		: '70%',
			autoSize	: false,
		    helpers : {
		        overlay : {
		            css : {
		                'background' : 'rgba(60, 44, 50, 0.95)'
		            }
		        }
		    }
			
		});
		$(".viewfancybox").fancybox({
			maxWidth	: 670,
			maxHeight	: 700,
			width		: '70%',
			height		: '70%',
			autoSize	: false,
		    helpers : {
		        overlay : {
		            css : {
		                'background' : 'rgba(60, 44, 50, 0.95)'
		            }
		        }
		    }
			});
		$( "div#open" ).click(function() {
		    $( "div.nav_wrap" ).toggle( "blind",500 );
		});
	});
(function ($) {
    $(function() {
	
		function init() {
			var $container = $('#ip-container'),
				$header   = $container.find('.preloader');
			
			$container.addClass('loading');	
			
			
			$(window).on('load', function () {
				$container.removeClass('loading').addClass('loaded');	
				$('body').addClass('layout-switch');
			});
		}

		init();

    });
}(jQuery));

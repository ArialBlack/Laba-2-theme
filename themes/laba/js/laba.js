(function ($) {
    $(function() {

        function getURLParameters(url) {

            var result = {};
            var searchIndex = url.indexOf("?");

            if (searchIndex == -1 ) return result;
            var sPageURL = url.substring(searchIndex +1);
            var sURLVariables = sPageURL.split('&');

            for (var i = 0; i < sURLVariables.length; i++)
            {
                var sParameterName = sURLVariables[i].split('=');
                result[sParameterName[0]] = sParameterName[1];
            }

            return result;
        }

        function addBodyClasses() {
            var url = jQuery(location).attr('href');
            var params = getURLParameters(url);


            var paramsArray = $.map(params, function(value, index) {
                return [value];
            });

            for (var i = 0; i < paramsArray.length; i++) {
                $('body').addClass('param-' + paramsArray[i]);
            }

        }

        function _setCover(selector, action) {
            var $container = $(selector),
                h = $( window ).height();
            $container.css(action, h + 'px');
        }

        function setCovers() {
            _setCover('#cd-intro', 'height');
            _setCover('.cfw', 'height');
            _setCover('.cd-content', 'top');
        }

        function shineTitles() {
            var shines = "";
            var shine = [];
            shines = document.getElementsByClassName("shine-title");

            for (var i = 0; i < shines.length; i++) {
                shine[i] =  new Shine(shines[i]);
                shine[i].config.numSteps = 48;
                shine[i].config.opacity = 1;
                shine[i].config.opacityPow = 8;
                shine[i].config.offset = 0.15;
                shine[i].config.offsetPow = 0.3;
                shine[i].config.blur = 0;
                shine[i].config.blurPow = 0;
                shine[i].config.shadowRGB = new shinejs.Color(17, 17, 17);
                //https://github.com/bigspaceship/shine.js

                shine[i].draw();
            }

            window.addEventListener('mousemove', function(event) {
                for (var i = 0; i < shines.length; i++) {
                    shine[i].light.position.x = event.clientX;
                    shine[i].light.position.y = event.clientY;
                    shine[i].draw();
                }
            }, false);
        }

        $( document ).ready(function() {
            shineTitles();
            setCovers();
            addBodyClasses();
        });

        $( window ).resize(function() {
            setCovers();
        });

        $(document).on('infiniteScrollComplete', function(event, content) {
            _setCover('.cfw', 'height');

            /*$oldShines = $('.shine-title');
            $oldShines.find('.shine-word, .shine-mask').remove();

            $oldShines.each(function() {
                $(this).text($(this).data('text'));
            });*/

            shineTitles();
        });

        $(document).on( "mouseenter", ".link-2-work", function() {
            $(this).parents('.cfw').addClass('hovered');
        });

        $(document).on( "mouseleave", ".link-2-work", function() {
            $(this).parents('.cfw').removeClass('hovered');
        });

    });
}(jQuery));

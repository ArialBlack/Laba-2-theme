(function ($) {
    $(function() {

        function _setCover(selector, action) {
            var $container = $(selector),
                h = $( window ).height();
            $container.css(action, h + 'px');
        }

        function setCovers() {
            _setCover('#cd-intro', 'height');
            _setCover('.cd-content', 'margin-top');
        }

        function shineTitles() {
            var shines = document.getElementsByClassName("shine-title");
            var shine = [];
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
        });

        $( window ).resize(function() {
            setCovers();
        });

    });
}(jQuery));

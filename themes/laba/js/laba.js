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
                shine[i].config.opacity = 1;
                shine[i].config.blur = 0;
                shine[i].config.blurPow = 0;
                shine[i].config.opacityPow = 0.3;
                shine[i].config.offset = 0.07;
                shine[i].config.offsetPow = 2.7;
                shine[i].config.numSteps = 64;
                shine[i].config.shadowRGB = new shinejs.Color(150, 150, 150);
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

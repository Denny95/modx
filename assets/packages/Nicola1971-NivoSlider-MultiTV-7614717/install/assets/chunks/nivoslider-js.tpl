/**
 * nivoslider-js
 *
 * include js for nivoslider multitv
 *
 * @category	chunk
 * @version 	2.1
 * @author      tattoocms.it
 * @license 	http://www.gnu.org/copyleft/gpl.html GNU Public License (GPL)
 * @internal	@modx_category MultiTV add-ons
 * @internal    @installset base
 * @internal    @overwrite false
 */

<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> -->
    <script type="text/javascript" src="/assets/templates/common/js/nivoslider/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
   (function($) {
$('#slider').nivoSlider({
    slices: 15,                     // For slice animations
    boxCols: 8,                     // For box animations
    boxRows: 4,                     // For box animations
    animSpeed: 500,                 // Slide transition speed
    pauseTime: 3000,                // How long each slide will show
    startSlide: 0,                  // Set starting Slide (0 index)
    directionNav: true,             // Next Prev navigation
    controlNav: true,               // 1,2,3... navigation
    controlNavThumbs: false,        // Use thumbnails for Control Nav
    pauseOnHover: true,             // Stop animation while hovering
    manualAdvance: false,           // Force manual transitions
    prevText: 'Prev',               // Prev directionNav text
    nextText: 'Next',               // Next directionNav text
    randomStart: false,             // Start on a random slide
});
   })(jQuery);
    </script>
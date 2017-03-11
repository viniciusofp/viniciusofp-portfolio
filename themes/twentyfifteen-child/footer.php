<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
	</div>
</div>
<div id="footer" class="container-fluid">
	<?php include 'templates/contato.php' ?>
</div>

<script type="text/javascript">
	$('#skills').waypoint(function() {
	  $('#skills').removeClass('transparent');
	  $('#skills .fa').addClass('animated zoomIn');
	}, {
	    offset: '90%'
	});

	$('#cv').waypoint(function() {
	  $('#cv h1').removeClass('transparent').addClass('animated zoomIn');
	  $('#residencia').removeClass('transparent').addClass('animated zoomIn');
	  $('#experiencias').removeClass('transparent').addClass('animated zoomIn');
	  $('#idiomas').removeClass('transparent').addClass('animated zoomIn');
	  $('#formacao').removeClass('transparent').addClass('animated zoomIn');
	  $('#premios').removeClass('transparent').addClass('animated zoomIn');
	  $('#habilidades').removeClass('transparent').addClass('animated zoomIn');
	}, {
	    offset: '70%'
	});
	// $('#folio').waypoint(function() {
	//   $('#postnav').toggleClass('transparent');
	// }, {
	//     offset: '50%'
	// });


	//Smooth Scrolling
	$(function() {
	  $('a[href*="#"]:not([href="#"])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});
</script>
<script type="text/javascript">



	// SmoothState JS


$(function(){
  'use strict';
  var options = {
  	blacklist: '.no-smoothState',
    prefetch: true,
    cacheLength: 2,
    onStart: {
      duration: 500, // Duration of our animation
      render: function ($container) {
        // Add your CSS animation reversing class
        $container.addClass('is-exiting');

        // Restart your animation
        smoothState.restartCSSAnimations();


        // Scroll user to the top
        $('html, body').delay( 500 ).animate({ 'scrollTop': 0 }, 50);
      }
    },
    onReady: {
      duration: 250,
      render: function ($container, $newContent) {
        // Remove your CSS animation reversing class
        $container.removeClass('is-exiting');

        // Inject the new content
        $container.html($newContent);


      }
    }
  },
  smoothState = $('#main').smoothState(options).data('smoothState');
});

</script>


<?php wp_footer(); ?>
</div></div> <!-- transition container -->
</body>
</html>

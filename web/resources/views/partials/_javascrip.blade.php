<!--js working-->
	<!-- //js  working-->
	<!--FlexSlider banner-->
	<script defer src="{{ URL::asset('frontend/js/jquery.flexslider.js') }}"></script>
	<script type="text/javascript">
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!--End-slider-script-->
	<!-- OnScroll-Number-Increase-JavaScript -->
	<script src="{{ URL::asset('frontend/js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ URL::asset('frontend/js/jquery.countup.js') }}"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //OnScroll-Number-Increase-JavaScript -->
	<!-- light box gallery -->
	<!-- <script src="js/lightbox-plus-jquery.min.js"></script> -->
	<!-- //light box gallery -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="{{ URL::asset('frontend/js/move-top.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('frontend/js/easing.js') }}"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function () {

			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
			};


			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->
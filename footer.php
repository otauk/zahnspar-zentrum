		<div class="container">
			<div class="row">
				<div class="brand-img mobile"></div>
					<div class="col-6 footer">
						<div class="col-2">
							<p>
							<span class="brand">Zahnspar-Zentrum</span>
							<br/>
							Bahnhofstr. 11
							<br/>
							59065 Hamm
							</p>
							<p>
							Tel.: 02381 <span class="brand">//</span> 279 82 66
							<br/>
							Fax:  02381 <span class="brand">//</span> 279 80 33
							<br/>
							<a href="mailto:info@zahnspar-zentrum.de">info@zahnspar-zentrum.de</a>
							</p>
							<p>
								<a href="impressum.php" class="smaller">Impressum</a>
							</p>
						</div>
						<div class="col-2" style="text-align: center;">
							<p>
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2473.935904405029!2d7.809804554224591!3d51.67931627169304!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b9740acdbe5c7d%3A0xd0ac8bd4caf700b3!2sBahnhofstra%C3%9Fe+11%2C+59065+Hamm!5e0!3m2!1sde!2sde!4v1410264033267" width="100%"  frameborder="0" style="border:0"></iframe>
							</p>
						</div>
						<div class="col-2 mobile" style="text-align: right;">
								<p>
									Hilfe bei hohen <br/>Zahnersatzkosten
								</p>
						</div>
					</div>
			</div>
		</div>
		</div>
	</body>
	<script>
/*
		$(document).ready(function(){

	  $(".owl-carousel").owlCarousel({
	 loop:true,
	 margin: 10,
	 nav:true,
	 items:1

  });
});
*/

var owl = $('.owl-carousel');
owl.owlCarousel({
	loop:true,
	 margin: 10,
	 nav:false,
	 items:1,

});
// Go to the next item
$('.slide_nav.button.right').click(function() {
    owl.trigger('next.owl.carousel');
})
// Go to the previous item
$('.slide_nav.button.left').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger('prev.owl.carousel');
})

		$(document).ready(function() {
			$('#testimonial').cycle({
				fx:    'fade',
				timeout: 8000,
				speed:  1500
 			});
 			$('#bg').cycle({
				fx:    'fade',
				speed:  5000,
				slideResize: false
 			});
		});
	</script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49581383-2', 'auto');
  ga('send', 'pageview');

</script>
</html>

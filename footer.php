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
		$(document).ready(function() {
			$('nav').on('click', 'a', function(){
				$(".slide_content").css("transform","translateX("+$(this).index() * -100+"%)");
				$("nav a div").removeClass('current');
				$(this).find('div').addClass('current');
			});
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
</html>

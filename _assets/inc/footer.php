
		<footer>

			<div class="inner">
				
				<div class="container">
					
					<article class="text">
						
						<h2>Contact Us for More Information</h2>

						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sodales, ipsum sed suscipit accumsan, ligula augue lacinia nibh, id vulputate metus erat nec felis. Sed lobortis imperdiet euismod. Vivamus in molestie eros. Vivamus aliquam blandit dignissim. Vivamus molestie auctor ex, a suscipit orci auctor a.</p>

						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
						</ul>

					</article><!--text-->

					<article class="form">
						
						<form method='post' action='".$_SERVER['SCRIPT_NAME']."'>
								
					    	<input type='text' name='name' id='name' placeholder='Name'>

					    	<input type='text' name='email' id='email' placeholder='Email'>

					    	<textarea placeholder="Your Message"></textarea>

					    	<button type="submit">Submit</button>

						</form>

					</article><!--form-->

				</div><!--container-->

			</div><!--inner-->

		</footer>

		<script src="/_assets/js/flexslider.jquery.js"></script>

		<script type="text/javascript">
		    $(function(){
		      SyntaxHighlighter.all();
		    });
		    $(window).load(function(){
		      $('.flexslider').flexslider({
		        start: function(slider){
		          $('body').removeClass('loading');
		        }
		      });
		    });
		</script>

	</body>
</html>
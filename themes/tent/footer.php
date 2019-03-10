<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<a href="<?php echo esc_url( '/images/dark-wood@2x.png' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
					
<!------------------------------------------------------------------- FOOTER -----------------------------------------------------------------------------
<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-blocks container">
					<div class="footer-block-item">
						<div class="contact">
							<h3>Contact Info</h3>
							<p><i class="fa fa-envelope"></i><a href="mailto:info@inhabitent.com">info@inhabitent.com</a></p>
							<p><i class="fa fa-phone"></i><a href="tel:5553434567891">778-456-7891</a></p>
							<p>
								<span><i class="fa fa-facebook-square"></i></span>
								<span><i class="fa fa-twitter-square"></i></span>
								<span><i class="fa fa-google-plus-square"></i></span>
							</p>
						</div>
					</div>

					<div class="footer-block-item">
						<div class="business-hours">
							<h3>Business Hours</h3>
							<p><span class="day-of-week">Monday-Friday:</span> 9am to 5pm</p>
							<p><span class="day-of-week">Saturday:</span> 10am to 2pm</p>
							<p><span class="day-of-week">Sunday:</span> Closed</p>
						</div>
					</div>

					<div class="footer-block-item">
						<div class="text-logo">
							<a href="https://tent.academy.red/" rel="home">
								<img src="https://tent.academy.red/wp-content/themes/inhabitent/images/inhabitent-logo-text.svg" alt="Inhabitent logo">
							</a>
						</div>
					</div>
				</div>

				<div class="site-info">
					<div class="container">
						Copyright © 2019 Inhabitent					</div>
				</div><!-- .site-info -->
			</footer>
<!------------------------------------------------------------------------------------------------------------------------------------------------------->

				
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

		<!------------------- my edit sunday ------------------->

<div id="footer-sidebar" class="secondary">
<div id="footer-sidebar1">
<?php
if(is_active_sidebar('footer-sidebar-1')){
dynamic_sidebar('footer-sidebar-1');
}
?>
</div>
</div>
		

	</body>
</html>

			<!-- footer -->
			<footer class="footer container" role="contentinfo">
				<!-- Social -->
				<ul class="social col-xs-12 col-md-4">
					<li><a class="facebook" href="#"><img src="<?php echo get_template_directory_uri() ?>/img/social/facebookCircle.png"/></a></li>
				</ul>


				<div class="col-xs-12 col-md-4 text-center">
					<?php wp_nav_menu( array(
					'theme_location' => 'footer-menu',
					'menu_class' => 'footerMenu '
					) ); ?>

				</div>


				<!-- copyright -->
				<p class="col-xs-12 col-md-4 copyright pull-right text-right">
					<?php echo date('Y'); ?> &copy; DHL International GmbH. All rights reserved.
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>

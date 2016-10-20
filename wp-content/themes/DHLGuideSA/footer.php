<div class="clearfix"></div>

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

<!--	Feedback	-->

			<div class="feedbackBar">
				<div class="container">
					<div class="col-xs-12 text-center">
						<p>What's missing from this page? Do let us know if there's anything that you'd like to see feature. <strong>We'd love to here your <a href="#" data-toggle="modal" data-target="#myModal">feedback</a></strong></p>
					</div>
				</div>
			</div>

			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&#10005;</span></button>
							<h4 class="modal-title" id="myModalLabel">Leave your feedback</h4>
						</div>
						<div class="modal-body">
							<?php echo do_shortcode('[contact-form-7 id="184" title="Feedback Form"]') ?>
						</div>
					</div>
				</div>
			</div>




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

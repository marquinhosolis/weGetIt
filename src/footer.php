<footer>
	<div class="container">
		<div class="footerLogo">
			<a href="<?php echo site_url(); ?>">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/header-logo.png" alt="We Get It Logo">
			</a>
		</div>
		<div class="footerAddress">
			<address>
				<a href="https://www.google.com.br/maps/search/123+Address+Street+Orlando,+Fl+32801/@28.544412,-81.3803989,17z/data=!3m1!4b1">
					123 Address Street <br> Orlando, Fl 32801
				</a>
			</address>
			<div class="socialFooter">
				<a href="#facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href="#instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			</div>
		</div>
		<div class="footerNewsletter">
			<?php echo do_shortcode('[formidable id=2]'); ?>
		</div>
		<div class="footerDppaLogo">
			<?php require_once('partials/logo-dppa-footer.php'); ?>
		</div>
	</div>
</footer>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="https://use.fontawesome.com/37d8e8fa0a.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/jquery.flexslider-min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>
<?php wp_footer(); ?> 
</body>
</html>
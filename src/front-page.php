<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
	<main class="homePage">
		<section class="cover coverHome">
			<div class="container">
				<div class="coverHomeText">
					<h1>Premium performance</h1>
					<h2>without the premium price tag</h2>
				</div>
				<div class="coverHomeProducts">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wp/home-cover-products.png" alt="">
				</div>
			</div>
		</section>
	</main>
<?php get_footer(); ?>		
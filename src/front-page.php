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
		<section class="aboutHome">
			<div class="container">
				<div class="aboutHomeDrops">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/drops.png" alt="">
				</div>
				<div class="aboutHomeText">
					<h3>Life is for living, <span>not cleaning.</span></h3>
					<p>Get all of your household jobs done quickly, effectively and affordably with the WeGetIt family of products.</p>
				</div>
			</div>
		</section>
		<section class="productsHome">
			<div class="container">
				<div class="productsHomeTitle title">
					<h3>Explore our products</h3>
				</div>
				<div class="productsHomeCategories">
					<div class="productsHomeCategory" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/wp/category1.png)">
						<div class="content">
							<a href="#" class="btn hvr-shutter-out-horizontal">category name</a>
						</div>
					</div>
					<div class="productsHomeCategory" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/wp/category2.png)">
						<div class="content">
							<a href="#" class="btn hvr-shutter-out-horizontal">category name</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
<?php get_footer(); ?>		
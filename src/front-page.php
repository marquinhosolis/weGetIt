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
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wp/home-cover-products.png" alt="we get it packshot">
				</div>
			</div>
		</section>
		<section class="aboutHome">
			<div class="container">
				<div class="aboutHomeDrops">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/drops.png" alt="drops">
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
		<section class="whyHome">
			<div class="container">
				<div class="whyHomeTitle title">
					<h3>Why WeGetIt</h3>
				</div>
				<div class="whyHomeReasons">
					<div class="whyHomeReason">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/blue-drop.png" alt="drop">
						<div class="whyHomeReasonText">
							<h4>Big Cleaning, Small Price Tag</h4>
							<p>Great performance shouldn’t cost the earth! Every WeGetIt product is designed to give you the best results without breaking the bank</p>
						</div>
					</div>
					<div class="whyHomeReason">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pink-drop.png" alt="drop">
						<div class="whyHomeReasonText">
							<h4>Make your Life easier</h4>
							<p>Spend less time cleaning and more time living! Our multi-tasking products work hard so you don’t have to.</p>
						</div>
					</div>
					<div class="whyHomeReason">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/purple-drop.png" alt="drop">
						<div class="whyHomeReasonText">
							<h4>No Jargon here</h4>
							<p>We’ve ditched the complicated product names and cleaned up the confusing instructions—so you know at a glance what you’re buying and how to use it.</p>
						</div>
					</div>
				</div>
				<a href="#" class="btn hvr-shutter-out-horizontal">LEARN MORE ABOUT US</a>
			</div>
		</section>
		<section class="whereToBuyHome">
			<div class="container">
				<div class="whereToBuyHomeText">
					<div class="whereToBuyHomeTitle title">
						<h3>Looking for where you can buy our products?</h3>
					</div>
					<a href="#" class="btn hvr-shutter-out-horizontal">where to buy</a>
				</div>
				<img class="whereToBuyHomeImage" src="<?php echo get_stylesheet_directory_uri(); ?>/images/wp/where-to-buy-image.png" alt="WeGetIt">
			</div>
		</section>
		<section class="blogs blogsHome">
			<div class="container">
				<div class="blogsHomeTitle title">
					<h3>Recent Blogs</h3>
				</div>
				<article class="hvr-float">
					<a href="#">
						<div class="blogImage" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/wp/blog-image.png); ">
							<div class="content"></div>
						</div>
						<div class="blogText">
							<div class="blogDate">Feb. 26, 2019</div>
							<div class="blogTitle"><h4>Lorem Ipsum</h4></div>
							<div class="blogIntro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </div>
							<div class="blogReadMore">Read more</div>
						</div>
					</a>
				</article>
				<article class="hvr-float">
					<a href="#">
						<div class="blogImage" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/wp/blog-image.png); ">
							<div class="content"></div>
						</div>
						<div class="blogText">
							<div class="blogDate">Feb. 26, 2019</div>
							<div class="blogTitle"><h4>Lorem Ipsum</h4></div>
							<div class="blogIntro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </div>
							<div class="blogReadMore">Read more</div>
						</div>
					</a>
				</article>
				<article class="hvr-float">
					<a href="#">
						<div class="blogImage" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/wp/blog-image.png); ">
							<div class="content"></div>
						</div>
						<div class="blogText">
							<div class="blogDate">Feb. 26, 2019</div>
							<div class="blogTitle"><h4>Lorem Ipsum</h4></div>
							<div class="blogIntro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </div>
							<div class="blogReadMore">Read more</div>
						</div>
					</a>
				</article>
				<a href="#" class="btn hvr-shutter-out-horizontal">View all blogs</a>
			</div>
		</section>
		<section class="homeCta">
			<div class="container">
				<h3>Have a question, comment or suggestion?</h3>
				<a href="#" class="btn hvr-shutter-out-horizontal">Contact us now</a>
			</div>
		</section>
	</main>
<?php get_footer(); ?>		
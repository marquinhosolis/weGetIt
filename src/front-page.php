<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
	<main class="homePage">
		<section class="cover coverHome" style="background-image: url(<?php the_field('cover_background_image'); ?>)">
			<div class="container">
				<div class="coverHomeText" data-aos="fade-right">
					<h1><?php the_field('cover_title'); ?></h1>
					<h2><?php the_field('cover_subtitle'); ?></h2>
				</div>
				<div class="coverHomeProducts" data-aos="zoom-in">
					<img src="<?php the_field('cover_packshot'); ?>" alt="we get it packshot">
				</div>
			</div>
		</section>
		<section class="aboutHome">
			<div class="container">
				<div class="aboutHomeDrops" data-aos="flip-left">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/drops.png" alt="drops">
				</div>
				<div class="aboutHomeText" data-aos="fade-left">
					<h3><?php the_field('about_home_title'); ?><span><?php the_field('about_home_subtitle'); ?></span></h3>
					<?php the_field('about_home_text'); ?>
				</div>
			</div>
		</section>
		<section class="productsHome">
			<div class="container">
				<div class="productsHomeTitle title" data-aos="fade-down">
					<h3>Explore our products</h3>
				</div>
				<div class="productsHomeCategories">
					<?php
						$category1 = get_field('products_home_category_1');
						$cat1Name = $category1 ->name;
						$cat1Link = site_url().'/products/#'.$category1 -> slug;
						$cat1Image = get_field('category_thumbnail', 'category_'.$category1->term_id);
					?>
					<div class="productsHomeCategory" style="background-image: url(<?php echo $cat1Image; ?>)" data-aos="flip-up">
						<div class="content">
							<a href="<?php echo $cat1Link; ?>" class="btn hvr-shutter-out-horizontal"><?php echo $cat1Name; ?></a>
						</div>
					</div>
					<?php
						$category2 = get_field('products_home_category_2');
						$cat2Name = $category2 ->name;
						$cat2Link = site_url().'/products/#'.$category2 -> slug;
						$cat2Image = get_field('category_thumbnail', 'category_'.$category2->term_id);
					?>
					<div class="productsHomeCategory" style="background-image: url(<?php echo $cat2Image; ?>)" data-aos="flip-up">
						<div class="content">
							<a href="<?php echo $cat2Link; ?>" class="btn hvr-shutter-out-horizontal"><?php echo $cat2Name; ?></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="whyHome">
			<div class="container">
				<div class="whyHomeTitle title" data-aos="fade-down">
					<h3>Why WeGetIt</h3>
				</div>
				<div class="whyHomeReasons">

					<?php
						if( have_rows('why_wegetit') ):
							while ( have_rows('why_wegetit') ) : the_row(); 
								$dropColor = get_sub_field('why_wegetit_drop_color');
								$title = get_sub_field('why_wegetit_title');
								$copy = get_sub_field('why_wegetit_text');
							?>
								<div class="whyHomeReason" data-aos="fade-up">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/<?php echo $dropColor; ?>-drop.png" alt="drop">
									<div class="whyHomeReasonText">
										<h4><?php echo $title; ?></h4>
										<?php echo $copy; ?>
									</div>
								</div>
							<?php
							endwhile;
						endif;
					?>
				</div>
				<a href="<?php echo site_url('/about-us/')?>" class="btn hvr-shutter-out-horizontal">LEARN MORE ABOUT US</a>
			</div>
		</section>
		<section class="whereToBuyHome">
			<div class="container">
				<div class="whereToBuyHomeText" data-aos="fade-right">
					<div class="whereToBuyHomeTitle title">
						<h3>Looking for where you can buy our products?</h3>
					</div>
					<a href="<?php echo site_url('/where-to-buy/')?>" class="btn hvr-shutter-out-horizontal">where to buy</a>
				</div>
				<img class="whereToBuyHomeImage" src="<?php echo get_stylesheet_directory_uri(); ?>/images/where-to-buy-image.png" alt="WeGetIt" data-aos="fade-left">
			</div>
		</section>
		<section class="blogs blogsHome">
			<div class="container">
				<div class="blogsHomeTitle title" data-aos="fade-bottom">
					<h3>Recent Blogs</h3>
				</div>
					
				<?php
					$args = array(
						'post_type'              => array( 'post' ),
						'posts_per_page'         => '3',
					);

					$query = new WP_Query( $args );

					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post(); ?>
								<article class="hvr-float">
									<a href="<?php the_permalink(); ?>">
										<div class="blogImage" style="background-image: url(<?php the_post_thumbnail_url( ); ?>">
											<div class="content"></div>
										</div>
										<div class="blogText">
											<div class="blogDate"><?php the_date(); ?></div>
											<div class="blogTitle"><h4><?php the_title(); ?></h4></div>
											<div class="blogIntro"><?php the_excerpt(); ?></div>
											<div class="blogReadMore">Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></div>
										</div>
									</a>
								</article>
						<?php }
					} 
					
					wp_reset_postdata();
				?>
				<a href="<?php echo site_url('/blog/')?>" class="btn hvr-shutter-out-horizontal">View all blogs</a>
			</div>
		</section>
		<section class="homeCta">
			<div class="container" data-aos="fade-up">
				<h3>Have a question, comment or suggestion?</h3>
				<a href="<?php echo site_url('/contact-us/')?>" class="btn hvr-shutter-out-horizontal">Contact us now</a>
			</div>
		</section>
	</main>
<?php get_footer(); ?>		
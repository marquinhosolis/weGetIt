<?php
/*
Template Name: About Us Page
*/
?>

<?php get_header(); ?>
<main class="contactPage">
    <section class="aboutUsCover" style="background-image: url('<?php the_field('cover_background_image'); ?>')">
        <div class="container">
            <h1 data-aos="fade-up">About WeGetIt</h1>
        </div>
    </section>
    <section class="aboutUsIntro">
        <div class="container">
            <div class="aboutUsIntroImage" data-aos="fade-right">
                <img class="aboutUsIntroImageDrops" src="<?php echo get_stylesheet_directory_uri(); ?>/images/drops-about.png" alt="About us Intro Image">
                <img src="<?php the_field('section_1_image'); ?>" alt="About us Intro Image">
            </div>
            <div class="aboutUsIntroText" data-aos="fade-left">
                <h2><?php the_field('section_1_title'); ?><br><span><?php the_field('section_1_subtitle'); ?></span></h2>
                <?php the_field('section_1_copy'); ?>
            </div>
        </div>
    </section>
    <section class="aboutUsSection2">
        <div class="container">
            <div class="aboutUsSection2Image" data-aos="fade-left">
                <img class="aboutUsIntroImageDrops" src="<?php echo get_stylesheet_directory_uri(); ?>/images/drops-about.png" alt="About us Intro Image">
                <img src="<?php the_field('section_2_image'); ?>" alt="About us Intro Image">
            </div>
            <div class="aboutUsSection2Text" data-aos="fade-right">
                <h2><?php the_field('section_2_title'); ?><br><span><?php the_field('section_2_subtitle'); ?></span></h2>
                <?php the_field('section_2_copy'); ?>
            </div>
        </div>
    </section>
    <section class="aboutUsDrops">
        <div class="container" data-aos="fade-up">
            <div class="flexslider dropsSlider">
                <ul class="slides">

                    <?php
						if( have_rows('drops_section') ):
							while ( have_rows('drops_section') ) : the_row(); 
								$dropColor = get_sub_field('drop_color');
								$title = get_sub_field('drop_title');
                            ?>
                                <li >
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/<?php echo $dropColor; ?>-drop.png" alt="drop">
                                    <h3><?php echo $title; ?></h3>
                                </li>
							<?php
							endwhile;
						endif;
					?>
                </ul>
            </div>
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
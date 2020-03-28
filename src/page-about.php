<?php
/*
Template Name: About Us Page
*/
?>

<?php get_header(); ?>
<main class="contactPage">
    <section class="aboutUsCover">
        <div class="container">
            <h1 data-aos="fade-up">About WeGetIt</h1>
        </div>
    </section>
    <section class="aboutUsIntro">
        <div class="container">
            <div class="aboutUsIntroImage" data-aos="fade-right">
                <img class="aboutUsIntroImageDrops" src="<?php echo get_stylesheet_directory_uri(); ?>/images/drops-about.png" alt="About us Intro Image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wp/about-intro-image.png" alt="About us Intro Image">
            </div>
            <div class="aboutUsIntroText" data-aos="fade-left">
                <h2>Make every day shine<br><span>with WeGetIt</span></h2>
                <p>Designed to fit your family’s busy day to day life, our mission is to create quality, affordable cleaning products that simply work. <br><br>With Urca, you can check off all your cleaning and laundry tasks quickly. All that’s left is for you to enjoy spending time together with family in your beautifully clean home!
                </p>
            </div>
        </div>
    </section>
    <section class="aboutUsSection2">
        <div class="container">
            <div class="aboutUsSection2Image" data-aos="fade-left">
                <img class="aboutUsIntroImageDrops" src="<?php echo get_stylesheet_directory_uri(); ?>/images/drops-about.png" alt="About us Intro Image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wp/about-us-section2-image.png" alt="About us Intro Image">
            </div>
            <div class="aboutUsSection2Text" data-aos="fade-right">
                <h2>WeGetIt first began in Brazil <span>over 40 years ago, </span></h2>
                <p>winning the loyalty of families nationwide with our traditional coconut soap. Since then, we’ve expanded to other countries in South America and the United States, and our range of products has grown to include all purpose cleaners, laundry detergents, fabric softeners, and more.</p>
            </div>
        </div>
    </section>
    <section class="aboutUsDrops">
        <div class="container" data-aos="fade-up">
            <div class="flexslider dropsSlider">
                <ul class="slides">
                    <li >
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/purple-drop.png" alt="drop" >
                        <h3>Trusted by families for over 40 years</h3>
                    </li>
                    <li>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/blue-drop.png" alt="drop">
                        <h3>Powerful cleaning for every room</h3>
                    </li>
                    <li>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pink-drop.png" alt="drop">
                        <h3>Family-friendly ingredients</h3>
                    </li>
                    <li>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/blue-drop.png" alt="drop">
                        <h3>Naturally inspired fragrances</h3>
                    </li>
                    <li>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pink-drop.png" alt="drop">
                        <h3>Outstanding performance</h3>
                    </li>
                    <li>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/purple-drop.png" alt="drop">
                        <h3>Great value for money</h3>
                    </li>
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
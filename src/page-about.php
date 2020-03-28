<?php
/*
Template Name: About Us Page
*/
?>

<?php get_header(); ?>
<main class="contactPage">
    <section class="aboutUsCover">
        <div class="container">
            <h1>About WeGetIt</h1>
        </div>
    </section>
    <section class="aboutUsIntro">
        <div class="container">
            <div class="aboutUsIntroImage">
                <img class="aboutUsIntroImageDrops" src="<?php echo get_stylesheet_directory_uri(); ?>/images/drops-about.png" alt="About us Intro Image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wp/about-intro-image.png" alt="About us Intro Image">
            </div>
            <div class="aboutUsIntroText">
                <h2>Make every day shine<br><span>with WeGetIt</span></h2>
                <p>Designed to fit your family’s busy day to day life, our mission is to create quality, affordable cleaning products that simply work. <br><br>With Urca, you can check off all your cleaning and laundry tasks quickly. All that’s left is for you to enjoy spending time together with family in your beautifully clean home!
</p>
            </div>
        </div>
    </section>
</main>	
<?php get_footer(); ?>
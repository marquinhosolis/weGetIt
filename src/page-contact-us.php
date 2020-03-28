<?php
/*
Template Name: Contact Us Page
*/
?>

<?php get_header(); ?>
<main class="contactPage">
    <div class="contactPageImage" style="background-image: url(<?php the_field('side_image'); ?>);" data-aos="fade-right">
        <!-- <div class="content"></div> -->
    </div>
    <div class="contactPageText" data-aos="fade-up">
        <div class="contactPageTextTitle title" >
            <h3>Contact</h3>
        </div>
        <?php the_field('form_copy'); ?>
        <div class="contactPageForm">
            <?php echo do_shortcode('[formidable id=3]'); ?>
        </div>
    </div>
</main>	
<?php get_footer(); ?>

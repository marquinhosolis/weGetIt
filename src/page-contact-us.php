<?php
/*
Template Name: Contact Us Page
*/
?>

<?php get_header(); ?>
<main class="contactPage">
    <div class="contactPageImage" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/contact-page-image.png);">
        <!-- <div class="content"></div> -->
    </div>
    <div class="contactPageText">
        <div class="contactPageTextTitle title" data-aos="fade-down">
            <h3>Contact</h3>
        </div>
        <p>Whether you have a question, comment or suggestion, we'd love to hear from you! <br>Use the form below to send us an email.</p>
        <div class="contactPageForm">
            <?php echo do_shortcode('[formidable id=3]'); ?>
        </div>
    </div>
</main>	
<?php get_footer(); ?>

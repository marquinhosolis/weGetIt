<?php
/*
Template Name: Where to Buy Page
*/
?>

<?php get_header(); ?>
<main class="whereToBuyPage" style="background-image: url(<?php the_field('page_background_image'); ?>); ">
    <div class="container">
        <div class="whereToBuyPageTitle" data-aos="fade-up">
            <h1><span><?php the_field('page_subtitle'); ?></span><br><?php the_field('page_title'); ?></h1>
            <?php the_field('page_copy'); ?>
        </div>
        <div data-aos="fade-up">
            <section class="storeFilters">
                <div class="storeFilter">
                    <label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                    <select name="city" id="storeCity">
                        <option value="" selected>Select your city</option>
                    </select>
                </div>
                <div class="storeFilter">
                    <label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                    <select name="state" id="storeState">
                        <option value="" selected>Select your state</option>
                    </select>
                </div>
            </section>
            <section class="storeResults">
                <div class="storeList">
                    <ul>
                        <?php
                            if( have_rows('store_list') ):
                                while ( have_rows('store_list') ) : the_row(); ?>
                                    <li class="store">
                                        <a href="<?php the_sub_field('store_maps_address'); ?>" target="_blank" class="mapLink">
                                            <div class="storeName"><?php the_sub_field('store_name'); ?></div>
                                            <div class="storeAddress"><?php the_sub_field('store_address'); ?></div>
                                            <div class="storeCity"><?php the_sub_field('storecity'); ?></div>
                                            <div class="storeState"><?php the_sub_field('store_state'); ?></div>
                                            <div class="storeZip"><?php the_sub_field('store_zip'); ?></div>
                                            <div class="storePhone">
                                                <a href="tel:<?php the_sub_field('store_phone'); ?>"><?php the_sub_field('store_phone'); ?></a>
                                            </div>
                                            <div class="storeSite">
                                                <a href="<?php the_sub_field('store_site'); ?>" target="_blank"><?php the_sub_field('store_site'); ?></a>
                                            </div>
                                        </a>
                                    </li> 
                                <?php endwhile;
                            endif;
                        ?>
                    </ul>
                </div>
                <div class="mapIframe" id="mapArea">
                    <iframe src="" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </section>
        </div>
    </div>
</main>	
<?php get_footer(); ?>

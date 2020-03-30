<?php
/*
Template Name: Products Page
*/
?>

<?php get_header(); ?>
<main class="productsPage">
    <section class="productsPageCover" style="background-image: url(<?php the_field('page_background_image'); ?>);">
        <div class="container">
            <h1><?php the_field('page_title'); ?><br><span><?php the_field('page_subtitle'); ?></span></h1>
            <div class="productsPageCoverText">
                <?php the_field('page_copy'); ?>
            </div>
        </div>
    </section>
    <section class="productsShowcase">
        <div class="container">
            <?php 
                $arrProducts = get_field('products_list');
                $arrProducts = $arrProducts[0]['product_category'];
                
                //print_r($arrProducts);
                foreach ($arrProducts as $category) { 
                    $catName = $category['category_name'];
                    $catAnchor = slugify($catName);
                    ?>
                    <div class="productCategory" id="<?php echo $catAnchor; ?>">
                        <div class="productCategoryTitle">
                            <h2><?php echo $catName; ?></h2>
                        </div>
                        <div class="flexslider productsShowcaseSlide">
                            <ul class="slides">
                                <?php
                                    $arrProducts = $category['category_products'];
                                    foreach($arrProducts as $product){ ?>
                                        <li>
                                            <div class="productResume">
                                                <div class="productResumeImage">
                                                    <img src="<?php echo $product['product_image']['url']?>" alt="">
                                                </div>
                                                <div class="productResumeCategory"><?php echo $product['product_category']?></div>
                                                <div class="productResumeName"><?php echo $product['product_name']?></div>
                                                <div class="productResumeAmount"><?php echo $product['product_amount']?></div> 
                                            </div>
                                        </li>
                                    <?php }
                                ?>
                            </ul>
                        </div>
                    </div>
                <?php }
            ?>

            
            
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
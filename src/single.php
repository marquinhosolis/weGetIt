<?php
/*
Template Name: Single Page
*/
?>

<?php get_header(); ?>
    <main class="singlePost">
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <div class="container">
                <div class="singleThumb" style="background-image: url(<?php the_post_thumbnail_url( ); ?>);" data-aos="fade-right">
                    <div class="content"></div>
                </div>
                <div class="singlePostText" data-aos="fade-left">
                    <div class="singlePostTextDate">
                        <?php the_date(); ?>
                    </div>
                    <div class="singlePostTextTitle">
                        <?php the_title(); ?>
                    </div>
                    <div class="singlePostCopy">
                        <?php the_content(); ?>
                    </div>
                    <div class="postNav">
                        <div class="postNavWrapper">
                            <div class="previous_post_link hvr-grow" >
                                <?php previous_post_link( '%link','<i class="fa fa-caret-left" aria-hidden="true"></i>
    Previous Blog' ) ?>
                            </div>
                            <div class="next_post_link hvr-grow">
                                <?php next_post_link( '%link','Next Blog <i class="fa fa-caret-right" aria-hidden="true"></i>
    ' ) ?>
                            </div>
                        </div>
                        <div class="backBlogLink hvr-grow">
                            <a href="<?php echo site_url('/blog/'); ?>">Back to all blogs</a>
                        </div>
                    </div>
                </div>
            </div>
            
        <?php endwhile; ?>
        <?php endif; ?>
    </main>
<?php get_footer(); ?>

<?php
/*
Template Name: Blog Page
*/
?>
<?php
    $limit = 6;
    if(isset($_GET['cat'])){
        $cat = $_GET['cat'];
    }
    if(isset($_GET['search'])){
        $search = $_GET['search'];
    }
    if(isset($_GET['all'])){
        $posts = '-1';
    }else{
        $posts = $limit;
    }
?>
<?php get_header(); ?>
    <main class="blogPage">
        <div class="blogsHomeTitle title" data-aos="fade-bottom">
            <h3>Blogs</h3>
        </div>
        <section class="blogPageFilters">
            <div class="container">
                <div class="blogPageForms">
                    <div class="selectWrapper">
                        <form action="" method="get">
                            <?php
                                wp_dropdown_categories( array(
                                    'show_option_all'    => 'Filter by Category',
                                    'orderby'            => 'name', 
                                    'hierarchical'       => 1, 
                                    'depth'              => 1,
                                ) );
                            ?>
                        </form>
                    </div>
                    <form action="" method="get" class="blogSearchForm">
                        <input type="search" name="search" placeholder="Search">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
        </section>
        <section class="blogs blogPageMain">
            <div class="container">
                <?php
                    $args = array(
                        'post_type' => array( 'post' ),
                        'posts_per_page' => $posts,
                        'cat'            => $cat,
                        's'              => $search
                    );

                    $query = new WP_Query( $args );
                    
                    if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post();?>
                            <?php 
                                $count = $query->found_posts;
                            ?>
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
                <?php 
                    if($query->found_posts > $limit && !isset($_GET['all'])){ ?>
                        <div class="loadMore">
                            <a href="<?php the_permalink(); ?>?all=1" class="btn hvr-shutter-out-horizontal">Load More</a>
                        </div>
                    <?php }
                ?>
                
            </div>
        </section>
    </main>
	
<?php get_footer(); ?>

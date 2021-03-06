<?php
/* Template Name: Category Page */
get_header();?>

    
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
            <div class="container">
                <ul class="thm-breadcrumb list-unstyled">
                    <?php  if (function_exists('mj_wp_breadcrumb'))mj_wp_breadcrumb(); ?>
                </ul>
            </div>
        </section>

        <section class="blog-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                <?php 
                      if(have_posts()):
                      while(have_posts()):the_post();
                      
                      ?>
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="blog-card">
                            <div class="blog-card__image blog">
                            <?php the_post_thumbnail('blog_image');?>
                            </div>
                            <div class="blog-card__content">
                                <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                            </div>
                        </div>
                    </div>
                    <?php
                    endwhile;
                    ?>
                </div>
                
                <?php 
                    endif;
                
                ?><ul class="list-unstyled post-pagination d-flex justify-content-center align-items-center">
                    <?php

                    the_posts_pagination( array(
                        'mid_size'  => 2,
                        'prev_text' => __( '<i class="fa fa-long-arrow-left"></i>', 'godo khaisha hiou' ),
                        'next_text' => __( '<i class="fa fa-long-arrow-right"></i>', 'godo khaisha hiou' ),
                    ) );
                    ?>
                </ul>
                    </div>
                </div>
                
            </div>
        </section>

        </section>
        <?php get_footer();?>
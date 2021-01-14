<?php get_header();?>
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
            <div class="container">
                <ul class="thm-breadcrumb list-unstyled">
                    <?php  if (function_exists('mj_wp_breadcrumb'))mj_wp_breadcrumb(); ?>
                </ul>
            </div>
        </section>

        <section class="blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="service-sidebar">
                            <div class="service-sidebar__category"> 
                            <?php
                                if(is_active_sidebar('blog_sidebar')){
                                    dynamic_sidebar('blog_sidebar');
                                }
                            ?>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <?php 
                          if(have_posts()):
                              while(have_posts()):the_post();
                              
                              ?>
                            <div class="blog-card__image single">
                                <?php the_post_thumbnail('single_blog');?>
                            </div>
                            <div class="blog-details__content">
                                <h3><?php the_title(); ?></h3>
                                <p><?php the_content();?></p>
                            </div>
                            <?php
                            endwhile;
                            endif;
                            wp_reset_postdata(); 
                            ?>   
                    </div>
                    
                </div>
            </div>
        </section>

        </section>
  <?php get_footer();?>
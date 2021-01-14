<?php
/* Template Name: Gallary Page */
get_header();?>

        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
            <div class="container">
                <ul class="thm-breadcrumb list-unstyled">
                    <?php  if (function_exists('mj_wp_breadcrumb'))mj_wp_breadcrumb(); ?>
                </ul>
            </div>
        </section>
        <section class="gallery-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="block-title text-center">
                            <h2>Gallery</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="button-group filter-button-group">
                            <button data-filter="*" class="active">All-Service</button>
                            <?php
                                $terms = get_terms('Portfolio');
                                foreach ($terms as $term) :
                                  
                            ?>
                            <button data-filter=".<?php echo $term->slug;?>"><?php echo $term->name;?></button>
                            <?php
                                endforeach;
                            ?>
                        </div>
                    </div>
                </div>
                <div class="grid popup-gallery">
                    <div class="row">

                        <?php 

                            $galleri_images = new WP_Query(array(
                                'post_type'=> 'portfolio',
                                 'posts_per_page'=> -1,
                                 'taxonomy'=>'Portfolio'
                            ));

                          if($galleri_images->have_posts()):
                          while($galleri_images->have_posts()):$galleri_images->the_post();
                          $get_img = wp_get_attachment_image_src(get_post_thumbnail_id(),'full');

                            $terms = get_the_terms( get_the_ID(), 'Portfolio' );
                         
                            if ( $terms && ! is_wp_error( $terms ) ) : 
                             
                                $draught_links = array();
                             
                                foreach ( $terms as $term ) {
                                    $draught_links[] = $term->slug;
                                }
                                                     
                                $on_draught = join( "  ", $draught_links );
                        ?>

                        <div class="col-lg-4 col-md-6 col-sm-6 grid-item <?php echo $on_draught;?>">
                            <div class="protimage">
                                <a href="<?php echo esc_url($get_img[0]);?>" class="gallary-image"><?php the_post_thumbnail('blog_image');?></a>
                                
                            </div>
                        </div>

                        <?php
                    endif;
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
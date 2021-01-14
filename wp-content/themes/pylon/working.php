<?php
/* Template Name: Working Area Page */
get_header();?>

        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
            <div class="container">
                <ul class="thm-breadcrumb list-unstyled">
                    <?php  if (function_exists('mj_wp_breadcrumb'))mj_wp_breadcrumb(); ?>
                </ul>
            </div>
        </section>


        <section class="working-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="block-title text-center company-work-area">
                            <h2><?php echo esc_html('Working Area','Godo Khaisha Hiou')?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="company-area-wapper">

                            <?php
                                        $get_works = cs_get_option('work_group');
                                        foreach($get_works as $key => $get_work):

                                           

                                            ?>
                            <h3><?php echo esc_html($get_work['Work_location']);?></h3>
                            <p><?php echo esc_html($get_work['work_desc']);?></p>

                        <?php endforeach;?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </section>
<?php get_footer();?>
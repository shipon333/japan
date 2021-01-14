<?php
/* Template Name: About Us Page */
get_header();?>

        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
            <div class="container">
                <ul class="thm-breadcrumb list-unstyled">
                    <?php  if (function_exists('mj_wp_breadcrumb'))mj_wp_breadcrumb(); ?>
                </ul>
            </div>
        </section>
        <section class="about-three">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="block-text"><?php echo cs_get_option('about_content')?></p>
                    </div>
                </div>
            </div>
        </section>
        </section>
<?php get_footer();?>
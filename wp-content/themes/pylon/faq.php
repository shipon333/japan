<?php
/* Template Name: FAQ Page */
get_header();?>

        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
            <div class="container">
                <ul class="thm-breadcrumb list-unstyled">
                    <?php  if (function_exists('mj_wp_breadcrumb'))mj_wp_breadcrumb(); ?>
                </ul>
            </div>
        </section>


        <section class="faq-one faq-one__faq-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul id="accordion" class="mb-0 wow fadeInUp list-unstyled" data-wow-duration="1500ms">

                            <?php
                                $get_accs = cs_get_option('faq_group');
                                foreach($get_accs as $key => $get_acc):
                                    ?>

                            <li>
                                <h2 class="para-title ">
                                    <span class="collapsed" role="button" data-toggle="collapse" data-target="#collapse<?php echo $key_num?>" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="fa fa-plus"></i>
                                        <?php echo esc_html($get_acc['faq_title']);?>
                                    </span>
                                </h2>
                                <div id="collapse<?php echo $key_num?>" class="collapse" role="button" aria-labelledby="collapseTwo" data-parent="#accordion">
                                    <p><?php echo esc_html($get_acc['faq_content']);?></p>
                                </div>
                            </li>

                        <?php 
                             $key_num =  $key++;
                        endforeach;?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        </section>
<?php get_footer();?>
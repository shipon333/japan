<?php
/* Template Name: Contact Page */
get_header();?>


        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
            <div class="container">
                <ul class="thm-breadcrumb list-unstyled">
                    <?php  if (function_exists('mj_wp_breadcrumb'))mj_wp_breadcrumb(); ?>
                </ul>
            </div>
        </section>
        <section class="company-details-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="block-title text-center company">
                            <h2><?php echo esc_html('Company Details & Leave a Message','godo khaisha hiou')?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="company-wapper">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-center">
                                        <th colspan="2"><?php echo cs_get_option('office_title')?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $get_infos = cs_get_option('office_group');
                                        foreach($get_infos as $key => $get_info):
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo esc_html($get_info['name_title']);?></th>
                                        <td><?php echo esc_html($get_info['name_content']);?></td>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="contact-one__content">
                            <div class="contact-one__box">
                                <i class="pylon-icon-telephone"></i>
                                <div class="contact-one__box-content">
                                    <h4><?php echo esc_html('Call Anytime','godo khaisha hiou')?></h4>
                                    <a href="tel:<?php echo cs_get_option('cmp_number');?>"><?php echo cs_get_option('cmp_number');?></a>
                                </div>
                            </div>
                            <div class="contact-one__box">
                                <i class="pylon-icon-email1"></i>
                                <div class="contact-one__box-content">
                                    <h4><?php echo esc_html('Write Email','godo khaisha hiou')?></h4>
                                    <a href="#"><?php echo cs_get_option('office_mail');?></a>
                                </div>
                            </div>
                            <div class="contact-one__box">
                                <i class="pylon-icon-pin1"></i>
                                <div class="contact-one__box-content">
                                    <h4><?php echo esc_html('Visit Office','godo khaisha hiou')?></h4>
                                    <a href="#"><?php echo cs_get_option('office_location');?></a>
                                </div>
                            </div>
                        </div>
                        <div class="contact-one__form">
                            
                                <?php 
                                    echo do_shortcode( '[contact-form-7 id="168" title="Contact form"]' );
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="google-map__home-two">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.225642551207!2d90.36216801445697!3d23.810573992392968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c1e671de5313%3A0xc5b9f31ba8123765!2sDeelko!5e0!3m2!1sen!2sbd!4v1609749612524!5m2!1sen!2sbd" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        </section>
<?php get_footer();?>
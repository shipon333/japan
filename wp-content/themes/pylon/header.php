<!DOCTYPE html>
<html <?php language_attributes();?>>

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <div class="page-wrapper" id="page-wrapper">
        <!-- HEADER AREA START-->
        <header class="main-header">
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-4 col-sm-12 col-12">
                            <div class="company-name">
                                <div class="logo-image">
                                    <a href="<?php echo home_url();?>"><img src="<?php echo wp_get_attachment_image_src(cs_get_option('logo_up'),'full')[0];?>" alt=""></a> 
                                </div>
                                <div class="company-text">
                                    <h2><?php echo cs_get_option('cmp_name');?></h2>
                                    <h5><?php echo cs_get_option('cmpsub_name');?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="co-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="company-number-wapper">
                                <div class="company-number">
                                    <h2><i class="fa fa-phone"></i><a href="tel:<?php echo cs_get_option('cmp_number');?>"><?php echo cs_get_option('cmp_number');?></a></h2>
                                    <h3><?php echo cs_get_option('cmpsub_number');?></h3>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                            <div class="social-icon">
                                <ul>
                                    <li><a target="_blank" href="<?php echo cs_get_option('line_link');?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/icone/line.png" alt=""></a></li>
                                    <li><a target="_blank" href="<?php echo cs_get_option('facebook_link');?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/icone/facebook.png" alt=""></a></li>
                                    <li><a target="_blank" href="<?php echo cs_get_option('envalope_link');?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/icone/envalope.png" alt=""></a></li>
                                    <li><a target="_blank" href="<?php echo cs_get_option('instagram_link');?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/icone/instagram.png" alt=""></a></li>
                                    <li><a target="_blank" href="<?php echo cs_get_option('twitter_link');?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/icone/twitter.png" alt=""></a></li>
                                    <li><a target="_blank" href="<?php echo cs_get_option('youtube_link');?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/icone/youtube.png" alt=""></a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.topbar -->
            <div class="container">
                <div class="logo-box">
                    <span class="fa fa-bars mobile-nav__toggler"></span>
                </div>
                <?php wp_nav_menu(array(
                    'theme_location'=>'top-menu',
                    'container'=> 'nav',
                    'container_class'=> 'main-menu',
                    'menu_class'=>'main-menu__list',
                    'depth'=>'3',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker()
                ));?>
            </div>
            <!-- /.main-menu -->
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>
        <!-- HEADER AREA END -->


<?php 
/* Template Name: Leanding Page */
get_header();?>

        <!-- BANNER SLIDER START -->
        <section class="main-slider">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{
                    "slidesPerView": 1,
                    "loop": true,
                    "effect": "fade",
                    "autoplay": {
                        "delay": 5000
                    },
                    "navigation": {
                        "nextEl": "#main-slider__swiper-button-next",
                        "prevEl": "#main-slider__swiper-button-prev"
                    }
                }'>
                <div class="swiper-wrapper">
                    <?php 

                        $slideritems = new WP_Query(array(
                            'post_type'=> 'slider',
                             'posts_per_page'=> -1
                        ));

                      if($slideritems->have_posts()):
                      while($slideritems->have_posts()):$slideritems->the_post();

                                $get_img = wp_get_attachment_image_src(get_post_thumbnail_id(),'full');
                    ?>

                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(<?php echo esc_url($get_img[0]);?>)"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <h2><?php the_title(); ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    endwhile;
                    endif;
                    wp_reset_postdata(); 
                    ?>
                </div>

                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i class="pylon-icon-left-arrow"></i></div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i class="pylon-icon-right-arrow"></i></div>
                </div>
            </div>
        </section>
        <!-- BANNER SLIDER END -->

        <!-- THREE CATEGORY SECTION START -->
        <section class="top-category">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="category-wapper">
                            <div class="category-wep-img">
                                <a href="<?php echo cs_get_option('categori_one_link')?>">
                                    <img src="<?php echo wp_get_attachment_image_src(cs_get_option('categori_one_image'),'full')[0];?>" alt="">
                                </a>
                            </div>
                            <div class="category-title">
                                <h2><a href="<?php echo cs_get_option('categori_one_link')?>"><?php echo cs_get_option('categori_one_title')?></a></h2>
                            </div>             
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="category-wapper">
                            <div class="category-wep-img">
                                <a href="<?php echo cs_get_option('categori_two_link')?>">
                                    <img src="<?php echo wp_get_attachment_image_src(cs_get_option('categori_two_image'),'full')[0];?>" alt="">
                                </a>
                            </div>
                            <div class="category-title">
                                <h2><a href="<?php echo cs_get_option('categori_two_link')?>"><?php echo cs_get_option('categori_two_title')?></a></h2>
                            </div>    
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="category-wapper">
                            <div class="category-wep-img">
                                <a href="<?php echo cs_get_option('categori_three_link')?>">
                                    <img src="<?php echo wp_get_attachment_image_src(cs_get_option('categori_three_image'),'full')[0];?>" alt="">
                                </a>
                            </div>
                            <div class="category-title">
                                <h2><a href="<?php echo cs_get_option('categori_three_link')?>"><?php echo cs_get_option('categori_three_title')?></a></h2>
                            </div>    
                        </div>
                    </div>
                </div>    
            </div>
        </section>
        <!-- THREE CATEGORY SECTION END -->

        <!-- ADD START -->
        <section class="add-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="add-wapper">
                            <img src="<?php echo wp_get_attachment_image_src(cs_get_option('add_one'),'full')[0];?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ADD END -->

        <!-- ABOUT START -->
        <section class="about-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-one__content">
                            <div class="block-title text-left">
                                <h2><?php echo cs_get_option('about_title')?></h2>
                            </div>
                            <p><?php echo cs_get_option('about_content')?>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ABOUT END -->
            <?php
                $_posts= new WP_Query(array(
                    'post_type'=> 'post',
                    'posts_per_page'=>4,
                    'orderby'=>'date',
                    'order'=>'DESC',
                    'status'=>'publish'
                ));
            ?>
        <!-- SERVICE START -->
        <section class="service-one">
            <div class="container">
                <div class="block-title text-center">
                    <h2><?php echo esc_html('All Services','Godo Khaisha Hiou')?></h2>
                </div>
                <div class="swiper-container" id="service-wapper">
                    <div class="swiper-wrapper service">

                    <?php 
                      if($_posts->have_posts()):
                      while($_posts->have_posts()):$_posts->the_post();
                      ?>
                        <div class="swiper-slide">
                            <div class="service-one__card">
                                <div class="service-one__image">
                                    <?php the_post_thumbnail('blog_image');?>
                                </div>
                                <div class="service-one__content">
                                    <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                    <p><?php echo wp_trim_words(get_the_content(),10); ?></p>
                                    <a href="<?php the_permalink();?>" class="pylon-icon-right-arrow service-one__link"></a>
                                </div>
                            </div>
                        </div>
                         <?php
                            endwhile;
                            endif;
                            wp_reset_postdata(); 
                        ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- SERVICE END -->

        <!-- OFFER START -->
        <section class="feature-one">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/shapes/feature-shape-1-1.png" alt="" class="feature-one__shape-1">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/shapes/feature-shape-1-2.png" alt="" class="feature-one__shape-2">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/shapes/feature-shape-1-3.png" alt="" class="feature-one__shape-3">
            <div class="offer-area">
                <div class="container">
                    <div class="row">
                        <div class="col -lg-12">
                            <div class="block-title text-center">
                                <h2><?php echo esc_html('Offer','Godo Khaisha Hiou')?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="offer-tab-menu">
                                <ul class="nav nav-tabs">
                                    <?php
                                        $get_tabs = cs_get_option('offer_group');
                                        foreach($get_tabs as $key => $get_tab):

                                           

                                            ?>
                                            <li class="nav-item">
                                                <a class="nav-link <?php if($key==1){echo 'active';}else{echo ' ';}
                                                    ?>" data-toggle="tab" href="#home<?php echo $key++?>"><?php echo esc_html($get_tab['offer_title']);?></a>
                                            </li>
                                            <?php
                                       endforeach;
                                    ?>
                                  </ul>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="offer-tab-content">
                                <div class="tab-content">
                                    <?php
                                        $get_tabscon = cs_get_option('offer_group');
                                        foreach($get_tabscon as $key => $get_tabcon):

                                            ?>
                                    <div id="home<?php echo $key++?>" class="container tab-pane <?php if($key==2){echo 'active';}else{echo ' ';}
                                                    ?>">
                                      <h3><?php echo esc_html($get_tabcon['offer_title']);?></h3>
                                      <p><?php echo esc_html($get_tabcon['offer_content']);?></p>
                                    </div>
                                    <?php
                                       endforeach;
                                    ?>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- OFFER END -->

        <!-- SIX COLUMN SERVICE START -->
        <section class="service-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="block-title text-center">
                            <h2><?php echo esc_html('Service','Godo Khaisha Hiou')?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <?php
                           $first = cs_get_option('one_category');
                            $shc_posts= new WP_Query(array(
                                'post_type'=> 'post',
                                'category_name' => $first ,
                                'posts_per_page'=>1,
                                'orderby'=>'date',
                                'order'=>'DESC',
                                'status'=>'publish'
                            ));
                        ?>
                        <?php 
                          if($shc_posts->have_posts()):
                          while($shc_posts->have_posts()):$shc_posts->the_post();
                          ?>
                        <div class="service-one__card">
                            <div class="service-one__image">
                                <?php the_post_thumbnail('blog_image');?>
                            </div>
                            <div class="service-one__content">
                                <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                <p><?php echo wp_trim_words(get_the_content(),6); ?></p>
                                <a href="<?php the_permalink();?>" class="pylon-icon-right-arrow service-one__link"></a>
                            </div>
                        </div>
                        <?php
                            endwhile;
                            endif;
                            wp_reset_postdata(); 
                        ?>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <?php
                            $two = cs_get_option('two_category');
                            $shc_posts= new WP_Query(array(
                                'post_type'=> 'post',
                                'category_name' => $two,
                                'posts_per_page'=>1,
                                'orderby'=>'date',
                                'order'=>'DESC',
                                'status'=>'publish'
                            ));
                        ?>
                        <?php 
                          if($shc_posts->have_posts()):
                          while($shc_posts->have_posts()):$shc_posts->the_post();
                          ?>
                        <div class="service-one__card">
                            
                            <div class="service-one__content">
                                <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                <p><?php echo wp_trim_words(get_the_content(),6); ?></p>
                                <a href="<?php the_permalink();?>" class="pylon-icon-right-arrow service-one__link"></a>
                            </div>
                            <div class="service-one__image">
                                <?php the_post_thumbnail('blog_image');?>
                            </div>
                        </div>
                        <?php
                            endwhile;
                            endif;
                            wp_reset_postdata(); 
                        ?>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <?php
                            $three = cs_get_option('three_category');
                            $shc_posts= new WP_Query(array(
                                'post_type'=> 'post',
                                'category_name' => $three,
                                'posts_per_page'=>1,
                                'orderby'=>'date',
                                'order'=>'DESC',
                                'status'=>'publish'
                            ));
                        ?>
                        <?php 
                          if($shc_posts->have_posts()):
                          while($shc_posts->have_posts()):$shc_posts->the_post();
                          ?>
                        <div class="service-one__card">
                            <div class="service-one__image">
                                <?php the_post_thumbnail('blog_image');?>
                            </div>
                            <div class="service-one__content">
                                <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                <p><?php echo wp_trim_words(get_the_content(),6); ?></p>
                                <a href="<?php the_permalink();?>" class="pylon-icon-right-arrow service-one__link"></a>
                            </div>
                        </div>
                        <?php
                            endwhile;
                            endif;
                            wp_reset_postdata(); 
                        ?>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <?php
                            $four = cs_get_option('four_category');
                            $shc_posts= new WP_Query(array(
                                'post_type'=> 'post',
                                'category_name' => $four,
                                'posts_per_page'=>1,
                                'orderby'=>'date',
                                'order'=>'DESC',
                                'status'=>'publish'
                            ));
                        ?>
                        <?php 
                          if($shc_posts->have_posts()):
                          while($shc_posts->have_posts()):$shc_posts->the_post();
                          ?>
                        <div class="service-one__card">
                            
                            <div class="service-one__content">
                                <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                <p><?php echo wp_trim_words(get_the_content(),6); ?></p>
                                <a href="<?php the_permalink();?>" class="pylon-icon-right-arrow service-one__link"></a>
                            </div>
                            <div class="service-one__image">
                                <?php the_post_thumbnail('blog_image');?>
                            </div>
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
        <!-- SIX COLUMN SERVICE END -->

        <!-- CALLING START -->
        <section class="trusted-company">
            <div class="trusted-company__bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/shapes/trust-bg-1-1.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="call-wapper text-center">
                            <span><?php echo esc_html('Just a phone call this, we will immediately calling on !!','Godo Khaisha Hiou')?></span>
                            <h2><a href="tel:<?php echo cs_get_option('cmp_number');?>"><i class="fa fa-phone"></i><?php echo cs_get_option('cmp_number');?></a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CALLING END -->

        <!-- REQUENTLY SERVICE START -->
        <section class="requently-service-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="block-title text-center">
                            <h2><?php echo esc_html('Requently Service','Godo Khaisha Hiou')?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">


                    <?php 
                        $galleri_images = new WP_Query(array(
                                'post_type'=> 'portfolio',
                                 'posts_per_page'=> 8,
                                 'taxonomy'=>'Portfolio'
                            ));

                          if($galleri_images->have_posts()):
                          while($galleri_images->have_posts()):$galleri_images->the_post();
                    ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="requently-wapper">
                            <div class="requently-image">
                                <?php the_post_thumbnail('blog_image');?>
                            </div>
                            <div class="requently-title">
                                <h3><a href=""><?php the_title(); ?></a></h3>
                            </div>
                        </div>
                    </div>


                    <?php
                        endwhile;
                        endif;
                        wp_reset_postdata(); 
                    ?>

                    
                </div>

            </div>
        </section>
        <!-- REQUENTLY SERVICE END -->

        <!-- RELATED SERVICE START -->
        <section class="related-service-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="block-title text-center">
                            <h2><?php echo esc_html('Related Service','Godo Khaisha Hiou')?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="related-service-wapper">
                            <div class="related-service-inner">
                                <div class="rel-ser-logo">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/logo-2.jpg" alt="">
                                </div>
                                <div class="rel-ser-border"></div>
                                <div class="rel-ser one">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/rel-ser-1.jpg" alt="">
                                    <h4><a href=""><?php echo esc_html('Treasure Moving','Godo Khaisha Hiou');?></a></h4>
                                </div>
                                <div class="rel-ser two">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/rel-ser-2.jpg" alt="">
                                    <h4><a href=""><?php echo esc_html('Car Business','Godo Khaisha Hiou');?></a></h4>
                                </div>
                                <div class="rel-ser four">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/rel-ser-3.jpg" alt="">
                                    <h4><a href=""><?php echo esc_html('Hikkoshi','Godo Khaisha Hiou');?></a></h4>
                                </div>
                                <div class="rel-ser five">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/rel-ser-4.jpg" alt="">
                                    <h4><a href=""><?php echo esc_html('Cleaning House','Godo Khaisha Hiou');?></a></h4>
                                </div>
                                <div class="rel-ser six">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/rel-ser-5.jpg" alt="">
                                    <h4><a href=""><?php echo esc_html('Purchase Service','Godo Khaisha Hiou');?></a></h4>
                                </div>
                                <div class="rel-ser three">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/rel-ser-6.jpg" alt="">
                                    <h4><a href=""><?php echo esc_html('Office Relocation','Godo Khaisha Hiou');?></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- RELATED SERVICE END -->

        <!-- REASONS START -->
        <section class="choose-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="block-title text-center">
                            <h2><?php echo esc_html('8 Reasons to Choose Godo Khaisha Hiou','Godo Khaisha Hiou');?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="choose-wapper">
                            <div class="choose-title">
                                <h4><?php echo esc_html('Same day support','Godo Khaisha Hiou');?></h4>
                            </div>
                            <div class="choose-image">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/choose/choose1.png" alt="">
                            </div>
                            <div class="choose-content">
                                <h3><?php echo esc_html('I will rush quickly even on the day!','Godo Khaisha Hiou');?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="choose-wapper">
                            <div class="choose-title">
                                <h4><?php echo esc_html('Estimate 0 yen','Godo Khaisha Hiou');?></h4>
                            </div>
                            <div class="choose-image">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/choose/choose2.png" alt="">
                            </div>
                            <div class="choose-content">
                                <h3><?php echo esc_html('Please feel free to contact us.','Godo Khaisha Hiou');?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="choose-wapper">
                            <div class="choose-title">
                                <h4><?php echo esc_html('No additional','Godo Khaisha Hiou');?></h4>
                            </div>
                            <div class="choose-image">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/choose/choose3.png" alt="">
                            </div>
                            <div class="choose-content">
                                <h3><?php echo esc_html('Pre-estimate Meiro is safe!','Godo Khaisha Hiou');?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="choose-wapper">
                            <div class="choose-title">
                                <h4><?php echo esc_html('Strengthening','Godo Khaisha Hiou');?></h4>
                            </div>
                            <div class="choose-image">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/choose/choose4.png" alt="">
                            </div>
                            <div class="choose-content">
                                <h3><?php echo esc_html('Dispose of at a good price with !','Godo Khaisha Hiou');?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="choose-wapper">
                            <div class="choose-title">
                                <h4><?php echo esc_html('Advantageous','Godo Khaisha Hiou');?></h4>
                            </div>
                            <div class="choose-image">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/choose/choose5.png" alt="">
                            </div>
                            <div class="choose-content">
                                <h3><?php echo esc_html('There is a great pack price!','Godo Khaisha Hiou');?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="choose-wapper">
                            <div class="choose-title">
                                <h4><?php echo esc_html('need to separate','Godo Khaisha Hiou');?></h4>
                            </div>
                            <div class="choose-image">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/choose/choose6.png" alt="">
                            </div>
                            <div class="choose-content">
                                <h3><?php echo esc_html('Customers just witness!','Godo Khaisha Hiou');?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="choose-wapper">
                            <div class="choose-title">
                                <h4><?php echo esc_html('Garbage mansion','Godo Khaisha Hiou');?></h4>
                            </div>
                            <div class="choose-image">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/choose/choose7.png" alt="">
                            </div>
                            <div class="choose-content">
                                <h3><?php echo esc_html('Please feel free to leave it to us!','Godo Khaisha Hiou');?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="choose-wapper">
                            <div class="choose-title">
                                <h4><?php echo esc_html('Organize relics','Godo Khaisha Hiou');?></h4>
                            </div>
                            <div class="choose-image">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/choose/choose8.png" alt="">
                            </div>
                            <div class="choose-content">
                                <h3><?php echo esc_html('Please feel free to leave it to us!','Godo Khaisha Hiou');?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- REASONS END -->

        <!-- WORKING START -->
        <section class="funfact-one">
            <div class="funfact-one__bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/funfact-bg-1-1.jpg);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="block-title text-center work">
                            <h2><?php echo esc_html('Working Procedure','Godo Khaisha Hiou');?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                        <div class="work-wapper">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/work/work1.png" alt="">
                            <h3><a href="<?php echo cs_get_option('work_link_one')?>"><?php echo esc_html('Hearing','Godo Khaisha Hiou');?></a></h3>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-12">
                        <div class="work-wapper">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/work/work2.png" alt="">
                            <h3><a href="<?php echo cs_get_option('work_link_one')?>"><?php echo esc_html('Estimate','Godo Khaisha Hiou');?></a></h3>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-12">
                        <div class="work-wapper">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/work/work4.png" alt="">
                            <h3><a href="<?php echo cs_get_option('work_link_one')?>"><?php echo esc_html('Meeting','Godo Khaisha Hiou');?></a></h3>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-12">
                        <div class="work-wapper">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/work/work3.png" alt="">
                            <h3><a href="<?php echo cs_get_option('work_link_one')?>"><?php echo esc_html('Payment','Godo Khaisha Hiou');?></a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                        <div class="work-wapper">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/work/work5.png" alt="">
                            <h3><a href="<?php echo cs_get_option('work_link_one')?>"><?php echo esc_html('Delivery','Godo Khaisha Hiou');?></a></h3>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- WORKING END -->

        <!-- ADD START -->
        <section class="add-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="add-wapper">
                            <img src="<?php echo wp_get_attachment_image_src(cs_get_option('add_two'),'full')[0];?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ADD END -->

        <!-- REQUEST FROM START-->
        <section class="company-details-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="block-title text-center company">
                            <h2><?php echo esc_html('Inquiry / Free consultation form','Godo Khaisha Hiou');?></h2>
                        </div>
                        <div class="japan-form-info">
                            <p><?php echo esc_html('Experienced staff will respond sincerely to your concerns.','Godo Khaisha Hiou');?></p>
                            <p><?php echo esc_html('IPlease enter the following items and click the "Confirm" button. After completing your inquiry, the person in charge will contact you.','Godo Khaisha Hiou');?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        
                            <?php 
                                    echo do_shortcode( '[contact-form-7 id="169" title="Inquiry form"]' );
                                ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- REQUEST FROM END -->

        <!-- WORKING AREA START-->
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
        <!-- WORKING AREA END -->

        <section class="client-slider">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="vertical-slider bxslider">
                            <?php 
                                $slideritems = new WP_Query(array(
                                    'post_type'=> 'client_logo',
                                     'posts_per_page'=> -1
                                ));

                                if($slideritems->have_posts()):
                                    while($slideritems->have_posts()):$slideritems->the_post();
                                ?>
                                    <li>
                                        <?php the_post_thumbnail();?>
                                    </li>
                             <?php
                                    endwhile;
                                endif;
                                wp_reset_postdata(); 
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
       <?php get_footer();?>
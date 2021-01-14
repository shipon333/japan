<footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget footer-widget__about">
                            <a href="<?php echo home_url();?>">

                                <img src="<?php echo wp_get_attachment_image_src(cs_get_option('logo_footer'),'full')[0];?>" width="155" alt="">
                            </a>
                            <p><?php echo wp_trim_words(cs_get_option('about_content'),25); ?></p>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget one">
                            <?php
                                if(is_active_sidebar('sidebar-2')){
                                    dynamic_sidebar('sidebar-2');
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget two">
                            
                            <?php
                                if(is_active_sidebar('sidebar-3')){
                                    dynamic_sidebar('sidebar-3');
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget jpn-footer">
                           <?php
                                if(is_active_sidebar('sidebar-4')){
                                    dynamic_sidebar('sidebar-4');
                                }
                            ?>  
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="bottom-footer">
            <div class="container">

                <p><?php echo cs_get_option('copy_right');?></p>
                <div class="jpn-made">
                    <p><?php echo esc_html('Made With','godo khaisha hiou')?> <i class="fa fa-heart"></i> <?php echo esc_html('by','godo khaisha hiou')?> <a href="http://www.deelko.com" target="_blank" rel="noopener noreferrer"> <?php echo esc_html('Deelko','godo khaisha hiou')?></a></p>
                </div>
                <div class="bottom-footer__social">
                    <a target="_blank" href="<?php echo cs_get_option('line_link');?>" ><img src="<?php echo get_template_directory_uri();?>/assets/images/icone/line.png" alt=""></a>
                    <a target="_blank" href="<?php echo cs_get_option('facebook_link');?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/icone/facebook.png" alt=""></a>
                    <a target="_blank" href="<?php echo cs_get_option('envalope_link');?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/icone/envalope.png" alt=""></a>
                    <a target="_blank" href="<?php echo cs_get_option('instagram_link');?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/icone/instagram.png" alt=""></a>
                    <a target="_blank" href="<?php echo cs_get_option('twitter_link');?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/icone/twitter.png" alt=""></a>
                    <a target="_blank" href="<?php echo cs_get_option('youtube_link');?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/icone/youtube.png" alt=""></a>
                </div>
            </div>
        </div>
         <button class="butto-call"><a href="tel:<?php echo cs_get_option('cmp_number');?>"><i class="fa fa-mobile"></i></a></button>
    </div>


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="<?php echo home_url();?>" aria-label="logo image"><img src="<?php echo wp_get_attachment_image_src(cs_get_option('logo_footer'),'full')[0];?>" width="155" alt="" /></a>
            </div>
            <div class="mobile-nav__container"></div>
        </div>
    </div>
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

                <?php wp_footer();?>
    
    <script>
        var swiper = new Swiper('#service-wapper', {
            slidesPerView: 3,
            spaceBetween: 30,
            autoplay: {
                "delay": 5000
            },
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                "0": {
                    "spaceBetween": 0,
                    "slidesPerView": 1,
                },
                "375": {
                    "spaceBetween": 0,
                    "slidesPerView": 1,
                },
                "667": {
                    "spaceBetween": 0,
                    "slidesPerView": 1,
                },
                "767": {
                    "spaceBetween": 30,
                    "slidesPerView": 2,
                },
                "991": {
                    "spaceBetween": 30,
                    "slidesPerView": 2,
                },
                "1199": {
                    "spaceBetween": 30,
                    "slidesPerView": 3,
                }
            }
          
        });

        

        
        function myFunction() {
          var x = document.getElementById("myDIV");
          if (x.style.display === "none") {
            x.style.display = "block";
          } else {
            x.style.display = "none";
          }
        }
    </script>
</body>
</html>
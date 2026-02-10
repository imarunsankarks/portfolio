<footer>
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4 z-9">

                <div class="lets-talk">
                    <div class="text">
                    </div>
                    <a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Contact') ))->post->ID ); ?>" class="footer-enquire">Enquire Now &nbsp; <i
                            class="fal fa-arrow-right"></i></a>
                </div>
                <div class="connect-with-us my-5">
                    <p>Connect with us</p>
                    <ul>
                        <li>
                            <a href="https://www.linkedin.com/company/resurgent-av-integrators-pvt-ltd" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/resurgent.co.in/" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/resurgent_av/" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/UC8gaRQafvGFIn4mVEC6ulGw" target="_blank"><i
                                    class="fab fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="affiliate-partner">
                    <p>Affiliate Partner With</p>
                    <ul>
                        <li>
                            <a href="https://www.avixa.org/" target="_blank">
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/home/avixa.webp" alt="Avixa Logo" class="img-fluid">
                            </a>
                        </li>
                        <li>
                            <a href="https://psni.org/" target="_blank">
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/home/psni.webp" alt="Psni Logo" class="img-fluid">
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
            <!-- <div class="col-md-1"></div> -->

            <div class="col-lg-8 footer-link-p-correction">
                <div class="row g-4 justify-content-end justify-footer-mob">
                    <div class="col-lg-3 col-12">
                        <div class="footer-menu">
                            <p>Company</p>
                            <ul>
                                <li><a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'About') ))->post->ID ); ?>">About Us</a></li>
                                <li><a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'PSNI') ))->post->ID ); ?>">PSNI- Global Alliance</a></li>
                                <li><a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Culture') ))->post->ID ); ?>">Our Culture</a></li>
                                <li><a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Careers') ))->post->ID ); ?>">Careers</a></li>
                                <li><a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Blogs') ))->post->ID ); ?>">Blogs</a></li>
                                <li><a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Success Stories') ))->post->ID ); ?>">Success Stories</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-12">
                        <div class="footer-menu">
                            <p>Sectors</p>
                            <ul>
                                <li><a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Corporate') ))->post->ID ); ?>">Corporate</a></li>
                                <li><a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Education') ))->post->ID ); ?>">Education</a></li>
                                <li><a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Healthcare') ))->post->ID ); ?>">Healthcare</a></li>
                                <li><a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Public Sector') ))->post->ID ); ?>">Public Sector</a></li>
                                <li><a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'retail') ))->post->ID ); ?>">Retail</a></li>
                                <li><a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Residential') ))->post->ID ); ?>">Residential</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-12">
                        <div class="footer-menu">
                            <p>Products</p>
                            <ul>
                                <li><a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Microsoft Surface Hub 2S') ))->post->ID ); ?>">Microsoft Surface Hub 2S</a></li>
                                <li><a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Samsung Flip') ))->post->ID ); ?>">Samsung Flip</a></li>
                                <li><a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Microsoft Teams') ))->post->ID ); ?>">Microsoft Teams</a></li>
                                <li><a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Jabra Panacast') ))->post->ID ); ?>">Jabra PanaCast</a></li>
                                <li><a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'PADS4 Digital Signage') ))->post->ID ); ?>">PADS4 Digital Signage</a></li>
                                <li><a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Crestron Flex') ))->post->ID ); ?>">Crestron Flex</a></li>
                                <li><a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Surge') ))->post->ID ); ?>">Surge+</a></li>
                                <li><a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Airserver') ))->post->ID ); ?>">AirServer</a></li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-12">
                        <div class="footer-menu">
                            <p>Brands</p>
                            <ul>
                                <li><a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Microsoft Teams Rooms') ))->post->ID ); ?>">Microsoft Teams Rooms</a></li>
                                <li><a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Cisco') ))->post->ID ); ?>">Cisco</a></li>
                                <li><a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Jabra') ))->post->ID ); ?>">Jabra</a></li>
                                <li><a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Logitech') ))->post->ID ); ?>">Logitech</a></li>
                                <li><a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Zoom Rooms') ))->post->ID ); ?>">Zoom Rooms</a></li>
                                <li><a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'HP') ))->post->ID ); ?>">HP</a></li>
                                <li><a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Yealink') ))->post->ID ); ?>">Yealink</a></li>
                                <li><a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'SIMStation') ))->post->ID ); ?>">SIMStation</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="t-c">
    <div class="container p-0">
        <div class="row g-3 g-md-0 align-items-center">
            <div class="col-md-6">
                <p>Copyright @ 2024 Resurgent. All rights reserved.</p>
            </div>
            <div class="col-md-6">
                <div class="row text-md-end justify-md-content-end  justify-content-center">
                    <div class="col-3">
                        <a href="<?php echo get_template_directory_uri(); ?>/assets/common/Privacy-Policy-Resurgent.pdf" target="_blank">Privacy Policy</a>
                    </div>
                    <div class="col-3">
                        <a href="<?php echo get_template_directory_uri(); ?>/assets/common/Terms-of-Use-Resurgent-.pdf" target="_blank">Terms of Use</a>
                    </div>
                    <div class="col-3">
                        <a href="<?php echo get_template_directory_uri(); ?>/assets/common/Resurgent-Cookie-policy.pdf" target="_blank">Cookies Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
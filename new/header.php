    <header id="header">
        <div class="container menu_bar">
            <nav>
                <div class="col-12">
                    <div class="d-flex navigation">
                        <a href="<?php echo home_url(); ?>" class="navigation-brand pull-right">
                            <div class="header-logo">
                                <img loading="lazy"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/common/resurgent.webp"
                                    alt="">
                            </div>
                        </a>
                        <ul class="navigation-list list-unstyled pull-right">
                        <li class="with_dropdown">
                                <a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Room Configurator') ))->post->ID ); ?>"
                                    class="main-dropdown">
                                    <span class="">
                                    Room Configurator
                                    </span>
                                </a>
                            </li>
                            <li class="with_dropdown">
                                <a href="javascript:void(0)" class="main-dropdown">
                                    <span class="">
                                        Solutions
                                    </span>
                                    <i class="fas fa-chevron-down"></i>
                                </a>
                                <div class="megamenu">
                                    <ul class="sub_menu">
                                        <li class="sub_item">
                                            <div class="content">
                                                <a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Corporate') ))->post->ID ); ?>"
                                                    aria-label="Corporate solutions">
                                                    Corporate
                                                </a>
                                            </div>
                                        </li>

                                        <li class="sub_item">
                                            <div class="content">
                                                <a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Education') ))->post->ID ); ?>"
                                                    aria-label="Education solutions">Education</a>
                                            </div>
                                        </li>

                                        <li class="sub_item">
                                            <div class="content">
                                                <a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Healthcare') ))->post->ID ); ?>"
                                                    aria-label="healthcare solutions">Healthcare</a>
                                            </div>
                                        </li>

                                        <li class="sub_item">
                                            <div class="content">
                                                <a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Public Sector') ))->post->ID ); ?>"
                                                    aria-label="Public sector solutions">Public
                                                    Sector</a>
                                            </div>
                                        </li>

                                        <li class="sub_item">
                                            <div class="content">
                                                <a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'retail') ))->post->ID ); ?>"
                                                    aria-label="Solutions in retail sector">Retail</a>
                                            </div>
                                        </li>

                                        <li class="sub_item">
                                            <div class="content">
                                                <a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Residential') ))->post->ID ); ?>"
                                                    aria-label="Residential Solutions">Residential</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="with_dropdown">
                                <a href="javascript:void(0)" class="main-dropdown">
                                    <span class="">
                                        Products
                                    </span>
                                    <i class="fas fa-chevron-down"></i>
                                </a>
                                <div class="megamenu">
                                    <ul class="sub_menu column-4 without-lefttext">
                                        <li class="work_sub_item sub_item">

                                            <div class="content">
                                                <a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Microsoft Surface Hub 2S') ))->post->ID ); ?>"
                                                    aria-label="Microsoft Surface Hub 2S">
                                                    Microsoft Surface Hub 2S
                                                </a>
                                            </div>
                                        </li>
                                        <li class="work_sub_item sub_item">

                                            <div class="content">
                                                <a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Samsung Flip') ))->post->ID ); ?>"
                                                    aria-label="Samsung Flip">
                                                    Samsung Flip
                                                </a>
                                            </div>
                                        </li>

                                        <li class="work_sub_item sub_item">

                                            <div class="content">
                                                <a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Microsoft Teams') ))->post->ID ); ?>"
                                                    aria-label="Microsoft Teams">
                                                    Microsoft Teams
                                                </a>
                                            </div>
                                        </li>


                                        <li class="work_sub_item sub_item">

                                            <div class="content">
                                                <a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Jabra Panacast') ))->post->ID ); ?>"
                                                    aria-label="Jabra PanaCast">
                                                    Jabra PanaCast
                                                </a>
                                            </div>
                                        </li>

                                        <li class="work_sub_item sub_item">

                                            <div class="content">
                                                <a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'PADS4 Digital Signage') ))->post->ID ); ?>"
                                                    aria-label="PADS4 Digital Signage">
                                                    PADS4 Digital Signage
                                                </a>
                                            </div>
                                        </li>

                                        <li class="work_sub_item sub_item">
                                            <div class="content">
                                                <a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Crestron Flex') ))->post->ID ); ?>"
                                                    aria-label="Crestron Flex">
                                                    Crestron Flex
                                                </a>
                                            </div>
                                        </li>


                                        <li class="work_sub_item sub_item">
                                            <div class="content">
                                                <a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Surge') ))->post->ID ); ?>"
                                                    aria-label="Surge+">
                                                    Surge+
                                                </a>
                                            </div>
                                        </li>

                                        <li class="work_sub_item sub_item">
                                            <div class="content">
                                                <a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Airserver') ))->post->ID ); ?>"
                                                    aria-label="AirServer">
                                                    AirServer
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="with_dropdown">
                                <a href="javascript:void(0)" class="main-dropdown">
                                    <span class="">
                                        Brands
                                    </span>
                                    <i class="fas fa-chevron-down"></i>
                                </a>
                                <div class="megamenu">
                                    <ul class="sub_menu column-4 without-lefttext">
                                        <li class="work_sub_item sub_item">
                                            <div class="content">
                                                <a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Microsoft Teams Rooms') ))->post->ID ); ?>"
                                                    aria-label="Microsoft Teams Rooms">
                                                    Microsoft Teams Rooms
                                                </a>
                                            </div>
                                        </li>
                                        <li class="work_sub_item sub_item">
                                            <div class="content">
                                                <a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Cisco') ))->post->ID ); ?>"
                                                    aria-label="Cisco">
                                                    Cisco
                                                </a>
                                            </div>
                                        </li>
                                        <li class="work_sub_item sub_item">
                                            <div class="content">
                                                <a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Jabra') ))->post->ID ); ?>"
                                                    aria-label="Jabra">
                                                    Jabra
                                                </a>
                                            </div>
                                        </li>
                                        <li class="work_sub_item sub_item">
                                            <div class="content">
                                                <a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Logitech') ))->post->ID ); ?>"
                                                    aria-label="Logitech">
                                                    Logitech
                                                </a>
                                            </div>
                                        </li>
                                        <li class="work_sub_item sub_item">
                                            <div class="content">
                                                <a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Zoom Rooms') ))->post->ID ); ?>"
                                                    aria-label="Zoom rooms">
                                                    Zoom Rooms
                                                </a>
                                            </div>
                                        </li>
                                        <li class="work_sub_item sub_item">
                                            <div class="content">
                                                <a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'HP') ))->post->ID ); ?>"
                                                    aria-label="HP">
                                                    HP
                                                </a>
                                            </div>
                                        </li>
                                        <li class="work_sub_item sub_item">
                                            <div class="content">
                                                <a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Yealink') ))->post->ID ); ?>"
                                                    aria-label="Yealink">
                                                    Yealink
                                                </a>
                                            </div>
                                        </li>
                                        <li class="work_sub_item sub_item">
                                            <div class="content">
                                                <a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'SIMStation') ))->post->ID ); ?>"
                                                    aria-label="SIMStation">
                                                    SIMStation
                                                </a>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </li>

                            <li class="with_dropdown">
                                <a href="javascript:void(0)" class="main-dropdown">
                                    <span class="">
                                        Company
                                    </span>
                                    <i class="fas fa-chevron-down"></i>
                                </a>
                                <div class="megamenu">
                                    <ul class="sub_menu column-4 without-lefttext">
                                        <li class="work_sub_item sub_item">

                                            <div class="content">
                                                <a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'About') ))->post->ID ); ?>"
                                                    aria-label="About resurgent">
                                                    About Us
                                                </a>
                                            </div>
                                        </li>
                                        <li class="work_sub_item sub_item">

                                            <div class="content">
                                                <a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'PSNI') ))->post->ID ); ?>"
                                                    aria-label="PSNI Global Alliance">
                                                    PSNI Global Alliance
                                                </a>
                                            </div>
                                        </li>

                                        <li class="work_sub_item sub_item">

                                            <div class="content">
                                                <a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Culture') ))->post->ID ); ?>"
                                                    aria-label="Company culture">
                                                    Our Culture
                                                </a>
                                            </div>
                                        </li>

                                        <li class="work_sub_item sub_item">

                                            <div class="content">
                                                <a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Careers') ))->post->ID ); ?>"
                                                    aria-label="Careers">
                                                    Careers
                                                </a>
                                            </div>
                                        </li>

                                        <li class="work_sub_item sub_item">

                                            <div class="content">
                                                <a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Blogs') ))->post->ID ); ?>"
                                                    aria-label="Blogs">
                                                    Blogs
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="with_dropdown">
                                <a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Success Stories') ))->post->ID ); ?>"
                                    class="main-dropdown">
                                    <span class="">
                                        Success Stories
                                    </span>
                                </a>
                            </li>




                            <li>
                                <a href="<?php echo get_permalink( (new WP_Query( array('post_type' => 'page', 'title' => 'Contact') ))->post->ID ); ?>"
                                    aria-label="contact us">
                                    <div class="banner-button button-hover1 m-0">
                                        <button>Contact Us</button>
                                    </div>
                                </a>
                            </li>
                        </ul>

                        <label class="hamburger toggle">
                            <input type="checkbox">
                            <svg viewBox="0 0 32 32" id="hamburger">
                                <path class="line line-top-bottom"
                                    d="M27 10 13 10C10.8 10 9 8.2 9 6 9 3.5 10.8 2 13 2 15.2 2 17 3.8 17 6L17 26C17 28.2 18.8 30 21 30 23.2 30 25 28.2 25 26 25 23.8 23.2 22 21 22L7 22">
                                </path>
                                <path class="line" d="M7 16 27 16"></path>
                            </svg>
                        </label>

                    </div>
                    <div class="overlay"></div>
                </div>
            </nav>
        </div>
    </header>
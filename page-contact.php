<?php
/*
 * Template Name: Contact Form Template
 */
get_header();

?>

    <div class="page-container">
        <div class="nav-wrapper">
            <div class="nav-bar">

                <div class="btn-navbar">
                    <a id="mobile-nav-button-minus" href="#" style="display: none;"><img
                            src="<?php echo wp_get_attachment_url(337); ?>" alt="Mobile Navigation"/></a>
                    <a id="mobile-nav-button-plus" href="#"><img src="<?php echo wp_get_attachment_url(336); ?>"
                                                                 alt="Mobile Navigation"/></a>
                </div>

                <div class="nav">

                    <ul class="tabs">
                        <li>
                            <a class="menu_link" id="home_link" href="/wp/home">
                                Home
                            </a>
                        </li>
                        <li>
                            <a class="menu_link" id="about_link" href="/wp/about-us">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a class="menu_link" id="services_link" href="/wp/services">
                                Services
                            </a>
                        </li>
                        <li>
                            <a class="menu_link" id="processes_link" href="/wp/our-process">
                                Our Process
                            </a>
                        </li>
                        <li>
                            <a class="menu_link" id="contact_link" href="/wp/contact-us">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>

                <div id="mobile-tab-nav">
                    <?php
                    $args = array(
                        'theme_location' => 'primary',
                        'depth' => 3,
                        'container' => false,
                        'menu_class' => 'mobile-nav',
                        'fallback_cb' => false,
                        'walker' => new heavenly_bootstrap_walker_nav_menu()
                    );
                    wp_nav_menu($args);
                    ?>
                </div>
            </div>
        </div>
        <div class="content-container">
            <div class="breadcrumbs">
                <?php if (function_exists('bcn_display')) {
                    bcn_display();
                }?>
                <div id="search-form">
                    <?php get_search_form(); ?>
                </div>
            </div>

            <div class="row-fluid">
                <div class="span12">
                    <div id="single-post post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <?php

                        while (have_posts()): the_post(); ?>

                            <div <?php post_class('post'); ?>>
                                <div class="clear"></div>
                                <h1 id="contact-title" class="entry-title"><?php the_title(); ?></h1>

                                <div class="entry-content">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php get_footer(); ?>
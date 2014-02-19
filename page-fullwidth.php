<?php
/*
Template Name: Full Width 
*/
get_header();
?>
<?php if (is_page('Client Checklist')) : ?>
    <script>
        $(document).ready(function () {
            $('#checklist-opening').after("<div id='mobile-process-flow'><img src='<?php echo wp_get_attachment_url(249); ?>' alt='checklist-guy' /><p class='wp-caption-text'>Have you checked everything?</p></div>");
        });
    </script>
<?php elseif (is_page('Our Process')) : ?>
    <script>
        $(document).ready(function () {
            $('#process-opening').before("<div id='mobile-process-flow' style='clear: both;'><img src='<?php echo wp_get_attachment_url(252); ?>' alt='process-flow' width='200' height='300' /></div>");
        });
    </script>
<?php
elseif (is_page('About Us')) : ?>
    <script>
        $(document).ready(function () {
            $('.content-container').css("background", "url('<?php echo wp_get_attachment_url(312); ?>')");
        });
    </script>
<?php endif; ?>
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
                <?php if (function_exists('bcn_display') && !is_page('Home')) {
                    bcn_display();
                }?>
                <?php if (!is_page('Home')) : ?>
                    <div id="search-form"><?php get_search_form(); ?></div>
                <?php endif; ?>
            </div>

            <div class="row-fluid">


                <div class="span12">
                    <div id="single-post_post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <?php

                        if (is_page("Our Process")) : ?>

                            <div id="question">
                                <script>
                                    $(document).ready(function () {
                                        $('#q1').click(function () {
                                            if ($('#a1').is(":visible")) {
                                                $('#a1').hide();
                                            } else {
                                                $('#a1').show();
                                            }
                                            return false;
                                        });
                                        $('#q2').click(function () {
                                            if ($('#a2').is(":visible")) {
                                                $('#a2').hide();
                                            } else {
                                                $('#a2').show();
                                            }
                                            return false;
                                        });
                                        $('#q3').click(function () {
                                            if ($('#a3').is(":visible")) {
                                                $('#a3').hide();
                                            } else {
                                                $('#a3').show();
                                            }
                                            return false;
                                        });
                                    });</script>
                            </div>
                            <div id="answer-text">

                            </div>
                        <?php endif; ?>
                        <?php while (have_posts()): the_post(); ?>

                            <div <?php post_class('post'); ?>>
                                <div class="clear"></div>
                                <h1 class="entry-title">
                                    <?php if (!is_page('Home')) {
                                        the_title();
                                    } else {
                                        ?>
                                        Welcome to Kind Technology Services!
                                    <?php } ?>
                                </h1>

                                <div class="entry-content">
                                    <?php the_content(); ?>
                                </div>
                                <?php wp_link_pages(); ?>
                            </div>
                            <div class="mx_comments">
                                <?php comments_template(); ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php get_footer(); ?>
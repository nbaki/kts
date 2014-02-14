<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
 <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" >
<title><?php wp_title(); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.less" >
    <script src="<?php echo get_template_directory_uri(); ?>/js/less.js" type="text/javascript"></script>
    <script type="text/javascript">
        less.modifyVars({
            '@color': '<?php echo heavenly_get_theme_opts('color_scheme','#3399ff'); ?>'
        });
    </script>
    <script src="<?php echo get_childTheme_url(); ?>/scripts/jquery-1.3.2.min.js" type="text/javascript" ></script>
    <script src="<?php echo get_childTheme_url(); ?>/scripts/heavenly.js" type="text/javascript" ></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<script>
    $(document).ready(function() {
        $('.nav:first').prepend("<li><img src='<?php echo wp_get_attachment_url(353); ?>' title='Kind Technology Services' alt='Kind Technology Services' width='30' height='50'></li>");
        $('.nav:last').append("<li id='last-logo'><img src='<?php echo wp_get_attachment_url(353); ?>' title='Kind Technology Services' alt='Kind Technology Services' width='30' height='50'></li>");
        setHeaderDefaults();
        setMobileNavigation();
    });
</script>
<?php if (is_page('Home')) : ?>
    <script>
        $(document).ready(function () {
            $('#home_link').css('padding-bottom', 20);
            $('#home_link').css('border-bottom', 0);
            $('#home_link').css('border-bottom-left-radius', 0);
            $('#home_link').css('border-bottom-right-radius', 0);
            $('#home_link').css('background', '#3FAD21');
            $('.content-container').css('border-top', '7px solid #3FAD21');
            $('.content-container').css('border-bottom', '10px solid #3FAD21');        });
    </script>
<?php elseif (is_page('About Us')) : ?>
    <script>
        $(document).ready(function () {
            $('#about_link').css('padding-bottom', 20);
            $('#about_link').css('border-bottom', 0);
            $('#about_link').css('background', '#3FAD21');
            $('#about_link').css('border-bottom-left-radius', 0);
            $('#about_link').css('border-bottom-right-radius', 0);
            $('.content-container').css('border-top', '7px solid #3FAD21');
            $('.content-container').css('border-bottom', '10px solid #3FAD21');
        });
    </script>
<?php elseif (is_page('Services')) : ?>
    <script>
        $(document).ready(function () {
            $('#services_link').css('padding-bottom', 20);
            $('#services_link').css('border-bottom', 0);
            $('#services_link').css('background', '#3FAD21');
            $('#services_link').css('border-bottom-left-radius', 0);
            $('#services_link').css('border-bottom-right-radius', 0);
            $('.content-container').css('border-top', '7px solid #3FAD21');
            $('.content-container').css('border-bottom', '10px solid #3FAD21');
        });
    </script>
<?php elseif (is_page('Our Process')) : ?>
    <script>
        $(document).ready(function () {
            $('#processes_link').css('padding-bottom', 20);
            $('#processes_link').css('border-bottom', 0);
            $('#processes_link').css('background', '#3FAD21');
            $('#processes_link').css('border-bottom-left-radius', 0);
            $('#processes_link').css('border-bottom-right-radius', 0);
            $('.content-container').css('border-top', '7px solid #3FAD21');
            $('.content-container').css('border-bottom', '10px solid #3FAD21');
        });
    </script>
<?php elseif (is_page('Contact Us')) : ?>
    <script>
        $(document).ready(function () {
            $('#contact_link').css('padding-bottom', 20);
            $('#contact_link').css('border-bottom', 0);
            $('#contact_link').css('background', '#3FAD21');
            $('#contact_link').css('border-bottom-left-radius', 0);
            $('#contact_link').css('border-bottom-right-radius', 0);
            $('.content-container').css('border-top', '7px solid #3FAD21');
            $('.content-container').css('border-bottom', '10px solid #3FAD21');
        });
    </script>
<?php endif; ?>
 <header id="banner-header">
    <img class="banner" src="<?php echo wp_get_attachment_url(267); ?>" alt="Kind Technology Services" />
 </header>
<header id="banner-header-mobile">
    <img class="banner" src="<?php echo wp_get_attachment_url(341); ?>" alt="Kind Technology Services" />
</header>

<div class="nav-bar">

    <div class="btn-navbar">
        <a id="mobile-nav-button-minus" href="#" style="display: none;"><img src="<?php echo wp_get_attachment_url(337); ?>" alt="Mobile Navigation" /></a>
        <a id="mobile-nav-button-plus" href="#" ><img src="<?php echo wp_get_attachment_url(336); ?>" alt="Mobile Navigation" /></a>
    </div>

    <div class="tab_nav">

        <ul class="tabs">
<!--            <li class="logo"><img src='--><?php //echo wp_get_attachment_url(353); ?><!--' title='Kind Technology Services' alt='Kind Technology Services' width='30' height='50' />-->
<!--            </li>-->
            <li>
                <a class="menu_link" id="home_link" href="/wp/home"><img src="<?php echo get_childTheme_url(); ?>/images/home_button.png" width="20" height="20" style="margin-right: 4px;"/>
                    Home</a></li>
            <li><a class="menu_link" id="about_link" href="/wp/about-us">
                    <img src="<?php echo get_childTheme_url(); ?>/images/about_button.png" width="20" height="20" style="margin-right: 4px;"/>About Us</a></li>
            <li><a class="menu_link" id="services_link" href="/wp/services">
                    <img src="<?php echo get_childTheme_url(); ?>/images/wrench_icon.png" width="20" height="20" style="margin-right: 4px;"/>Services</a></li>
            <li><a class="menu_link" id="processes_link" href="/wp/our-process">
                    <img src="<?php echo get_childTheme_url(); ?>/images/services_button.png" width="20" height="20" style="margin-right: 4px;"/>Our Process</a></li>
            <li><a class="menu_link" id="contact_link" href="/wp/contact-us">
                    <img src="<?php echo get_childTheme_url(); ?>/images/contact_button.png" width="20" height="20" style="margin-right: 4px;"/>Contact Us</a></li>
<!--            <li class="logo"><img src='--><?php //echo wp_get_attachment_url(353); ?><!--' title='Kind Technology Services' alt='Kind Technology Services' width='30' height='50' />-->
<!--            </li>-->
        </ul>
    </div>
    <?php

/*
    $args = array(
        'theme_location' => 'primary',
        'depth' => 3,
        'container' => false,
        'menu_class' => 'nav',
        'fallback_cb' => false,
        'walker' => new heavenly_bootstrap_walker_nav_menu()
    );


    wp_nav_menu($args); */
    ?>
</div>
<?php
if(is_front_page()) //get_template_part('homepage','top');
?>

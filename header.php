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
<!--<script>-->
<!--    $(document).ready(function() {-->
<!--        setHeaderDefaults();-->
<!--        setMobileNavigation();-->
<!--    });-->
<!--</script>-->
<?php //if (is_page('Home')) : ?>
<!--    <script>-->
<!--        $(document).ready(function () {-->
<!--            setActiveTab('Home');-->
<!--        });-->
<!--    </script>-->
<?php //elseif (is_page('About Us')) : ?>
<!--    <script>-->
<!--        $(document).ready(function () {-->
<!--            setActiveTab('About Us');-->
<!--        });-->
<!--    </script>-->
<?php //elseif (is_page('Services')) : ?>
<!--    <script>-->
<!--        $(document).ready(function () {-->
<!--            setActiveTab('Services');-->
<!--        });-->
<!--    </script>-->
<?php //elseif (is_page('Our Process')) : ?>
<!--    <script>-->
<!--        $(document).ready(function () {-->
<!--            setActiveTab('Our Process');-->
<!--        });-->
<!--    </script>-->
<?php //elseif (is_page('Contact Us')) : ?>
<!--    <script>-->
<!--        $(document).ready(function () {-->
<!--            setActiveTab('Contact Us');-->
<!--        });-->
<!--    </script>-->
<?php //endif; ?>
 <header id="banner-header">
     <p>Kind Technology Services</p>
<!--    <img class="banner" src="--><?php //echo wp_get_attachment_url(391); ?><!--" alt="Kind Technology Services" />-->
 </header>
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
<?php
if(is_front_page()) //get_template_part('homepage','top');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
    <?php

        $safari = strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') ? true : false;
        $msie = strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') ? true : false;
        $chrome = strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') ? true : false;
        $v6_safari = strpos($_SERVER['HTTP_USER_AGENT'], 'Version/6.');
        $v5_safari = strpos($_SERVER['HTTP_USER_AGENT'], 'Version/5.');
        if ($safari && !($v6_safari || $v5_safari || $chrome)) {
            echo '<link rel="stylesheet" href="http://sourendev.scilsnet.rutgers.edu/wp/wp-content/themes/kindtech/styles/safari.css" type="text/css" />';
        }
        else if ($msie) {

            echo '<link rel="stylesheet" href="http://sourendev.scilsnet.rutgers.edu/wp/wp-content/themes/kindtech/styles/msie.css" type="text/css" />';
            echo "
            <script>
                $(document).ready(function() {
                    if ($(window).width() <= 800) {
                        ieStyle();
                    }
                });
            </script>";
        }

    ?>
</head>
<body <?php body_class(); ?>>
<script>
    $(document).ready(function() {
        setHeaderDefaults();
        setMobileNavigation();
    });
</script>
<?php
    $menus = wp_get_nav_menus();
    $menu_items = wp_get_nav_menu_items($menus[0]);

    foreach ($menu_items as $menu_item) {
        if (is_page($menu_item->title)) : ?>
            <script>
                $(document).ready(function() {
                    setActiveTab("<?php echo $menu_item->title; ?>");
                });
            </script>
        <?php endif; ?>
<?php } ?>

<header id="banner-header">
    <div id="banner">
        <img class="banner" src="<?php echo wp_get_attachment_url(407);?>" alt="Kind Technology Services" />
    </div>
</header>
<div class="nav-wrapper">
    <div class="btn-navbar">
        <a id="mobile-nav-button-minus" href="#" style="display: none;"><img
                src="<?php echo wp_get_attachment_url(337); ?>" alt="Mobile Navigation"/></a>
        <a id="mobile-nav-button-plus" href="#"><img src="<?php echo wp_get_attachment_url(336); ?>" alt="Mobile Navigation"/></a>
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
    <div class="nav-bar">
        <?php
        $args = array(
            'theme_location' => 'primary',
            'depth' => 0,
            'container' => 'div',
            'container_class' => 'nav',
            'menu_class' => 'tabs',
            'fallback_cb' => false,
            'walker' => new heavenly_bootstrap_walker_nav_menu()
        );
        wp_nav_menu($args);
        ?>
    </div>
</div>
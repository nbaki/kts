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
     <div class="multi-left">&nbsp;</div>
     <div class="image"><img class="banner" src="<?php echo wp_get_attachment_url(413);?>" alt="Kind Technology Services" /></div>
     <div class="multi-right">&nbsp;</div>
     <div style="clear:both;"></div>
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
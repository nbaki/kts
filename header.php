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
<?php if (is_page('Home')) : ?>
    <script>
        $(document).ready(function () {
            setActiveTab('Home');
        });
    </script>
<?php elseif (is_page('About Us')) : ?>
    <script>
        $(document).ready(function () {
            setActiveTab('About Us');
        });
    </script>
<?php elseif (is_page('Services')) : ?>
    <script>
        $(document).ready(function () {
            setActiveTab('Services');
        });
    </script>
<?php elseif (is_page('Our Process')) : ?>
    <script>
        $(document).ready(function () {
            setActiveTab('Our Process');
        });
    </script>
<?php elseif (is_page('Contact Us')) : ?>
    <script>
        $(document).ready(function () {
            setActiveTab('Contact Us');
        });
    </script>
<?php endif; ?>
 <header id="banner-header">
    <img class="banner" src="<?php echo wp_get_attachment_url(391); ?>" alt="Kind Technology Services" />
 </header>
<?php
if(is_front_page()) //get_template_part('homepage','top');
?>

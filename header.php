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
        //$('.nav:first').prepend("<li><img src='<?php echo wp_get_attachment_url(353); ?>' title='Kind Technology Services' alt='Kind Technology Services' width='30' height='50'></li>");
        //$('.nav:last').append("<li id='last-logo'><img src='<?php echo wp_get_attachment_url(353); ?>' title='Kind Technology Services' alt='Kind Technology Services' width='30' height='50'></li>");
        setHeaderDefaults();
        setMobileNavigation();
    });
</script>
<?php if (is_page('Home')) : ?>
    <script>
        $(document).ready(function () {
            $('#home_link').css('padding-bottom', 19);
            $('#home_link').css('border-bottom', 0);
            $('#home_link').css('border-bottom-left-radius', 0);
            $('#home_link').css('border-bottom-right-radius', 0);
            $('#home_link').css('background', '#3FAD21');
            $('.nav-wrapper').css('border-bottom', '7px solid #3FAD21');
            $('.row-fluid').css('border-bottom', '10px solid #3FAD21');
        });
    </script>
<?php elseif (is_page('About Us')) : ?>
    <script>
        $(document).ready(function () {
            $('#about_link').css('padding-bottom', 19);
            $('#about_link').css('border-bottom', 0);
            $('#about_link').css('background', '#3FAD21');
            $('#about_link').css('border-bottom-left-radius', 0);
            $('#about_link').css('border-bottom-right-radius', 0);
            $('.nav-wrapper').css('border-bottom', '7px solid #3FAD21');
            $('.row-fluid').css('border-bottom', '10px solid #3FAD21');
        });
    </script>
<?php elseif (is_page('Services')) : ?>
    <script>
        $(document).ready(function () {
            $('#services_link').css('padding-bottom', 19);
            $('#services_link').css('border-bottom', 0);
            $('#services_link').css('background', '#3FAD21');
            $('#services_link').css('border-bottom-left-radius', 0);
            $('#services_link').css('border-bottom-right-radius', 0);
            $('.nav-wrapper').css('border-bottom', '7px solid #3FAD21');
            $('.row-fluid').css('border-bottom', '10px solid #3FAD21');
        });
    </script>
<?php elseif (is_page('Our Process')) : ?>
    <script>
        $(document).ready(function () {
            $('#processes_link').css('padding-bottom', 19);
            $('#processes_link').css('border-bottom', 0);
            $('#processes_link').css('background', '#3FAD21');
            $('#processes_link').css('border-bottom-left-radius', 0);
            $('#processes_link').css('border-bottom-right-radius', 0);
            $('.nav-wrapper').css('border-bottom', '7px solid #3FAD21');
            $('.row-fluid').css('border-bottom', '10px solid #3FAD21');
        });
    </script>
<?php elseif (is_page('Contact Us')) : ?>
    <script>
        $(document).ready(function () {
            $('#contact_link').css('padding-bottom', 19);
            $('#contact_link').css('border-bottom', 0);
            $('#contact_link').css('background', '#3FAD21');
            $('#contact_link').css('border-bottom-left-radius', 0);
            $('#contact_link').css('border-bottom-right-radius', 0);
            $('.nav-wrapper').css('border-bottom', '7px solid #3FAD21');
            $('.row-fluid').css('border-bottom', '10px solid #3FAD21');
        });
    </script>
<?php endif; ?>
 <header id="banner-header">
    <img class="banner" src="<?php echo wp_get_attachment_url(391); ?>" alt="Kind Technology Services" />
 </header>
<?php
if(is_front_page()) //get_template_part('homepage','top');
?>

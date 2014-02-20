<?php
/*
 * Template Name: Service Template
 * Author: Nasem Baki
 */
get_header();
?>
    <script>
        $(document).ready(function () {
            setMobileServicePageLinks();
        });
    </script>
    <div class="page-container">
        <div class="content-container">
            <div class="row-fluid">
                <div class="span12">
                    <div id="single-post post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="entry-content">
                            <div id="search-form">
                                <?php get_search_form(); ?>
                            </div>
                            <h1 class="entry-title"><?php the_title(); ?></h1>

                            <div class="mobile-services">
                                <ul class="mobile-services">
                                    <li><a class="design-link content-link" href="#">Web Design</a></li>
                                    <li><a class="dev-link content-link" href="#">Web Development</a></li>
                                    <li><a class="mark-link content-link" href="#">Web Branding & Marketing</a></li>
                                    <li><a class="host-link content-link" href="#">Web Hosting</a></li>
                                </ul>
                            </div>
                            <table class="service-table">
                                <tr class="even-row">
                                    <td>
                                        <div>
                                            <img class="service-img" src="<?php echo wp_get_attachment_url(253); ?>"
                                                 title="Kind Technology Web Design"
                                                 alt="Kind Technology Web Design"/>
                                        </div>
                                    </td>
                                    <td id="design">
                                        <div class="right-content">
                                            <h4><?php echo get_the_title(236); ?></h4>

                                            <p>
                                                <?php echo getPageContent(236); ?>
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="even-row">
                                    <td>
                                        <div>
                                            <img class="service-img" src="<?php echo wp_get_attachment_url(254); ?>"
                                                 title="Kind Technology Development"
                                                 alt="Kind Technology Development"/>
                                        </div>
                                    </td>
                                    <td id="dev">
                                        <div class="right-content">
                                            <h4><?php echo get_the_title(234); ?></h4>

                                            <p>
                                                <?php echo getPageContent(234); ?>
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="even-row">
                                    <td>
                                        <div>
                                            <img class="service-img" width="100%"
                                                 src="<?php echo wp_get_attachment_url(246); ?>"
                                                 title="Kind Technology Marketing"
                                                 alt="Kind Technology Marketing"/>
                                        </div>
                                    </td>
                                    <td id="branding">
                                        <div class="right-content">
                                            <h4><?php echo get_the_title(238); ?></h4>

                                            <p>
                                                <?php echo getPageContent(238); ?>
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="even-row">
                                    <td>
                                        <div>
                                            <img class="service-img" src="<?php echo wp_get_attachment_url(251); ?>"
                                                 title="Kind Technology Hosting"
                                                 alt="Kind Technology Hosting"/>
                                        </div>
                                    </td>
                                    <td id="hosting">
                                        <div class="right-content">
                                            <h4><?php echo get_the_title(242); ?></h4>

                                            <p>
                                                <?php echo getPageContent(242); ?>
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                            </table>

                        </div>
                    </div>
                    <div id="service-content-mobile">
                        <div class="services" id="design-content" style="display: none;">
                            <h4><?php echo get_the_title(236); ?></h4>

                            <p>
                                <?php echo getPageContent(236); ?>
                            </p>
                        </div>
                        <div class="services" id="dev-content" style="display: none;">
                            <h4><?php echo get_the_title(234); ?></h4>

                            <p>
                                <?php echo getPageContent(234); ?>
                            </p>
                        </div>
                        <div class="services" id="marketing-content" style="display: none;">
                            <h4><?php echo get_the_title(238); ?></h4>

                            <p>
                                <?php echo getPageContent(238); ?>
                            </p>
                        </div>

                        <div class="services" id="hosting-content" style="display: none;">
                            <h4><?php echo get_the_title(242); ?></h4>
                            <?php echo getPageContent(242); ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


<?php get_footer(); ?>
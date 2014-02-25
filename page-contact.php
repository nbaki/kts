<?php
/*
 * Template Name: Contact Form Template
 * Author: Nasem Baki

 */
get_header();

?>
    <div class="page-container">
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
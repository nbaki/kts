<div class="footer-area">
<!--<div class="container">-->
<!--<div class="row-fluid">-->
<!--<div class="header">-->
<!--<div class="span0">-->
    <div class="footer-section">
        <table class="footer-table">
            <tr>
                <td><?php if(!dynamic_sidebar('footer1')) echo ""; ?></td>
                <td class="footer-nav"><?php
                    $args = array(
                        'theme_location'  => '',
                        'menu'            => 'Footer Menu All Pages',
                        'container'       => 'div',
                        'menu_class'      => 'footer_menu',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                    );
                    wp_nav_menu($args);
                    ?></td>
                <td>
                    <div>Copyright &copy; <?php echo heavenly_get_theme_opts('footer_text', get_bloginfo('sitename')); ?></div>
                </td>
            </tr>


        </table>
    </div>
<?php if(!dynamic_sidebar('footer3')) echo ""; ?>
<!--</div>-->
<div class="clear"></div>
<!--</div>-->
<!--</div> -->
<!--</div>-->

</div>
</body>
</html>
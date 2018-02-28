<div class="sidebar">
    <ul>
        <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar()): else: ?>
            <li id="search">
                <?php include(TEMPLATEPATH . '/searchform.php'); ?>
            </li>
            <li id="calendar"><h2><?php _e('Calendar'); ?></h2>
                <?php get_calendar(); ?>
            </li>
            <?php wp_list_pages('depth=38&title_li=<h2>Pages</h2>'); ?>
            <li><h2><?php _e('Categories'); ?></h2>
                <ul>
                    <?php wp_list_cats('sot_column=name&optioncount=1&hierarchical=0'); ?>
                </ul>
            </li>
            <li><h2><?php _e('Archives'); ?></h2>
                <ul>
                    <?php wp_get_archives('type=monthly'); ?>
                </ul>
            </li>
            <?php wp_list_bookmarks('title_li=<h2>友情链接</h2>'); ?>

            <li><h2><?php _e('Meta'); ?></h2>
                <ul>
                    <?php wp_register(); ?>
                    <li><?php wp_loginout(); ?></li>
                    <?php wp_meta(); ?>
                </ul>
            </li>
        <?php endif; ?>
    </ul>
</div>
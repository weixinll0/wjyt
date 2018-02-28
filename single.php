<?php
    get_header();
?>
<div class="single">
    <?php if(have_posts()): ?>
    <?php while (have_posts()): the_post();  ?>
            <div class="titleFrame">
            <label class="title" for=""><?php the_title() ?></label>
            <label class="count"><img src="<?php echo get_bloginfo('template_url'); ?>/img/icon-eye.png" /><span><?php if(function_exists('the_views')) { process_postviews(); the_views();  } ?></span></label>
            <label class="time"><?php the_time('Y.n.j') ?></label>
        </div>
        <div class="content">
            <?php
                if (in_category('3d')) {
                    include(TEMPLATEPATH . '/single-3d.php');
                } else if (in_category('video')) {
                    include(TEMPLATEPATH . '/single-video.php');
                } else {
                    the_content();
                }
            ?>
        </div>
    <?php endwhile; ?>
    <?php else: ?>
        <div class="post">
            <h2><?php _e('Not Found'); ?></h2>
        </div>
    <?php endif; ?>
</div>
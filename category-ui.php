<?php get_header(); ?>

<?php
$selectItem = 'menu-case';
$subIndex = 3;
$tag = 'ui';
include(TEMPLATEPATH . '/menu.php');
include(TEMPLATEPATH . '/popDialog.php');
?>

<div class="main-container">
    <img class="title title-2" src="<?php echo get_bloginfo('template_url'); ?>/img/title-ui.png">
    <figure><img class="bannerImg" src="<?php echo get_bloginfo('template_url'); ?>/img/22-banner.jpg"></figure>

    <div class="posts-container">
        <div class="posts">
            <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'category_name' => $tag,
                'showposts' => 10,
                'paged' => $paged
            );
            query_posts($args);
            ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <a href="javascript:showPageInfo('<?php the_permalink() ?>');"><article>
                    <div class="coverBox">
                        <img src="<?php echo get_bloginfo('template_url'); ?>/img/icon-click.png">
                        <p>点击查看</p>
                    </div>
                    <figure><img src="<?php the_post_thumbnail_url(); ?>" alt="..."></figure>
                    <div class="caption">
                        <label class="a_title"><?php the_title(); ?></label>
                        <label class="a_time"><img class="icon-date" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-date.png" /><?php the_time('Y.n.j') ?></label>
                    </div>
                </article></a>
            <?php endwhile; ?>
        </div>
    </div>
    <?php get_footer(); ?>
</div>

<?php
include(TEMPLATEPATH . '/masonry.php')
?>
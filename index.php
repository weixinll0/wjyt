<?php get_header(); ?>

<?php
    $tag = 'case';
    $selectItem = 'menu-home';
    include(TEMPLATEPATH . '/menu.php');
    include(TEMPLATEPATH . '/popDialog.php');
?>

<div class="main-container">
    <img class="title" src="<?php echo get_bloginfo('template_url'); ?>/img/title-1.png">
    <figure><img class="bannerImg" src="<?php echo get_bloginfo('template_url'); ?>/img/1-banner.jpg"></figure>

    <div class="posts-container">
        <div class="posts">
            <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'category_name' => 'case',
                    'showposts' => 10,  //展示6篇文章
                    'paged' => $paged
                );
                query_posts($args);
            ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <a href="javascript:showPageInfo( '<?php the_permalink() ?>' ); " title="%POST_TITLE%"><article>
                    <div class="coverBox">
                        <img src="<?php echo get_bloginfo('template_url'); ?>/img/icon-click.png">
                        <p>点击查看</p>
                    </div>
                    <?php
                        $category = get_the_category();
                        $icon = get_bloginfo('template_url').'/img/icon-play.png';
                        foreach ($category as $item) {
                            if ($item->parent != 0 && $item->slug === 'video') {
                    ?>
                        <img class="btnPlay" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-play.png">
                    <?php
                            }
                        }
                    ?>
                    <figure><img class="thumbnail" src="<?php the_post_thumbnail_url(); ?>" alt="..."></figure>
                    <div class="caption">
                        <label class="a_title"><?php the_title(); ?></label>
                        <label class="a_time"><img class="icon-date" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-date.png" /><span><?php the_time('Y.n.j') ?></label>
                    </div>
                </article></a>
            <?php endwhile; ?>
        </div>
<!--        --><?php //include(TEMPLATEPATH . '/page-load-status.php') ?>
    </div>
    <?php get_footer(); ?>
</div>

<?php
include(TEMPLATEPATH . '/masonry.php')
?>

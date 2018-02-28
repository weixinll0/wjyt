<?php get_header(); ?>
<div class="wrapper">
    <?php get_sidebar(); ?>
    <div class="post-list">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'category_name' => 'case',
                'showposts' => 9,  //展示6篇文章
                'paged' => $paged
            );
            query_posts($args);
            ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article> 
                    <div class="coverBox"><img src="<?php echo get_bloginfo('template_url'); ?>/img/icon-click.png"><p>点击查看</p></div>
                    <?php the_post_thumbnail(); ?>
                    <div class="caption"> <label class="a_title"><?php the_title(); ?></label> <label class="a_time"><?php the_time('Y.n.j') ?></label> </div> 
                </article>
            <?php endwhile; ?>
        <?php endwhile; ?>
    </div>
</div>

<?php get_footer(); ?>

<?php get_header(); ?>
<div class="wrapper">
    <?php get_sidebar(); ?>
    <div class="pageInfo">
        <div class="post-list">
            <?php while ( have_posts() ) : the_post(); ?>
                <article class="post">
                    <a href="<?php the_permalink() ?>">
                        <div class="post-image">
                            <figure><?php the_post_thumbnail(); ?></figure>
                            <p>了解更多</p>
                        </div>
                        <div class="post-data">
                            <h1><?php the_title(); ?></h1>
                            <p><?php the_excerpt(); ?></p>
                            <ul>
                                <li>发布于<?php the_time('Y年n月j日') ?></li>
                                <li><span class="cat-material"><?php the_author() ?></span></li>
                            </ul>
                        </div>
                    </a>
                </article>
            <?php endwhile; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>

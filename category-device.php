<?php get_header(); ?>

<?php
    $selectItem = 'menu-aboutus';
    $subIndex = 2;
    include(TEMPLATEPATH . '/menu.php')
?>

<div id="page3-3" class="main-container">
    <img class="title" src="<?php echo get_bloginfo('template_url'); ?>/img/title-1.png">
    <figure><img class="bannerImg" src="<?php echo get_bloginfo('template_url'); ?>/img/33-banner.jpg"></figure>
    <img src="<?php echo get_bloginfo('template_url'); ?>/img/33-pic1.jpg" alt="" class="division-2">
    <img src="<?php echo get_bloginfo('template_url'); ?>/img/33-pic2.jpg" alt="" class="division-2">
    <img src="<?php echo get_bloginfo('template_url'); ?>/img/33-pic3.jpg" alt="" class="division-1">
    <img src="<?php echo get_bloginfo('template_url'); ?>/img/33-pic4.jpg" alt="" class="division-3">
    <img src="<?php echo get_bloginfo('template_url'); ?>/img/33-pic5.jpg" alt="" class="division-3">
    <img src="<?php echo get_bloginfo('template_url'); ?>/img/33-pic6.jpg" alt="" class="division-3">
    <?php get_footer(); ?>
</div>
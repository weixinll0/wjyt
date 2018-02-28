<?php get_header(); ?>
    <div class="section" style="background-color: #fff">
        <!-- 动态背景 -->
        <div id="particles"></div>
    </div>

    <script type="text/javascript" src="<?php echo get_bloginfo('template_url'); ?>/js/jquery.particleground.js"></script>
    <script type="text/javascript">
        $(function () {
            $('#particles').height($(document).height()-70-54).particleground({
                dotColor: '#e3e4e5',
                lineColor: '#f0f0f0',
                curvedLines: false,
                particleRadius: 6,
                proximity: 120,
                parallax: true,
                parallaxMultiplier: 4
            });
        });
    </script>
<?php get_footer(); ?>
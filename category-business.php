<?php get_header(); ?>

<?php
    $selectItem = 'menu-aboutus';
    $subIndex = 1;
    include(TEMPLATEPATH . '/menu.php')
?>

<div id="page3-2" class="main-container">
    <img class="title" src="<?php echo get_bloginfo('template_url'); ?>/img/title-1.png">
    <figure><img class="bannerImg" src="<?php echo get_bloginfo('template_url'); ?>/img/32-banner.jpg"></figure>
    <div class="content">
        <div class="lineDiv"></div>
        <div class="btnDetail"></div>
        <div class="division-1 swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="leftDiv">
                        <div class="div1">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/img/32-video.png" alt="">
                        </div>
                        <div class="div2">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/img/32-pic1.png" alt="">
                        </div>
                    </div>
                    <div class="rightDiv">
                        <p>专业化服务的影视公司，主要从事影视广告、微电影、企业专题片、纪录片策划及制作。</p>
                        <p>电视媒体、户外媒体投放；企业形象推广和MTV；以及各种文化活动组织、策划、推广等多功能的影视广告公司。</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="leftDiv">
                        <div class="div1">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/img/32-H5.png" alt="">
                        </div>
                        <div class="div2">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/img/32-pic2.png" alt="">
                        </div>
                    </div>
                    <div class="rightDiv">
                        <p>H5的策划，设计，制作到投放推广。</p>
                        <p>专注H5技术实现,是微信H5页面、微场景、短视频、 游戏，抽奖，微信邀请函、场景应用的专业制作平台。</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="leftDiv">
                        <div class="div1">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/img/32-ui.png" alt="">
                        </div>
                        <div class="div2">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/img/32-pic3.png" alt="">
                        </div>
                    </div>
                    <div class="rightDiv">
                        <p>网站设计、户外设计、VI设计、</p>
                        <p>平面广告，海报，广告牌、</p>
                        <p>网站图形元素、标志和产品包装等。</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="leftDiv">
                        <div class="div1">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/img/32-3D.png" alt="">
                        </div>
                        <div class="div2">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/img/32-pic4.jpg" alt="">
                        </div>
                    </div>
                    <div class="rightDiv">
                        <p>从外在到内饰，通过3D互动的交流方式，使顾客身临其境的体验该车的细节以及空间。</p>
                        <p>支持各种零件和模型的复杂场景与实时效果生成，在虚拟空间内就能任意改动造型，实时调整车辆结构。</p>
                        <p>全方位的体现品牌汽车的外观设计、细节材质等体验功能。</p>
                    </div>
                </div>
            </div>
            <div class="pagination"></div>
        </div>
    </div>
    <?php get_footer(); ?>
</div>

<script type="text/javascript">
    var mainSwiper = new Swiper('.swiper-container', {
        autoplay: 3000,
        loop : false,
        onSlideChangeEnd: function(swiper){
            console.log(swiper.activeIndex);
            $('.btnDetail').css({'marginTop': (672 + 75 * (swiper.activeIndex % 4)) + 'px'});
        }
    });

    $('.btnDetail').click(function () {
        var list = ['video', 'h5', '3d', 'ui'];
        var index = mainSwiper.activeIndex % 4;
        window.location.href = '<?php echo home_url('/category/'); ?>' + list[index];
    });


</script>
<?php get_header(); ?>

<?php
    $selectItem = 'menu-aboutus';
    $subIndex = 0;
    include(TEMPLATEPATH . '/menu.php')
?>

<div id="page3-1" class="main-container">
    <img class="title" src="<?php echo get_bloginfo('template_url'); ?>/img/title-1.png">
    <figure><img class="bannerImg" src="<?php echo get_bloginfo('template_url'); ?>/img/31-banner.jpg"></figure>
    <div class="division-1 div1">
        <img class="division-2" src="<?php echo get_bloginfo('template_url'); ?>/img/31-pic1.png" alt="">
        <div class="division-2 info">
            <p>选择我们，就是选择优质的作品。</p>
            <p>选择我们，就是选择放心的服务。</p>
            <p>选择我们，就是选择了贴心的朋友！</p>
        </div>
    </div>
    <div class="division-1 div2">
        <div class="titleFrame">
            <img src="<?php echo get_bloginfo('template_url'); ?>/img/title-aboutus.png" alt="" class="">
            <p>北京网际云通科技有限公司（简称网际云通）是一家主要从事，一家独立的综合创意机构。我们坚持创意主导和独立运营，在视频广告、H5、3D全景汽车制作、平面设计上深耕细作，让每一部作品都呈现出与众不同的独特气质是我们永恒的目标。</p>
        </div>
        <div class="content">
            <div class="item">
                <p class="i-title">我们专业</p>
                <span class="square"></span>
                <p class="detail">我们拥有高素质的核心管理层和经验丰富的技术团队，行业内的精英在此汇聚。</p>
            </div>
            <div class="item">
                <p class="i-title">我们敬业</p>
                <span class="square"></span>
                <p class="detail">因为我们敢于承诺从创意到拍摄、再到后期制作，坚决只为客户提供多角度、全方位的选择与服务。</p>
            </div>
            <div class="item">
                <p class="i-title">我们专业</p>
                <span class="square"></span>
                <p class="detail">我们拥有高素质的核心管理层和经验丰富的技术团队，行业内的精英在此汇聚。</p>
            </div>
        </div>
    </div>

    <div class="division-1 div3">
        <div class="titleFrame">
            <img src="<?php echo get_bloginfo('template_url'); ?>/img/title-process.png" alt="" class="">
            <p>网际云通传播影视制作中心是以导演为核心，拥有创意、制片、美术，摄影，后期特效等完整的主创团队。</p>
            <p class="p1">并在北京，上海，广州设立独有的拍摄基地。</p>
            <p class="p2">自有主创团队使得舜风不会发生转包的情况，投入的资金会全部用于广告片的创作，同时对广告片的质量把控也非常严格。</p>
        </div>
        <div class="content">
            <div class="item">
                <div class="imgBox"></div>
                <p class="i-title">前期沟通</p>
                <p>确定合作意向/评估立项</p>
                <p>拟定合同/正式签约/支付预付款</p>
            </div>
            <div class="item">
                <div class="imgBox"></div>
                <p class="i-title">策略方向</p>
                <p>搜集资料/了解需求</p>
                <p>制作方案/产品宣传</p>
            </div>
            <div class="item">
                <div class="imgBox"></div>
                <p class="i-title">创意脚本</p>
                <p>创意脚本/分镜脚本</p>
                <p>文字脚本</p>
            </div>
            <div class="item">
                <div class="imgBox"></div>
                <p class="i-title">前期拍摄</p>
                <p>场地考察/确认拍摄时间</p>
                <p>拍摄道具/化妆服装/灯光</p>
            </div>
            <div class="item">
                <div class="imgBox"></div>
                <p class="i-title">后期制作</p>
                <p>调色/选曲</p>
                <p>配音/特效</p>
            </div>
            <div class="item">
                <div class="imgBox"></div>
                <p class="i-title">成片输出</p>
                <p>提出修改</p>
                <p>修改确定</p>
            </div>
            <div class="item">
                <div class="imgBox"></div>
                <p class="i-title">确认交片</p>
                <p>修改确定/支付余款</p>
                <p>支付成片</p>
            </div>
            <div class="item">
                <div class="imgBox"></div>
                <p class="i-title">渠道投放</p>
                <p>线下户外投放/传统电视投放</p>
                <p>线上平台投放</p>
            </div>
        </div>
    </div>

    <div class="division-1 div4">
        <div class="titleFrame">
            <img src="<?php echo get_bloginfo('template_url'); ?>/img/title-partner.png" alt="" class="">
        </div>
        <div class="content">
            <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'category_name' => 'partner',
                'showposts' => 20,  //展示6篇文章
                'paged' => $paged
            );
            query_posts($args);
            ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <figure><img src="<?php the_post_thumbnail_url(); ?>" alt="..."></figure>
            <?php endwhile; ?>

        </div>
    </div>

    <?php get_footer(); ?>
</div>

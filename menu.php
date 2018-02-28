<div id="menuFrame">
    <div class="logoFrame">
        <a href="<?php echo home_url('/'); ?>"><img class="logo" src="<?php echo get_bloginfo('template_url'); ?>/img/logo.png" alt="wjyt"/></a>
    </div>
    <!--  自定义侧边菜单栏  -->
    <div class="menu-wjyt-container">
        <ul id="menu-wjyt" class="menu">
            <a href="<?php echo home_url('/'); ?>">
            <li class="menu-item <?php if ($selectItem === 'menu-home') echo 'item-hover'; ?>" id="menu-home">
                <p><span class="glyphicon glyphicon-search" aria-hidden="true"></span>首页</p>
                <p>Home</p>
            </li></a>
            <li class="menu-item extendsMenu <?php if ($selectItem === 'menu-case') echo 'item-extend'; ?>" id="menu-case">
                <p>案例作品</p>
                <p>Works</p>
                <ul class="sub-menu" style="<?php if ($selectItem === 'menu-case') echo 'display: block'; ?>">
                    <a href="<?php echo home_url('/category/video'); ?>"><li class="menu-item-object-category <?php if ($selectItem === 'menu-case' && $subIndex == 0) echo 'item-hover'; ?>">视频广告</li></a>
                    <a href="<?php echo home_url('/category/h5'); ?>"><li class="menu-item-object-category <?php if ($selectItem === 'menu-case' && $subIndex == 1) echo 'item-hover'; ?>">H5</li></a>
                    <a href="<?php echo home_url('/category/3d'); ?>"><li class="menu-item-object-category <?php if ($selectItem === 'menu-case' && $subIndex == 2) echo 'item-hover'; ?>">3D全景汽车</li></a>
                    <a href="<?php echo home_url('/category/ui'); ?>"><li class="menu-item-object-category <?php if ($selectItem === 'menu-case' && $subIndex == 3) echo 'item-hover'; ?>">平面设计</li></a>
                </ul>
            </li>
            <li class="menu-item extendsMenu <?php if ($selectItem === 'menu-aboutus') echo 'item-extend'; ?>" id="menu-aboutus">
                <p>网际云通</p>
                <p>About Us</p>
                <ul class="sub-menu" style="<?php if ($selectItem === 'menu-aboutus') echo 'display: block'; ?>">
                    <a href="<?php echo home_url('/category/introduction'); ?>"><li class="menu-item-object-category <?php if ($selectItem === 'menu-aboutus' && $subIndex == 0) echo 'item-hover'; ?>">公司介绍</li></a>
                    <a href="<?php echo home_url('/category/business'); ?>"><li class="menu-item-object-category <?php if ($selectItem === 'menu-aboutus' && $subIndex == 1) echo 'item-hover'; ?>">主营业务</li></a>
                    <a href="<?php echo home_url('/category/device'); ?>"><li class="menu-item-object-category <?php if ($selectItem === 'menu-aboutus' && $subIndex == 2) echo 'item-hover'; ?>">影视设备</li></a>
                </ul>
            </li>
            <a href="<?php echo home_url('/contactus'); ?>"><li class="menu-item <?php if ($selectItem === 'menu-contactus') echo 'item-hover'; ?>" id="menu-contactus">
                <p>联系我们</p>
                <p>Contact Us</p>
            </li></a>

        </ul>
    </div>
</div>

<div id="menu-small">
    <a href="javascript:showMenu()"><img src="<?php echo get_bloginfo('template_url'); ?>/img/menu.png"></a>
</div>


<script type="text/javascript">
    var selectItem = 'menu-home';
    var subIndex = 0;
    $('.extendsMenu').click(function () {
        var itemId = $(this).attr('id');
        if (itemId === 'menu-case' || itemId === 'menu-aboutus') {
            $('#' + selectItem).removeClass('item-extend').find('.sub-menu').hide();
            if ($(this).hasClass('item-extend')) {
                $(this).removeClass('item-extend').find('.sub-menu').hide();
            } else {
                $(this).addClass('item-extend').find('.sub-menu').show();
            }
        }

        selectItem = itemId;

    });
    
    function updateSelectSatate() {
        var $item = $('#' + selectItem);
        if (selectItem === 'menu-case' || selectItem === 'menu-aboutus') {
            $item.addClass('item-extend').find('.sub-menu').show();
            $($item.find('li')[subIndex]).addClass('item-hover');
        } else {
            $item.addClass('item-hover');
        }
    }
    
    function showMenu() {
        var $menuFrame = $('#menuFrame');
        if ($menuFrame.is(':hidden')) {
            showCoverBgDialog();
            $menuFrame.removeClass('animated fadeOutLeft').show().addClass('animated fadeInLeft');
        } else {
            $('#coverBgDialog').hide();
            $menuFrame.removeClass('animated fadeInLeft').addClass('animated fadeOutLeft').fadeOut(300);
        }

    }


    function showCoverBgDialog() {
        var $coverDialog = $('#coverBgDialog');
        if ($coverDialog.length > 0) {
            $coverDialog.show();
            return;
        }
        $('body').append('<div id="coverBgDialog" style="position: fixed; top: 0; left: 0;width: 100%;height: 100%; z-index: 8; background-color: rgba(0,0,0,0.6)"></div>');
    }

    $(function () {
        var item = '<?php echo $selectItem; ?>';
        var index = '<?php echo $subIndex; ?>';
        if (item) {
            selectItem = item;
        }
        if (index) {
            subIndex = index;
        }
//        updateSelectSatate();
    });

</script>
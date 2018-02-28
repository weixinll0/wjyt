<script type="text/javascript">
    var baseUrl = 'http://wjyt.bjczxda.com';//'http://localhost/wjyt'; //'
    $(function () {
        // 实现流式布局
        var $grid;
        $grid = $('.posts').masonry({
            itemSelector: 'article',
            isAnimated: true,
            gutterWidth: 30,
            percentPosition: true
        });

        showCoverDialog();
        imagesLoaded( document.querySelectorAll('article'), function() {
            $grid.masonry('layout');
            hideCoverDialog();
        });

        var pageIndex = 1;
        var maxPages = 0;
        var isLoading = false;
        var loadHander = new Scrollload({
            container: document.querySelector('.posts-container'),
            content: document.querySelector('.posts'),
            noDataHtml: '<p class="infinite-scroll-last">已全部加载完成</p>',
            loadingHtml: '<div class="loadEffect infinite-scroll-request"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></div>',
            exceptionHtml: '<p class="infinite-scroll-error">加载出错了</p>',
            loadMore: function (sl) {

                if (pageIndex === maxPages) {
                    // 没有数据的时候需要调用noMoreData
                    sl.noMoreData();
                    hideCoverDialog();
                    return
                }

                sl.lock();
                showCoverDialog();
                pageIndex++;
                var $tag = '<?php echo $tag; ?>';
                var url = baseUrl + '/api/core/get_category_posts/?slug=' + $tag +'&page=' + pageIndex;
                $.ajax({
                    type: 'GET',
                    url: url,
                    dataType: 'json',
                    success: function (data) {
                        hideCoverDialog();

                        maxPages = data.pages;

                        if (data.count === 0) {
                            sl.noMoreData();
                            return;
                        }

                        var content = parseContentToList(data.posts);
                        if (content != '') {
                            var $elems = $( content );
                            $grid.append( $elems );
                            imagesLoaded( document.querySelectorAll('article'), function() { $grid.masonry('appended', $elems).masonry('layout'); sl.unLock(); hideCoverDialog();});
                        }

                        isLoading = false;
                    },
                    error: function (xhr, type) {
                        sl.throwException();
                        isLoading = false;
                        hideCoverDialog();
                    }
                })
            }
        });

    });

    function parseContentToList(data) {
        var content = '';
        data.forEach(function (element) {
            var url = element.url.toString();
            content += '<a href="javascript:showPageInfo(\'' + url + '\');">';
            content += '<article><div class="coverBox"><img src="<?php echo get_bloginfo('template_url'); ?>/img/icon-click.png"><p>点击查看</p></div>';
            element.categories.forEach(function (category) {
                if (category.slug === 'video') {
                    content += '<img class="btnPlay" src="<?php echo get_bloginfo("template_url"); ?>/img/icon-play.png">';
                }
            });

            content += '<figure><img src='+ element.thumbnail_images['full'].url +' alt=""></figure> <div class="caption"><label class="a_title">' + element.title +'</label><label class="a_time"><img class="icon-date" src="<?php echo get_bloginfo('template_url'); ?>/img/icon-date.png" />' + getFormatDate(element.date) + '</label></div></article>';
            content += '</a>';
        });

        return content;
    }

    function showPageInfo(url) {
        $('.popDialog').bind('click', function () {
            $(this).fadeOut(300).find('iframe').attr('src', '');
        }).fadeIn(300).find('iframe').on('mousemove', function () {
            console.log('move');
        }).attr('src', url);

    }

    function showCoverDialog() {
        var $coverDialog = $('#coverDialog');
        if ($coverDialog.length > 0) {
            $coverDialog.show();
            return;
        }
        $('body').append('<div id="coverDialog" style="position: fixed; top: 0; left: 0;width: 100%;height: 100%; z-index: 100;"></div>');
    }

    function hideCoverDialog() {
        $('#coverDialog').hide();
    }

    function getFormatDate(date) {
        var year = date.substr(0, 4);
        var month = parseInt(date.substr(5, 2));
        var day = date.substr(8, 2);
        return year + '.' + month + '.' + day;
    }

</script>

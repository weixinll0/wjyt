<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/5/6
 * Time: 11:46
 */
if ( function_exists('register_sidebar') )
    register_sidebar();
add_filter('pre_option_link_manager_enabled','__return_true');
//添加特色图片
add_theme_support( 'post-thumbnails' );
//custom widget tag cloud
add_filter( 'widget_tag_cloud_args', 'theme_tag_cloud_args' );

function par_pagenavi($range = 9){
    global $paged, $wp_query;
    if ( !$max_page ) {$max_page = $wp_query->max_num_pages;}
    if($max_page > 1){if(!$paged){$paged = 1;}
        if($paged != 1){echo "<a href='" . get_pagenum_link(1) . "' class='extend' title='跳转到首页'> 首页 </a>";}
        previous_posts_link(' < ');
        if($max_page > $range){
            if($paged < $range){for($i = 1; $i <= ($range + 1); $i++){echo "<a href='" . get_pagenum_link($i) ."'";
                if($i==$paged)echo " class='current'";echo ">$i</a>";}}
            elseif($paged >= ($max_page - ceil(($range/2)))){
                for($i = $max_page - $range; $i <= $max_page; $i++){echo "<a href='" . get_pagenum_link($i) ."'";
                    if($i==$paged)echo " class='current'";echo ">$i</a>";}}
            elseif($paged >= $range && $paged < ($max_page - ceil(($range/2)))){
                for($i = ($paged - ceil($range/2)); $i <= ($paged + ceil(($range/2))); $i++){echo "<a href='" . get_pagenum_link($i) ."'";if($i==$paged) echo " class='current'";echo ">$i</a>";}}}
        else{for($i = 1; $i <= $max_page; $i++){echo "<a href='" . get_pagenum_link($i) ."'";
            if($i==$paged)echo " class='current'";echo ">$i</a>";}}
        next_posts_link(' > ');
        if($paged != $max_page){echo "<a href='" . get_pagenum_link($max_page) . "' class='extend' title='跳转到最后一页'> 尾页 </a>";}}
}

function theme_tag_cloud_args( $args ){
    $newargs = array(
        'smallest'    => 10,  //最小字号
        'largest'     => 10, //最大字号
        'unit'        => 'pt',   //字号单位，可以是pt、px、em或%
        'number'      => 45,     //显示个数
        'format'      => 'flat',//列表格式，可以是flat、list或array
        'separator'   => "\n",   //分隔每一项的分隔符
        'orderby'     => 'name',//排序字段，可以是name或count
        'order'       => 'ASC', //升序或降序，ASC或DESC
        'exclude'     => null,   //结果中排除某些标签
        'include'     => null,  //结果中只包含这些标签
        'link'        => 'view', //taxonomy链接，view或edit
		'taxonomy'    => 'post_tag', //调用哪些分类法作为标签云
	);
	$return = array_merge( $args, $newargs);
	return $return;
}
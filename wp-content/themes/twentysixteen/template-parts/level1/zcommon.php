<?php


global $cat;
$c = get_category($cat);
$posts = get_posts("category=" . $c->term_id . "&order=DESC&numberposts=1000");

//获取post的arg参数
if (!empty($posts[0])) {
    $args = get_metadata('post', $posts[0]->ID, false);
    $fujian1 = emptyAdjustment($args['下载附件1']);
    $fujian2 = emptyAdjustment($args['下载附件2']);
    $fujian3 = emptyAdjustment($args['下载附件3']);
    $fujian4 = emptyAdjustment($args['下载附件4']);
    $lunbo1 = emptyAdjustment($args['公司介绍页的轮播图的url1']);
    $lunbo2 = emptyAdjustment($args['公司介绍页的轮播图的url2']);
} else {
    echo $c->name . '页面还没编写,请联系编辑人员在这个分类下面编写一篇文章';
//    die;
}

?>

<!DOCTYPE html>
<html lang="en">
<?php
    get_template_part('template-parts/indexPage/commonHeader');
?>
<body>
<?php

if($c->name == "公司"){
    get_template_part('template-parts/indexPage/navBar');
    get_template_part('template-parts/indexPage/rightIconList');
    get_template_part('template-parts/common/headCateImageSection');
    get_template_part('template-parts/common/post0TitleAndDescription');
    get_template_part('template-parts/level1/company/lv1ManagementCommittee');
    get_template_part('template-parts/level1/company/lv1HistorySection');
    get_template_part('template-parts/level1/company/lv1CertificateSection');
}else if($c->name == "服务"){
    get_template_part('template-parts/indexPage/navBar');
    get_template_part('template-parts/indexPage/rightIconList');
    get_template_part('template-parts/common/headCateImageSection');
//    get_template_part('template-parts/common/post0TitleAndDescription');
    echo $post->post_content;
    get_template_part('template-parts/common/downloadSection');
}else if($c->name == "事业"){

    get_template_part('template-parts/level1/karriere/lv1KarriereHeadSection');
    get_template_part('template-parts/indexPage/navBar');
    get_template_part('template-parts/indexPage/rightIconList');
    get_template_part('template-parts/level1/karriere/lv1KarriereHeadImages');
    get_template_part('template-parts/level1/karriere/lv1KarriereRecruitList');
    get_template_part( 'template-parts/indexPage/newsAndDate');
}else if($c->name == "中央系统"){
    get_template_part('template-parts/indexPage/navBar');
    get_template_part('template-parts/indexPage/rightIconList');
    get_template_part('template-parts/common/headCateImageSection');
    get_template_part('template-parts/level1/centralSystem/lv2Pictrue1AndDescriptionAndCateChilds');
}else if($c->name == "单一系统"){
    get_template_part('template-parts/indexPage/navBar');
    get_template_part('template-parts/indexPage/rightIconList');
    get_template_part('template-parts/common/headCateImageSection');
    get_template_part('template-parts/level1/centralSystem/lv2Pictrue1AndDescriptionAndCateChilds');

}else if($c->name == "联系我们"){
    get_template_part('template-parts/indexPage/navBar');
    get_template_part('template-parts/indexPage/rightIconList');
    get_template_part('template-parts/common/headCateImageSection');
    echo $posts[0]->post_content;
}else if($c->name  == "新闻"){
    get_template_part('template-parts/indexPage/navBar');
    get_template_part('template-parts/indexPage/rightIconList');
    get_template_part('template-parts/common/headCateImageSection');
    get_template_part( 'template-parts/indexPage/newsAndDate');
}else if($c->name == "泵"){
    get_template_part('template-parts/indexPage/navBar');
    get_template_part('template-parts/indexPage/rightIconList');
    get_template_part('template-parts/common/headCateImageSection');
    get_template_part('template-parts/level1/pumps/lv2Pictrue1AndDescriptionAndCateChilds');
}else if($c->name == "运输系统"){
    get_template_part('template-parts/indexPage/navBar');
    get_template_part('template-parts/indexPage/rightIconList');
    get_template_part('template-parts/common/headCateImageSection');
    echo $posts[0]->post_content;
    get_template_part('template-parts/common/downloadSection');
}
get_footer();
?>
</body>

</html>
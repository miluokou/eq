<?php
$url = home_url();
global $cat;
$c = get_category($cat);
$posts = get_posts("category=" . $c->term_id . "&order=ASC&numberposts=1000");
//获取post的arg参数
if (!empty($posts[0])) {
    $args = get_metadata('post', $posts[0]->ID, $key, false);
    if (!empty($args)) {
        $headImageUrl = emptyAdjustment($args['头部大图片网址']);
        $fujian1 = emptyAdjustment($args['下载附件1']);
        $fujian2 = emptyAdjustment($args['下载附件2']);
    } else {
        echo '这篇介绍没有设置头部大的图片,请联系管理员';
        die;
    }
} else {
    echo '这个分类下面没有写post页面,请联系编辑人员编写';
    die;
}

?>
<!DOCTYPE html>
<html lang="en">
<?php get_template_part('template-parts/indexPage/commonHeader'); ?>
<body>
<?php
get_template_part('template-parts/indexPage/navBar');
get_template_part('template-parts/indexPage/rightIconList');
get_template_part('template-parts/common/headCateImageSection');
//get_template_part('template-parts/common/conImgSection');
get_template_part('template-parts/level3/lv3NoUseSection');
echo $posts[0]->post_content;
get_template_part('template-parts/common/downloadSection');
get_footer();
?>
</body>
</html>
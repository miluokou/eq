<?php
$url = home_url();
global $cat;
$c = get_category($cat);
$posts = get_posts("category=" . $c->term_id . "&order=ASC&numberposts=1000");
//获取post的arg参数
if (!empty($posts[0])) {
    $args = get_metadata('post', $posts[0]->ID, $key, false);
    if (!empty($args)) {
        $urlInputWords = ['轮播图url1','轮播图url2','轮播图url3','轮播图url4'];
        foreach ($urlInputWords as $urlInputWord) {
            if(!empty($args[$urlInputWord])){
                $lunbotuArr[]= emptyAdjustment($args[$urlInputWord]);
            }
        }
    } else {
        echo '这篇介绍没有设置头部大的图片,请联系管理员';
        die;
    }
} else {
    echo '这个分类下面没有写post页面,请联系编辑人员编写';
    die;
}
$zTaxonomyImageUrl = z_taxonomy_image_url($c->term_id);
if(!empty($zTaxonomyImageUrl)){
    $headImageUrl = $zTaxonomyImageUrl;
}

?>

<section class="Pageentry_Header_Slider" id="">
    <div class="main_home_slider has-autoplay">
        <?php
            foreach($lunbotuArr as $lunbotu){
                echo '<div class="home_slider_item">'
                ?>
                <div class="home_slider ie_hide object_fit_image">
                    <!--div class="head_banner_image" style="background-image: url('images/banner_image1.jpg')"></div-->
                    <picture>
                        <source media="(min-width: 1440px)"
                                data-srcset='<?php echo $lunbotu;?>'>
                        <source media="(min-width: 1020px)"
                                data-srcset='<?php echo $lunbotu;?>'>
                        <source media="(min-width: 768px)"
                                data-srcset='<?php echo $lunbotu;?>'>
                        <source data-srcset='<?php echo $lunbotu;?>'>
                        <img data-src='<?php echo $lunbotu;?>' alt="" style="width: 100%;"></source></source></source></source></picture>
                    <div class="image_top bottom_left">
                        <picture><img data-src='<?php echo $lunbotu;?>'></picture>
                    </div>
                </div>
                <div class="banner_bottom">
                    <div class="container">
                        <div class="banner_bottom_slider">
                            <div class="banner_slider_dv">
                                <div class="banner_slider_text"><h1><!--TYPO3SEARCH_begin--><?php echo $c->name;?>
                                        <!--TYPO3SEARCH_end--></h1>
<!--                                    <div class="banner_link"><a href="stellenangebote\index.htm" class="hyphenate">Zu den-->
<!--                                            Stellenangeboten<i class="material-icons donthyphenate">arrow_forward</i></a>-->
<!--                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
                echo '</div>';
            }

        ?>

    </div>
</section>
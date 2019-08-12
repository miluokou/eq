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
    <div class="main_home_slider">
        <div class="home_slider_item">
            <div class="home_slider ie_hide object_fit_image">
                <picture>
                    <source media="(min-width: 1440px)" data-srcset='<?php echo $headImageUrl; ?>'>
                    <source media="(min-width: 1020px)" data-srcset='<?php echo $headImageUrl; ?>'>
                    <source media="(min-width: 768px)" data-srcset='<?php echo $headImageUrl; ?>'>
                    <source data-srcset='<?php echo $headImageUrl; ?>'>
                    <img data-src='<?php echo $headImageUrl; ?>'
                         alt="High pressure unit LubiCool - KNOLL Maschinenbau GmbH" style="width: 100%;"></source>
                    </source>
                    </source>
                    </source>
                </picture>
            </div>
            <div class="banner_bottom">
                <div class="container">
                    <div class="banner_bottom_slider">
                        <div class="banner_slider_dv">
                            <div class="banner_slider_text">
                                <h1>
                                    <!--TYPO3SEARCH_begin--><?php echo $c->name;?>
                                    <!--TYPO3SEARCH_end--></h1></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
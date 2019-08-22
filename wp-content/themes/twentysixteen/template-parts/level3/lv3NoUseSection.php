<?php
$url = home_url();
global $cat;
$c = get_category($cat);

$posts = get_posts("category=" . $c->term_id . "&order=ASC&numberposts=1000");

//获取post的arg参数
if (!empty($posts[0])) {
    $args = get_metadata('post', $posts[0]->ID, $key, false);
    if (!empty($args)) {
        $conImageUrl = emptyAdjustment($args['正文图片']);
    } else {
        echo '这篇介绍没有设置头部大的图片,请联系管理员';
        die;
    }
} else {
    echo '这个分类下面没有写post页面,请联系编辑人员编写';
    die;
}


?>

<a id="c4651"></a>
<section class="karriere secdv no_background" id="">
    <div class="container">
        <!--gallery/slider variation3-->
        <div class="post_image gallery_slider">
            <div class="image_background">
                <div class="imag_gal_div">
                    <picture>
                        <source media="(min-width: 1200px)"
                                data-srcset='<?php echo $conImageUrl;?> '>
                        <source media="(min-width: 992px)"
                                data-srcset='<?php echo $conImageUrl;?> '>
                        <source media="(min-width: 768px)"
                                data-srcset='<?php echo $conImageUrl;?> '>
                        <source media="(min-width: 480px)"
                                data-srcset='<?php echo $conImageUrl;?> '>
                        <source media="(max-width: 479px)"
                                data-srcset='<?php echo $conImageUrl;?> '>
                        <img data-src="<?php echo $conImageUrl;?> "></source>
                        </source>
                        </source>
                        </source>
                        </source>
                    </picture>
                </div>
                <div class="slider_text_content">
                    <h4></h4>
                </div>
            </div>
        </div>
        <!--gallery/slider variation3 ends--></div>
</section>
<a id="c4659"></a>
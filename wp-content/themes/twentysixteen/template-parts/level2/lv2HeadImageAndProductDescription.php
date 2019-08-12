<?php
$url=home_url();
global $cat;
$c = get_category($cat);
$headImageUrl = z_taxonomy_image_url($c->term_id);

?>
<section class="Pageentry_Header_Slider" id="">
    <div class="main_home_slider">
        <div class="home_slider_item">
            <div class="home_slider ie_hide object_fit_image">
                <picture>
                    <source media="(min-width: 1440px)" data-srcset='<?php echo $headImageUrl;?>'>
                    <source media="(min-width: 1020px)" data-srcset='<?php echo $headImageUrl;?>'>
                    <source media="(min-width: 768px)" data-srcset='<?php echo $headImageUrl;?>'>
                    <source data-srcset='<?php echo $headImageUrl;?>'>
                    <img data-src='<?php echo $headImageUrl;?>' alt="" style="width: 100%;"></source>
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
                                <h1><?php echo $c->name;?></h1></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page_intro_section Page_Introduction no_background" id="">
    <div class="container">
        <div class="common_para common_para_light font_26 rte_atag">
            <p><?php  echo $c->description;?></p>
        </div>
    </div>
</section>
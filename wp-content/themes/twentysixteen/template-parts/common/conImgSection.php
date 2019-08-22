<!--轮播图的部分-->
<section class="Pageentry_Header_Slider" id="">
    <div class="main_home_slider has-autoplay">
        <?php
        $banner = show_banners();
        foreach($banner as $bann){
            ?>
            <div class="home_slider_item">
                <div class="home_slider ie_hide object_fit_image">
                    <picture>
                        <source media="(min-width: 1440px)" data-srcset='<?php  echo $bann['img_src'];?>'>
                        <source media="(min-width: 1020px)" data-srcset='<?php  echo $bann['img_src'];?>'>
                        <source media="(min-width: 768px)" data-srcset='<?php  echo $bann['img_src'];?>'>
                        <source data-srcset='<?php  echo $bann['img_src'];?>'>
                        <img data-src='<?php  echo $bann['img_src'];?>' alt="" style="width: 100%;"></source>
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
                                    <h1><?php echo $bann['id']->post_content;?></h1>
                                    <div class="banner_link">
                                        <a href="<?php echo $bann['id']->guid;?>" class="hyphenate">Mehr erfahren
                                            <i class="material-icons donthyphenate">arrow_forward</i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php }?>
    </div>
</section>
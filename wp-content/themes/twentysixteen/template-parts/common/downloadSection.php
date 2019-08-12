<?php
    $url = home_url();
    global $cat;
    $c = get_category($cat);
    $posts = get_posts("category=" . $c->term_id . "&order=ASC&numberposts=1000");

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
        die;
    }
?>
<section class="Headline_Copy_Image secdv background_grey remove_bottom_padding " id="">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1 class='big remove_margin_header_top hyphenate'>
                    <!--TYPO3SEARCH_begin-->下载
                    <!--TYPO3SEARCH_end--></h1>
                <div class="headline_copy_image_common_para common_para common_para_light rte_atag">
                    <!--TYPO3SEARCH_begin-->
                    <!--TYPO3SEARCH_end--></div>
                <!--contacts_headline-->
                <!--contacts_headline--></div>
            <div class="col-sm-6"></div>
        </div>
    </div>
</section>
<a id="c4655"></a>
<section class="download_inner_content background_grey" id="">
    <div class="container">
        <div class="downloads-boxes">
            <div class="row">
                <?php if(!empty($fujian1)){
                    ?>
                    <div class="col-sm-3 col-xs-6">
                        <div class="downloads-item">
                            <div class="download-wrap">
                                <div class="opt-text hyphenate"><?php echo $c->name;?></div>
                                <div class="dwnld-title hyphenate">
                                    <p>附件1</p>
                                </div>
                                <div class="data_wrap">
                                    <div class="details_info">
                        <span>
                          <a href="<?php echo $fujian1; ?>" class="hyphenate" target="_blank">Data sheet</a></span>
                                        <div class="tooltiptext">
                                            <div>Data sheet</div>
                                            <a href="<?php echo $fujian1; ?>" target="_blank">pdf</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }?>
                <?php if(!empty($fujian2)){
                ?>
                <div class="col-sm-3 col-xs-6">
                    <div class="downloads-item">
                        <div class="download-wrap">
                            <div class="opt-text hyphenate"><?php echo $c->name;?></div>
                            <div class="dwnld-title hyphenate">
                                <p>附件2</p>
                            </div>
                            <div class="data_wrap">
                                <div class="details_info">
                        <span>
                          <a href="<?php echo $fujian1; ?>"
                             class="hyphenate" target="_blank">Flyer</a></span>
                                    <div class="tooltiptext">
                                        <div>Flyer</div>
                                        <a href="<?php echo $fujian1?>"
                                           target="_blank">pdf (527 KB)</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <?php
                }?>
                <?php if(!empty($fujian3)){
                    ?>
                    <div class="col-sm-3 col-xs-6">
                        <div class="downloads-item">
                            <div class="download-wrap">
                                <div class="opt-text hyphenate"><?php echo $c->name;?></div>
                                <div class="dwnld-title hyphenate">
                                    <p>附件3</p>
                                </div>
                                <div class="data_wrap">
                                    <div class="details_info">
                        <span>
                          <a href="<?php echo $fujian3; ?>"
                             class="hyphenate" target="_blank">Flyer</a></span>
                                        <div class="tooltiptext">
                                            <div>Flyer</div>
                                            <a href="<?php echo $fujian3?>"
                                               target="_blank">pdf (527 KB)</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }?>
                <?php if(!empty($fujian4)){
                    ?>
                    <div class="col-sm-3 col-xs-6">
                        <div class="downloads-item">
                            <div class="download-wrap">
                                <div class="opt-text hyphenate"><?php echo $c->name;?></div>
                                <div class="dwnld-title hyphenate">
                                    <p>附件4</p>
                                </div>
                                <div class="data_wrap">
                                    <div class="details_info">
                        <span>
                          <a href="<?php echo $fujian4; ?>"
                             class="hyphenate" target="_blank">PDF</a></span>
                                        <div class="tooltiptext">
                                            <div>PDF</div>
                                            <a href="<?php echo $fujian4?>"
                                               target="_blank">pdf (527 KB)</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }?>
            </div>
        </div>
    </div>
</section>
<a id="c4656"></a>
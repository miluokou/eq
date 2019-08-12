<?php

$zhengshuInfo = get_post_info_byname('证书');

?>

<section class="Headline_Copy_Image secdv background_grey remove_bottom_padding " id="certificate">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2 class='big remove_margin_header_top hyphenate'>
                    <!--TYPO3SEARCH_begin-->证书
                    <!--TYPO3SEARCH_end--></h2>
                <div class="headline_copy_image_common_para common_para common_para_light rte_atag">
                    <!--TYPO3SEARCH_begin-->
                    <!--TYPO3SEARCH_end--></div>
                <!--contacts_headline-->
                <!--contacts_headline--></div>
            <div class="col-sm-6"></div>
        </div>
    </div>
</section>
<a id="c2733"></a>
<section class="download_inner_content background_grey" id="">
    <div class="container">
        <div class="downloads-boxes">
            <div class="row">
                <?php
                foreach ($zhengshuInfo['post'] as $zhengshupost) {
                    $zhengshuArgs = get_metadata('post', $zhengshupost->ID, false);
                    ?>
                    <div class="col-sm-3 col-xs-6">
                        <div class="downloads-item">
                            <div class="download-wrap">
                                <div class="opt-text hyphenate"></div>
                                <div class="dwnld-title hyphenate">
                                    <p><?php echo $zhengshupost->post_title; ?></p></div>
                                <div class="data_wrap">
                                    <div class="details_info">
                                      <span>
                                        <a href="<?php echo $zhengshuArgs['中文pdf'][0]; ?>" class="hyphenate"
                                           target="_blank">中文</a>
                                      </span>
                                        <div class="tooltiptext">
                                            <div>中文</div>
                                            <a href="<?php echo $zhengshuArgs['中文pdf'][0]; ?>" target="_blank">pdf </a>
                                        </div>
                                    </div>
                                    <div class="details_info">
                                        <span> <a href="<?php echo $zhengshuArgs['英文pdf'][0]; ?>" class="hyphenate"
                                                  target="_blank">英文</a></span>
                                        <div class="tooltiptext">
                                            <div>English</div>
                                            <a href="<?php echo $zhengshuArgs['英文pdf'][0]; ?>" target="_blank">pdf</a>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="row"></div>
        </div>
    </div>
</section>
<?php
$nextLevelCates = getNextLevelChildInfo($level =3);
foreach ($nextLevelCates as $fatherCateId=>$nextLevelCate){
    $fatherCate = get_category($fatherCateId);
        ?>
        <section class="Headline_Copy_Image secdv background_grey  " id="">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6"><h2 class='big remove_margin_header_top hyphenate'><!--TYPO3SEARCH_begin-->

                            <?php echo $fatherCate->name; ?> <!--TYPO3SEARCH_end--></h2>
                        <div class="headline_copy_image_common_para common_para common_para_light rte_atag">
                            <!--TYPO3SEARCH_begin--><p><?php echo $fatherCate->description; ?> </p>
                            <!--TYPO3SEARCH_end--></div><!--contacts_headline-->
                        <!--contacts_headline-->
                        <div class="common_para comman_para_link"><a
                                    href='<?php echo get_category_link($fatherCate->term_id); ?>'>显示更多<i
                                        class="material-icons">arrow_forward</i></a></div>
                    </div>
                    <div class="col-sm-6">
                        <div class='right_image'>
                            <picture>
                                <!--source media="(min-width: 1024px)" srcset="/fileadmin/_processed_/8/8/csm_knoll-zentralsysteme-svg-ausschnitt-systeme-mit-pumptechnik_d50e69deeb.jpg"><source media="(min-width: 768px)" srcset="/fileadmin/_processed_/8/8/csm_knoll-zentralsysteme-svg-ausschnitt-systeme-mit-pumptechnik_370a4fc4ee.jpg"--><img
                                        data-src="<?php echo z_taxonomy_image_url($fatherCate->term_id); ?>"
                                        alt="Systeme mit Pumptechnik - KNOLL Maschinenbau GmbH"></picture>
                            <!--img src='/fileadmin/Home/Zentralsysteme/knoll-zentralsysteme-svg-ausschnitt-systeme-mit-pumptechnik.jpg' class='img-responsive' /-->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <a id="c1688"></a>
        <section class="history_section no_background" id="central-filter-systems">
            <div class="slider_history slick-slider">
                <div class="container">
                    <div class="row">
                        <div class="history_slider hist_desk cboxslider">
                            <div class="custom-slides">
                                <?php
                                foreach ($nextLevelCate as $nextLevelCateInfo) {?>
                                <div class="col-sm-6 col-xs-12 contbx">
                                    <a
                                            href="<?php echo get_category_link($nextLevelCateInfo->term_id);?>"
                                            class="manage_div_content_boxes">
                                        <div class="image_div
                                                         bigbx">
                                            <picture>
                                                <source media="(min-width: 1200px)"
                                                        data-srcset='<?php echo z_taxonomy_image_url($nextLevelCateInfo->term_id); ?> '>
                                                <source media="(min-width: 992px)"
                                                        data-srcset='<?php echo z_taxonomy_image_url($nextLevelCateInfo->term_id); ?>  '>
                                                <source media="(min-width: 768px)"
                                                        data-srcset='<?php echo z_taxonomy_image_url($nextLevelCateInfo->term_id); ?>  '>
                                                <source media="(min-width: 480px)"
                                                        data-srcset='<?php echo z_taxonomy_image_url($nextLevelCateInfo->term_id); ?>  '>
                                                <source media="(max-width: 479px)"
                                                        data-srcset='<?php echo z_taxonomy_image_url($nextLevelCateInfo->term_id); ?> '>
                                                <img data-src='<?php echo z_taxonomy_image_url($nextLevelCateInfo->term_id); ?> '
                                                     alt="Mitarbeiter montieren Zentrale Filteranlage mit Pumptechnik - KNOLL Maschinenbau GmbH"></source></source></source></source></source>
                                            </picture>
                                        </div>
                                        <div class="text_container"><!-- small box -->
                                            <div class="heading_1 hyphenate"><!--TYPO3SEARCH_begin-->
                                                <p><?php echo $nextLevelCateInfo->name ?></p>
                                                <!--TYPO3SEARCH_end--></div>
                                            <div class="para_1 rte_atag hyphenate"><!--TYPO3SEARCH_begin-->
                                                <p><?php echo $nextLevelCateInfo->description; ?></p>
                                                <!--TYPO3SEARCH_end--></div>
                                            <div class="comman_para_link"><span>Show more<i class="material-icons">arrow_forward</i></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php }?>

                            </div>
                        </div>
                    </div><!--</div>-->
                    <!--******************* Mobile version *********************************-->
                    <div class="history_slider_mobile hist_mob">
                        <?php
                        foreach ($nextLevelCate as $nextLevelCateInfo) {?>
                        <div class="custom-slides">
                            <div class="col-sm-6 col-xs-12 contbx">
                                <a
                                        href="<?php echo get_category_link($nextLevelCateInfo->term_id);?>"
                                        class="manage_div_content_boxes">
                                    <div class="image_div
                                                         bigbx">
                                        <picture>
                                            <source media="(min-width: 1200px)"
                                                    data-srcset='<?php echo z_taxonomy_image_url($nextLevelCateInfo->term_id); ?> '>
                                            <source media="(min-width: 992px)"
                                                    data-srcset='<?php echo z_taxonomy_image_url($nextLevelCateInfo->term_id); ?>  '>
                                            <source media="(min-width: 768px)"
                                                    data-srcset='<?php echo z_taxonomy_image_url($nextLevelCateInfo->term_id); ?>  '>
                                            <source media="(min-width: 480px)"
                                                    data-srcset='<?php echo z_taxonomy_image_url($nextLevelCateInfo->term_id); ?>  '>
                                            <source media="(max-width: 479px)"
                                                    data-srcset='<?php echo z_taxonomy_image_url($nextLevelCateInfo->term_id); ?> '>
                                            <img data-src='<?php echo z_taxonomy_image_url($nextLevelCateInfo->term_id); ?> '
                                                 alt="Mitarbeiter montieren Zentrale Filteranlage mit Pumptechnik - KNOLL Maschinenbau GmbH"></source></source></source></source></source>
                                        </picture>
                                    </div>
                                    <div class="text_container"><!-- small box -->
                                        <div class="heading_1 hyphenate"><!--TYPO3SEARCH_begin-->
                                            <p><?php echo $nextLevelCateInfo->name ?></p>
                                            <!--TYPO3SEARCH_end--></div>
                                        <div class="para_1 rte_atag hyphenate"><!--TYPO3SEARCH_begin-->
                                            <p><?php echo $nextLevelCateInfo->description; ?></p>
                                            <!--TYPO3SEARCH_end--></div>
                                        <div class="comman_para_link"><span>Show more<i class="material-icons">arrow_forward</i></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php }?>
                    </div><!-- ************** Mobile version ends ******** -->
                </div>
            </div>
            </div>
        </section>

        <?php

}
?>




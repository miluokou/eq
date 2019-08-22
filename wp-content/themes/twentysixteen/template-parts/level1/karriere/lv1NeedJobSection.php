<?php
$res = get_post_info_byname('事业');
$lishi = get_category(get_cat_ID('事业'));
?>
<section class="Headline_Copy_Image secdv no_background remove_bottom_padding " id="historie">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2 class='big remove_margin_header_top hyphenate'>事业</h2>
            </div>
            <div class="col-sm-6">
                <div class="headline_copy_image_common_para common_para common_para_light rte_atag">
                    <p><?php echo $lishi->description; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="history_section no_background" id="">
    <div class="slider_history slick-slider">
        <div class="container">
            <div class="row">
                <div class="history_slider hist_desk cboxslider">
                    <div class="custom-slides">
                        <?php
                        foreach ($res['post'] as $key => $post) {
                            $key2 = $key + 1;
                            $args = get_metadata('post', $post->ID, false);
                            $lishijieshaotupian = emptyAdjustment($args['显示到列表的图片']);
                            ?>

                            <div class="col-sm-3 col-xs-6 contbx">
                                <a class="manage_div_content_boxes ">
                                    <div class="image_div smlbx">
                                        <picture>
                                            <source media="(min-width: 1200px)"
                                                    data-srcset='<?php echo $lishijieshaotupian; ?> '>
                                            <source media="(min-width: 992px)"
                                                    data-srcset='<?php echo $lishijieshaotupian; ?> '>
                                            <source media="(min-width: 768px)"
                                                    data-srcset='<?php echo $lishijieshaotupian; ?> '>
                                            <source media="(min-width: 480px)"
                                                    data-srcset='<?php echo $lishijieshaotupian; ?>'>
                                            <source media="(max-width: 479px)"
                                                    data-srcset='<?php echo $lishijieshaotupian; ?>'>
                                            <img data-src='<?php echo $lishijieshaotupian; ?>'
                                                 alt="nnovation Kratzbandförderer - HYDROFOS Maschinenbau GmbH"></source>
                                            </source>
                                            </source>
                                            </source>
                                            </source>
                                        </picture>
                                    </div>
                                    <div class="text_container">
                                        <!-- small box -->
                                        <div class="heading_1 hyphenate">
                                            <!--TYPO3SEARCH_begin-->
                                            <p><?php echo $post->post_title; ?></p>
                                            <!--TYPO3SEARCH_end--></div>
                                        <div class="para_1 rte_atag hyphenate">
                                            <!--TYPO3SEARCH_begin-->
                                            <p><?php echo $post->post_content; ?></p>
                                            <!--TYPO3SEARCH_end--></div>
                                    </div>
                                </a>
                            </div>


                            <?php

                            if ($key2 % 4 == 0) {
                                echo '</div>';
                                break;
//                            break;
////                            echo '</div><div class="custom-slides">';
                            }
                        }
                        ?>

                    </div>
                    <!--</div>-->
                    <!-- ******************* Mobile version ********************************* -->
                    <div class="history_slider_mobile hist_mob">

                        <?php
                        //                    获取历史的post
                        $historyi = 2;
                        foreach ($res['post'] as $key => $post) {
                            $args = get_metadata('post', $post->ID, false);
                            $lishijieshaotupian = emptyAdjustment($args['显示到公司介绍页的图片']);
                            if ($historyi % 2 == 0) {
                                echo '<div class="custom-slides">';
                            }
                            ?>
                            <div class="col-sm-3 col-xs-6 contbxmob">
                                <a class="manage_div_content_boxes">
                                    <div class="image_div smlbx">
                                        <picture>
                                            <source media="(min-width: 1200px)"
                                                    data-srcset='<?php echo $lishijieshaotupian; ?>'>
                                            <source media="(min-width: 992px)"
                                                    data-srcset='<?php echo $lishijieshaotupian; ?>'>
                                            <source media="(min-width: 768px)"
                                                    data-srcset='<?php echo $lishijieshaotupian; ?>'>
                                            <source media="(min-width: 480px)"
                                                    data-srcset='<?php echo $lishijieshaotupian; ?>'>
                                            <source media="(max-width: 479px)"
                                                    data-srcset='<?php echo $lishijieshaotupian; ?>'>
                                            <img data-src='<?php echo $lishijieshaotupian; ?>'
                                                 alt="Walter Knoll, Firmengründer 2012  - HYDROFOS Maschinenbau GmbH"></source>
                                            </source>
                                            </source>
                                            </source>
                                            </source>
                                        </picture>
                                    </div>
                                    <div class="manage_desc">
                                        <!-- small box -->
                                        <div class="heading_1">
                                            <!--TYPO3SEARCH_begin-->
                                            <!--TYPO3SEARCH_end--></div>
                                        <div class="para_1 rte_atag">
                                            <!--TYPO3SEARCH_begin-->
                                            <p><?php echo $post->post_content; ?></p>
                                            <!--TYPO3SEARCH_end--></div>
                                    </div>
                                    <div class="text_container">
                                        <!-- small box -->
                                        <div class="heading_1 hyphenate">
                                            <!--TYPO3SEARCH_begin-->
                                            <p><?php echo $post->post_title; ?></p>
                                            <!--TYPO3SEARCH_end--></div>
                                        <div class="para_1 rte_atag hyphenate">
                                            <!--TYPO3SEARCH_begin-->
                                            <p><?php echo $post->post_content; ?></p>
                                            <!--TYPO3SEARCH_end--></div>
                                    </div>
                                </a>
                            </div>

                            <?php

                            if (($historyi + 1) % 2 == 0) {
                                echo '</div>';
                            }

                            $historyi++;

                        }


                        ?>

                    </div>
                    <!-- ************** Mobile version ends ******** -->
                </div>
            </div>
        </div>
</section>
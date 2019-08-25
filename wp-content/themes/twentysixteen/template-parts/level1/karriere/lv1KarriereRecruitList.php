<?php
$url = home_url();
$res = get_post_info_byname('空缺');
$c = get_category(get_cat_ID('空缺'));
$currentSubclasses = my_list_categories('child_of=' . $c->term_id . '&depth=1&hide_empty=0&hierarchical=1&optioncount=1&title_li=');



?>
<script src="<?php echo $url; ?>\typo3temp\assets\compressed\merged-12bbe16b617c7915aa2c1a50e2b4f494-97c3270d899c6a94e15385184d687000.js?1560585239"
        type="text/javascript"></script>
<script src="<?php echo $url; ?>\typo3temp\assets\compressed\merged-6b0b01f3db70003843ab03342a10e96e-e805599761e92044bfb05456870afe47.js?1558096143"
        type="text/javascript"></script>
<section class="Headline_Copy_Image secdv no_background  " id="">
    <div class="container">
        <div class="row">
            <div class="col-sm-6"><h2 class="big remove_margin_header_top hyphenate">目前的职位空缺</h2></div>
            <div class="col-sm-6">
                <div class="headline_copy_image_common_para common_para common_para_light rte_atag"><p>
                        您是否在寻找一个令人兴奋的工作环境，并希望您的个人发展不被忽视？那你就是KNOLL。我们正在寻找开发和生产，服务员工，销售人员和管理专业人员的问题解决者。在这里找到最适合您的个人资料！</p>
                </div><!--contacts_headline--><!--contacts_headline-->
                <div class="comman_para_link"><a href="<?php echo get_category_link($currentSubclasses[0]->term_id);?>">查看工作机会<i
                                class="material-icons">arrow_forward</i></a></div>
            </div>
        </div>
    </div>
</section>
<section class="history_section no_background" id="">
    <div class="slider_history slick-slider">
        <div class="container">
            <div class="row">
                <div class="history_slider hist_desk cboxslider">
                    <?php
                    $fourPices = array_chunk($currentSubclasses,4);
                    foreach($fourPices as $pice){
                        echo ' <div class="custom-slides">';
                        if(!empty($pice)){
                            foreach ($pice as $pi){
                                $imageUrl = getCatFirstPostImage($pi->term_id)
                            ?>
                                <div class="col-sm-3 col-xs-6 contbx">
                                    <a href="<?php echo get_category_link($pi->term_id);?>"
                                       class="manage_div_content_boxes">
                                        <div class="image_div smlbx">
                                            <picture>
                                                <source media="(min-width: 1200px)"
                                                        data-srcset='<?php echo $imageUrl;?>'>
                                                <source media="(min-width: 992px)"
                                                        data-srcset='<?php echo $imageUrl;?> '>
                                                <source media="(min-width: 768px)"
                                                        data-srcset='<?php echo $imageUrl;?> '>
                                                <source media="(min-width: 480px)"
                                                        data-srcset='<?php echo $imageUrl;?> '>
                                                <source media="(max-width: 479px)"
                                                        data-srcset='<?php echo $imageUrl;?> '>
                                                <img data-src='<?php echo $imageUrl;?>'
                                                     alt=""></source></source></source></source></source></picture>
                                        </div>
                                        <div class="text_container"><!-- small box -->
                                            <div class="heading_1 hyphenate"><!--TYPO3SEARCH_begin--><p><?php echo $pi->name;?>
                                                    (m/w/d)</p><!--TYPO3SEARCH_end--></div>
                                            <div class="comman_para_link"><span>Zur Stellenausschreibung<i class="material-icons">arrow_forward</i></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                    <?php
                            }
                        }
                        echo '</div>';
                    } ?>

                </div><!--</div>-->
                <!--******************* Mobile version *********************************-->
                <div class="history_slider_mobile hist_mob">
                    <?php
                    $twoPices = array_chunk($currentSubclasses,2);
                    foreach($twoPices as $pice){
                        echo ' <div class="custom-slides">';
                        if(!empty($pice)){
                            foreach ($pice as $pi){
                                $imageUrl = z_taxonomy_image_url($pi->term_id,'thumbnail')
                                ?>
                                <div class="col-sm-3 col-xs-6 contbx">
                                    <a href="<?php echo get_category_link($pi->term_id);?>"
                                       class="manage_div_content_boxes">
                                        <div class="image_div smlbx">
                                            <picture>
                                                <source media="(min-width: 1200px)"
                                                        data-srcset='<?php echo $imageUrl;?>'>
                                                <source media="(min-width: 992px)"
                                                        data-srcset='<?php echo $imageUrl;?> '>
                                                <source media="(min-width: 768px)"
                                                        data-srcset='<?php echo $imageUrl;?> '>
                                                <source media="(min-width: 480px)"
                                                        data-srcset='<?php echo $imageUrl;?> '>
                                                <source media="(max-width: 479px)"
                                                        data-srcset='<?php echo $imageUrl;?> '>
                                                <img data-src='<?php echo $imageUrl;?>'
                                                     alt=""></source></source></source></source></source></picture>
                                        </div>
                                        <div class="text_container"><!-- small box -->
                                            <div class="heading_1 hyphenate"><!--TYPO3SEARCH_begin--><p><?php echo $pi->name;?>
                                                    (m/w/d)</p><!--TYPO3SEARCH_end--></div>
                                            <div class="comman_para_link"><span>Zur Stellenausschreibung<i class="material-icons">arrow_forward</i></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php
                            }
                        }
                        echo '</div>';
                    } ?>

                </div>
                <!-- ************** Mobile version ends ******** -->
            </div>
        </div>
    </div>
</section>
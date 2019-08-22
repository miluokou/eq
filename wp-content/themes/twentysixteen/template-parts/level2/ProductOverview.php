<?php
global $cat;
$c = get_category($cat);

//Todo depth=
$currentSubclasses = my_list_categories('child_of=' . $c->term_id . '&depth=1&hide_empty=0&hierarchical=1&optioncount=1&title_li=');

foreach ($currentSubclasses as $currentSubclass){
    if(get_level_pro($currentSubclass->term_id) ==4){
        $threeAndFourInfo[$currentSubclass->parent][$currentSubclass->term_id] = $currentSubclass;
    }
}
foreach ($threeAndFourInfo as $level3CateId => $threeAndFourSingle){
    $currentlv3CateInfo = get_category($level3CateId);
    $chuck4 = array_chunk($threeAndFourSingle,4);
    $chuck2 = array_chunk($threeAndFourSingle,2);

    ?>
    <section class="Headline_Copy_Image secdv no_background  " id="">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h2 class='big remove_margin_header_top hyphenate'>
                       <?php echo $currentlv3CateInfo->name; ?>
                    </h2></div>
                <div class="col-sm-6">
                    <div class="headline_copy_image_common_para common_para common_para_light rte_atag">
                        <p><?php echo $currentlv3CateInfo->description; ?> </p></div><!--contacts_headline--><!--contacts_headline-->
                    <div class="comman_para_link"><a href="<?php echo get_category_link($level3CateId);?>">了解更多
                            <i class="material-icons">arrow_forward</i>
                        </a>
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
                        <?php
                        foreach ($chuck4 as $chuck1){
                            echo  '<div class="custom-slides">';
                                foreach ($chuck1 as $chuck){
                                    ?>
                                    <div class="col-sm-3 col-xs-6 contbx">
                                        <a href="<?php echo get_category_link($chuck->term_id)?>" class="manage_div_content_boxes">
                                            <div class="image_div smlbx">
                                                <picture>
                                                    <source media="(min-width: 1200px)"
                                                            data-srcset='<?php echo getCatFirstPostImage($chuck->term_id) ;?>'>
                                                    <source media="(min-width: 992px)"
                                                            data-srcset='<?php echo getCatFirstPostImage($chuck->term_id) ;?>'>
                                                    <source media="(min-width: 768px)"
                                                            data-srcset='<?php echo getCatFirstPostImage($chuck->term_id) ;?>'>
                                                    <source media="(min-width: 480px)"
                                                            data-srcset='<?php echo getCatFirstPostImage($chuck->term_id) ;?>'>
                                                    <source media="(max-width: 479px)"
                                                            data-srcset='<?php echo getCatFirstPostImage($chuck->term_id) ;?>'>
                                                    <img data-src='<?php echo getCatFirstPostImage($chuck->term_id) ;?>'
                                                         alt=""></source></source></source></source></source>
                                                </picture>
                                            </div>
                                            <div class="text_container"><!-- small box -->
                                                <div class="heading_1 hyphenate"><!--TYPO3SEARCH_begin--><p><?php echo $chuck->name;?></p><!--TYPO3SEARCH_end--></div>
                                                <div class="comman_para_link"><span>Mehr erfahren<i
                                                                class="material-icons">arrow_forward</i></span></div>
                                            </div>
                                        </a>
                                    </div>

                        <?php
                                }
                            echo '</div>';
                        }

                        ?>
                    </div><!--</div>--><!--
        ******************* Mobile version *********************************-->
                    <div class="history_slider_mobile hist_mob">
                        <?php
                        foreach ($chuck2 as $chuck1){
                            echo  '<div class="custom-slides">';
                            foreach ($chuck1 as $chuck){
                                ?>
                                <div class="col-sm-3 col-xs-6 contbx">
                                    <a href="<?php echo get_category_link($chuck->term_id)?>" class="manage_div_content_boxes">
                                        <div class="image_div smlbx">
                                            <picture>
                                                <source media="(min-width: 1200px)"
                                                        data-srcset='<?php echo getCatFirstPostImage($chuck->term_id) ;?>'>
                                                <source media="(min-width: 992px)"
                                                        data-srcset='<?php echo getCatFirstPostImage($chuck->term_id) ;?>'>
                                                <source media="(min-width: 768px)"
                                                        data-srcset='<?php echo getCatFirstPostImage($chuck->term_id) ;?>'>
                                                <source media="(min-width: 480px)"
                                                        data-srcset='<?php echo getCatFirstPostImage($chuck->term_id) ;?>'>
                                                <source media="(max-width: 479px)"
                                                        data-srcset='<?php echo getCatFirstPostImage($chuck->term_id) ;?>'>
                                                <img data-src='<?php echo getCatFirstPostImage($chuck->term_id) ;?>'
                                                     alt=""></source></source></source></source></source>
                                            </picture>
                                        </div>
                                        <div class="text_container"><!-- small box -->
                                            <div class="heading_1 hyphenate"><!--TYPO3SEARCH_begin--><p><?php echo $chuck->name;?></p><!--TYPO3SEARCH_end--></div>
                                            <div class="comman_para_link"><span>Mehr erfahren<i
                                                            class="material-icons">arrow_forward</i></span></div>
                                        </div>
                                    </a>
                                </div>

                                <?php
                            }
                            echo '</div>';
                        }

                        ?>
                    </div><!-- ************** Mobile version ends ******** -->
                </div>
            </div>
        </div>
    </section>

    <?php
}



?>







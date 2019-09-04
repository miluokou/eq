<?php
get_header();
$catesLv1 = get_parent0();

$serverName = site_url();
$houzhui = get_houzhui();
if($houzhui == '_zh'){
//    $newsCateId = get_cat_ID('新闻');
    $componyId = get_cat_ID('公司');
}
$componyLink = get_category_link($componyId);
$catesLv1 = get_parent0();
$banner = show_banners();
$res =get_category(get_cat_ID('新闻'));
echo '<pre>';
var_dump($res);
die;

?>

<body>

<?php 
get_template_part( 'template-parts/indexPage/navBar');
get_template_part('template-parts/indexPage/rightIconList');
get_template_part( 'template-parts/common/rotaryPlantingMap');
get_template_part( 'template-parts/indexPage/newsAndDate');
?>

<section class="Headline_Copy_Image secdv background_grey  " id="">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2 class='big remove_margin_header_top hyphenate'>
                    </h2>
                <div class="headline_copy_image_common_para common_para common_para_light rte_atag">
                    <p>我们专注于为客户做好事。为此，我们为公司创造了最佳条件。我们运动的创新和进步。 </p>
                 </div>

                <div class="common_para comman_para_link">
                    <a href='<?php echo $componyLink;?>'>对更多感兴趣？
                        <i class="material-icons">arrow_forward</i></a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class='right_image'>
                    <picture>
                        <img data-src="<?php echo $serverName;?>/wp-content/uploads/2019/07/right_image.jpg" alt="Einblick in die Blechbearbeitung der HYDROFOS Maschinenbau GmbH"></picture>
                    <div class="headline_copy_image_variation_1">
                        <div class="overlay-with-text">
                            <div class="inner-dv">
                                <div class="inner-text rte_atag">
                                    <p>了解诺尔的员工，了解更多家族企业。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="Headline_Copy_Image secdv no_background remove_bottom_padding " id="">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2 class='big remove_margin_header_top hyphenate'>制品</h2></div>
            <div class="col-sm-6">
                <div class="headline_copy_image_common_para common_para common_para_light rte_atag">
                    <p>HYDROFOS是金属加工输送系统，过滤系统和泵的领先供应商。它们运输和分离芯片和冷却润滑剂。另一个部门通过装配和运输系统解决了苛刻的物流任务</p>
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
                            foreach ($catesLv1 as $cateLv1){

                                    $imageUrl = getCatFirstPostImage($cateLv1->term_id);

                                ?>
                                <div class="col-sm-3 col-xs-6 contbx">
                                    <a href="<?php  echo get_category_link($cateLv1->term_id);?>" class="manage_div_content_boxes">
                                        <div class="image_div smlbx">
                                            <picture>
                                                <source media="(min-width: 1200px)" data-srcset='<?php  echo $imageUrl;?>'>
                                                <source media="(min-width: 992px)" data-srcset='<?php  echo $imageUrl;?> '>
                                                <source media="(min-width: 768px)" data-srcset='<?php  echo $imageUrl;?>'>
                                                <source media="(min-width: 480px)" data-srcset='<?php  echo $imageUrl;?>'>
                                                <source media="(max-width: 479px)" data-srcset='<?php  echo $imageUrl;?>'>
                                                <img data-src='<?php  echo $imageUrl;?>' alt="Kompaktfilter KF - HYDROFOS Maschinenbau GmbH"></source>
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
                                                <p><?php echo $cateLv1->name;?></p>
                                                <!--TYPO3SEARCH_end--></div>
                                            <div class="comman_para_link">
                        <span>对更多感兴趣？
                          <i class="material-icons">arrow_forward</i></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            <?php

                            }?>


                    </div>
                </div>
                <!--</div>-->
                <!-- ******************* Mobile version ********************************* -->
                <div class="history_slider_mobile hist_mob">
                    <div class="custom-slides">
                        <div class="col-sm-3 col-xs-6 contbxmob">
                            <a href="einzelanlagen\index.htm" class="manage_div_content_boxes">
                                <div class="image_div
                    smlbx">
                                    <picture>
                                        <source media="(min-width: 1200px)" data-srcset='/fileadmin/_processed_/7/f/csm_knoll-kompaktfilter-kf-301x301-01_3f22f30d66.jpg '>
                                        <source media="(min-width: 992px)" data-srcset='/fileadmin/_processed_/7/f/csm_knoll-kompaktfilter-kf-301x301-01_b7e4f4c27a.jpg '>
                                        <source media="(min-width: 768px)" data-srcset='/fileadmin/_processed_/7/f/csm_knoll-kompaktfilter-kf-301x301-01_dc4f1650c6.jpg '>
                                        <source media="(min-width: 480px)" data-srcset='/fileadmin/_processed_/7/f/csm_knoll-kompaktfilter-kf-301x301-01_3f22f30d66.jpg '>
                                        <source media="(max-width: 479px)" data-srcset='/fileadmin/_processed_/7/f/csm_knoll-kompaktfilter-kf-301x301-01_b7e4f4c27a.jpg '>
                                        <img data-src='/fileadmin/_processed_/7/f/csm_knoll-kompaktfilter-kf-301x301-01_3f22f30d66.jpg' alt="Kompaktfilter KF - HYDROFOS Maschinenbau GmbH"></source>
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
                                        <p>Einzelanlagen</p>
                                        <!--TYPO3SEARCH_end--></div>
                                    <div class="comman_para_link">
                        <span>Mehr anzeigen
                          <i class="material-icons">arrow_forward</i></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 col-xs-6 contbxmob">
                            <a href="zentralsysteme\index.htm" class="manage_div_content_boxes">
                                <div class="image_div
                    smlbx">
                                    <picture>
                                        <source media="(min-width: 1200px)" data-srcset='/fileadmin/_processed_/f/7/csm_knoll-zentralsysteme-301x301-01_4e887329e0.jpg '>
                                        <source media="(min-width: 992px)" data-srcset='/fileadmin/_processed_/f/7/csm_knoll-zentralsysteme-301x301-01_ca1be659df.jpg '>
                                        <source media="(min-width: 768px)" data-srcset='/fileadmin/_processed_/f/7/csm_knoll-zentralsysteme-301x301-01_478bdd30d9.jpg '>
                                        <source media="(min-width: 480px)" data-srcset='/fileadmin/_processed_/f/7/csm_knoll-zentralsysteme-301x301-01_4e887329e0.jpg '>
                                        <source media="(max-width: 479px)" data-srcset='/fileadmin/_processed_/f/7/csm_knoll-zentralsysteme-301x301-01_ca1be659df.jpg '>
                                        <img data-src='/fileadmin/_processed_/f/7/csm_knoll-zentralsysteme-301x301-01_4e887329e0.jpg' alt="Zentralsystem der HYDROFOS Maschinenbau GmbH"></source>
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
                                        <p>Zentralsysteme</p>
                                        <!--TYPO3SEARCH_end--></div>
                                    <div class="comman_para_link">
                        <span>Mehr anzeigen
                          <i class="material-icons">arrow_forward</i></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="custom-slides">
                        <div class="col-sm-3 col-xs-6 contbxmob">
                            <a href="transportsysteme\index.htm" class="manage_div_content_boxes">
                                <div class="image_div
                    smlbx">
                                    <picture>
                                        <source media="(min-width: 1200px)" data-srcset='/fileadmin/_processed_/7/3/csm_knoll-transportsystem-ts-301x301-02_5663ffd6b4.jpg '>
                                        <source media="(min-width: 992px)" data-srcset='/fileadmin/_processed_/7/3/csm_knoll-transportsystem-ts-301x301-02_d2bab4eb0e.jpg '>
                                        <source media="(min-width: 768px)" data-srcset='/fileadmin/_processed_/7/3/csm_knoll-transportsystem-ts-301x301-02_dd9c0fd579.jpg '>
                                        <source media="(min-width: 480px)" data-srcset='/fileadmin/_processed_/7/3/csm_knoll-transportsystem-ts-301x301-02_5663ffd6b4.jpg '>
                                        <source media="(max-width: 479px)" data-srcset='/fileadmin/_processed_/7/3/csm_knoll-transportsystem-ts-301x301-02_d2bab4eb0e.jpg '>
                                        <img data-src='/fileadmin/_processed_/7/3/csm_knoll-transportsystem-ts-301x301-02_5663ffd6b4.jpg' alt="Transportsystem TS – HYDROFOS Maschinenbau GmbH"></source>
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
                                        <p>Transportsysteme</p>
                                        <!--TYPO3SEARCH_end--></div>
                                    <div class="comman_para_link">
                        <span>Mehr anzeigen
                          <i class="material-icons">arrow_forward</i></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 col-xs-6 contbxmob">
                            <a href="pumpen\index.htm" class="manage_div_content_boxes">
                                <div class="image_div
                    smlbx">
                                    <picture>
                                        <source media="(min-width: 1200px)" data-srcset='/fileadmin/_processed_/8/5/csm_knoll-kreiselpumpe-t-301x301-01_079044c2b9.jpg '>
                                        <source media="(min-width: 992px)" data-srcset='/fileadmin/_processed_/8/5/csm_knoll-kreiselpumpe-t-301x301-01_8eeec7ef36.jpg '>
                                        <source media="(min-width: 768px)" data-srcset='/fileadmin/_processed_/8/5/csm_knoll-kreiselpumpe-t-301x301-01_6ffb0aaafb.jpg '>
                                        <source media="(min-width: 480px)" data-srcset='/fileadmin/_processed_/8/5/csm_knoll-kreiselpumpe-t-301x301-01_079044c2b9.jpg '>
                                        <source media="(max-width: 479px)" data-srcset='/fileadmin/_processed_/8/5/csm_knoll-kreiselpumpe-t-301x301-01_8eeec7ef36.jpg '>
                                        <img data-src='/fileadmin/_processed_/8/5/csm_knoll-kreiselpumpe-t-301x301-01_079044c2b9.jpg' alt=""></source>
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
                                        <p>Pumpen</p>
                                        <!--TYPO3SEARCH_end--></div>
                                    <div class="comman_para_link">
                        <span>Mehr anzeigen
                          <i class="material-icons">arrow_forward</i></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- ************** Mobile version ends ******** --></div>
        </div>
    </div>
</section>
<section class="Headline_Copy_Image secdv background_grey remove_bottom_padding " id="">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2 class='big remove_margin_header_top hyphenate'>
                    <!--TYPO3SEARCH_begin-->职业生涯
                    <!--TYPO3SEARCH_end--></h2></div>
            <div class="col-sm-6">
                <div class="headline_copy_image_common_para common_para common_para_light rte_atag">
                    <p>与我们一起发展一家成功的公司。我们希望进一步发展，为员工和受训人员提供良好的条件。</p>
                </div>
                <!--contacts_headline-->
                <!--contacts_headline-->
                <div class="comman_para_link">
                    <a href="karriere\index.htm">Mein Einstieg
                        <i class="material-icons">arrow_forward</i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="karriere secdv background_grey" id="">
    <div class="container">
        <!--Image video variation1-->
        <div class="post_video">
            <div class="overlayvideo_thumbnail" style="background-image:url('fileadmin/_processed_/e/2/csm_knoll-karriere-imagefilm-videothumbnail_5c5c4afce2.jpg');"></div>
            <div class="video_play_btn" id="video_btn" data-videolink="https://www.youtube.com/watch?v=-nD3UdSoG_8&amp;feature=youtu.be">
                <img src="fileadmin\knoll\Resources\Public\images\play_btn.png"></div>
            <div class="banner_bottom_video"></div>
        </div>
        <!--image video variation1 ends--></div>
</section>
<section class="Headline_Copy_Image secdv no_background remove_bottom_padding " id="">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2 class='big remove_margin_header_top hyphenate'>服务</h2></div>
            <div class="col-sm-6">
                <div class="headline_copy_image_common_para common_para common_para_light rte_atag">
                    <p>如果您需要快速，在这里您可以找到所有重要的信息和联系方式。 </p>
                </div>
                <!--contacts_headline-->
                <!--contacts_headline-->
                <div class="comman_para_link">
                    <a href="service\index.htm">服务一目了然
                        <i class="material-icons">arrow_forward</i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="service secdv no_background" id="">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class='right_image manage_div'>
                    <picture>
                        <source media="(min-width: 1024px)" data-srcset="<?php echo $serverName;?>/wp-content/uploads/2019/07/service.jpg">
                        <source media="(min-width: 768px)" data-srcset="<?php echo $serverName;?>/wp-content/uploads/2019/07/service.jpg">
                        <source media="(min-width: 480px)" data-srcset="<?php echo $serverName;?>/wp-content/uploads/2019/07/service.jpg">
                        <source media="(max-width: 479px)" data-srcset="<?php echo $serverName;?>/wp-content/uploads/2019/07/service.jpg">
                        <img data-src="<?php echo $serverName;?>/wp-content/uploads/2019/07/service.jpg" alt="Mitarbeiterin an der Service-Hotline - HYDROFOS Maschinenbau GmbH" style="width: 100%;"></source>
                        </source>
                        </source>
                        </source>
                    </picture>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="addr-colm ittcol">
                            <div class="addr-title">营业时间</div>
                            <div class="kontakt_no">
                                <div class="kontact_icons">
                                    <i class="material-icons icon_clear">phone</i></div>
                                <!-- -->
                                <div class='number a_tab_container'>
                                    <div class="contactfix">
                                        <a href="tel:+497581/2008-0">+49 75 81/20 08-0</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="addr-colm ittcol">
                            <div class="addr-title">非营业时间</div>
                            <div class='kontakt_no'>
                                <div class="kontact_icons">
                                    <i class="material-icons icon_clear">phone</i>
                                </div>
                                <div class='number a_tab_container'>
                                    <div class="contactfix">
                                        <a href="tel:+49160/2822008">+49 160/2 82 20 08</a></div>
                                </div>
                            </div>
                            <div class="timing rte_atag">
                                <p>Mo - Do: 17.00 - 21.00 Uhr&nbsp;
                                    <br>Fr: 15.00 - 21.00 Uhr&nbsp;
                                    <br>Sa: 07.00 - 12.00 Uhr&nbsp;</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

            <?php get_footer();?>

      </body>

</html>
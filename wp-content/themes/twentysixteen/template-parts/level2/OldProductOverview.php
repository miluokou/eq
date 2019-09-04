<?php
global $cat;
$c = get_category($cat);
$currentSubclasses = my_list_categories('child_of=' . $c->term_id . '&depth=1&hide_empty=0&hierarchical=1&optioncount=1&title_li=');

?>
<section class="Headline_Copy_Image secdv background_grey remove_bottom_padding " id="">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2 class='big remove_margin_header_top hyphenate'>
                    <!--TYPO3SEARCH_begin-->产品概述
                    <!--TYPO3SEARCH_end--></h2></div>
            <div class="col-sm-6">
                <div class="headline_copy_image_common_para common_para common_para_light rte_atag">
                    <p>理想的产品系列。诺尔的商业动态是基于灵活适应市场条件的核心理念。从最小的细节到产品到完整的系统解决方案，我们的目标是为每个应用程序提供质量。</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="history_section background_grey" id="">
    <div class="slider_history slick-slider">
        <div class="container">
            <div class="history_no_slider hist_desk">
                <div class="row">
                    <?php
                    foreach ($currentSubclasses as $k =>$currentSub){
                        ?>
                        <div class="col-sm-3 col-xs-6 contbx">
                            <a href="<?php echo get_category_link($currentSub->term_id)?>" class="manage_div_content_boxes_greybg">
                                <div class="image_div smlbx">
                                    <picture>
                                        <source media="(min-width: 1200px)" data-srcset='<?php echo getCatFirstPostImage($currentSub->term_id) ;?>'>
                                        <source media="(min-width: 992px)" data-srcset='<?php echo getCatFirstPostImage($currentSub->term_id) ;?>'>
                                        <source media="(min-width: 768px)" data-srcset='<?php echo getCatFirstPostImage($currentSub->term_id) ;?> '>
                                        <source media="(min-width: 480px)" data-srcset='<?php echo getCatFirstPostImage($currentSub->term_id) ;?>'>
                                        <source media="(max-width: 479px)" data-srcset='<?php echo getCatFirstPostImage($currentSub->term_id) ;?>'>
                                        <img data-src='<?php echo getCatFirstPostImage($currentSub->term_id) ;?>' alt="Druckerhöhungsanlagen - HYDROFOS Maschinenbau GmbH"></source>
                                        </source>
                                        </source>
                                        </source>
                                        </source>
                                    </picture>
                                </div>
                                <div class="manage_desc">
                                    <!-- small box -->
                                    <div class="heading_1"></div>
                                    <div class="para_1 rte_atag">
                                        <p><?php echo $currentSub->description;?></p>
                                    </div>
                                    <div class="comman_para_link">
                        <span>了解更多
                          <i class="material-icons">arrow_forward</i></span>
                                    </div>
                                </div>
                                <div class="text_container">
                                    <!-- small box -->
                                    <div class="heading_1 hyphenate">
                                        <p><?php echo $currentSub->name;?></p>
                                    </div>
                                    <div class="comman_para_link">
                        <span>了解更多
                          <i class="material-icons">arrow_forward</i></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php
                        $y = $k+1;
                        if($y%4==0){
                            echo ' </div><div class="row">';
                        }
                    }
                    $shifoubeisizhengchu = count($currentSubclasses)+1;
                    if($shifoubeisizhengchu%4==0){
                        echo '</div>';
                    }
                    ?>
                </div>
                <!-- ******************* Mobile version ********************************* -->
                <div class="history_no_slider hist_mob">
                    <div class="row">
                        <div class="col-sm-3 col-xs-6 contbxmob">
                            <a href="hochdruckanlagen\index.htm" class="manage_div_content_boxes_greybg">
                                <div class="image_div smlbx">
                                    <picture>
                                        <source media="(min-width: 1200px)" data-srcset='/fileadmin/_processed_/1/c/csm_knoll-druckerhoehungsstation-dhs-301x301-02_b17c91b563.jpg '>
                                        <source media="(min-width: 992px)" data-srcset='/fileadmin/_processed_/1/c/csm_knoll-druckerhoehungsstation-dhs-301x301-02_37a5b41f86.jpg '>
                                        <source media="(min-width: 768px)" data-srcset='/fileadmin/_processed_/1/c/csm_knoll-druckerhoehungsstation-dhs-301x301-02_5e98adb05f.jpg '>
                                        <source media="(min-width: 480px)" data-srcset='/fileadmin/_processed_/1/c/csm_knoll-druckerhoehungsstation-dhs-301x301-02_b17c91b563.jpg '>
                                        <source media="(max-width: 479px)" data-srcset='/fileadmin/_processed_/1/c/csm_knoll-druckerhoehungsstation-dhs-301x301-02_37a5b41f86.jpg '>
                                        <img data-src='/fileadmin/_processed_/1/c/csm_knoll-druckerhoehungsstation-dhs-301x301-02_b17c91b563.jpg' alt="Druckerhöhungsanlagen - HYDROFOS Maschinenbau GmbH"></source>
                                        </source>
                                        </source>
                                        </source>
                                        </source>
                                    </picture>
                                </div>
                                <div class="manage_desc">
                                    <!-- small box -->
                                    <div class="heading_1"></div>
                                    <div class="para_1 rte_atag">
                                        <p>HYDROFOS Hochdruckanlagen dienen zur Versorgung von Werkzeugmaschinen wie Bearbeitungszentren und Drehautomaten. Für den richtigen Vorlaufdruck an den verschiedenen Verbrauchern sorgen dabei Hochdruckpumpen.</p>
                                    </div>
                                    <div class="comman_para_link">
                        <span>Mehr anzeigen
                          <i class="material-icons">arrow_forward</i></span>
                                    </div>
                                </div>
                                <div class="text_container">
                                    <!-- small box -->
                                    <div class="heading_1 hyphenate">
                                        <p>Hochdruckanlagen</p>
                                    </div>
                                    <div class="comman_para_link">
                        <span>Mehr anzeigen
                          <i class="material-icons">arrow_forward</i></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 col-xs-6 contbxmob">
                            <a href="filteranlagen\index.htm" class="manage_div_content_boxes_greybg">
                                <div class="image_div smlbx">
                                    <picture>
                                        <source media="(min-width: 1200px)" data-srcset='/fileadmin/_processed_/a/c/csm_knoll-standardanlage-kf-301x301-01_47016ce23e.jpg '>
                                        <source media="(min-width: 992px)" data-srcset='/fileadmin/_processed_/a/c/csm_knoll-standardanlage-kf-301x301-01_da91165bfd.jpg '>
                                        <source media="(min-width: 768px)" data-srcset='/fileadmin/_processed_/a/c/csm_knoll-standardanlage-kf-301x301-01_3f1ba37690.jpg '>
                                        <source media="(min-width: 480px)" data-srcset='/fileadmin/_processed_/a/c/csm_knoll-standardanlage-kf-301x301-01_47016ce23e.jpg '>
                                        <source media="(max-width: 479px)" data-srcset='/fileadmin/_processed_/a/c/csm_knoll-standardanlage-kf-301x301-01_da91165bfd.jpg '>
                                        <img data-src='/fileadmin/_processed_/a/c/csm_knoll-standardanlage-kf-301x301-01_47016ce23e.jpg' alt="Standardfilter KF - HYDROFOS Maschinenbau GmbH"></source>
                                        </source>
                                        </source>
                                        </source>
                                        </source>
                                    </picture>
                                </div>
                                <div class="manage_desc">
                                    <!-- small box -->
                                    <div class="heading_1"></div>
                                    <div class="para_1 rte_atag">
                                        <p>KSS-Filter von HYDROFOS reinigen Kühlschmierstoffe bis in den hochfeinen Bereich, auch ohne Filterverbrauchsstoffe. Die KSS-Filter arbeiten dabei lokal für Einzelmaschinen sowie zentral für Maschinengruppen oder komplette Fertigungsbereiche.</p>
                                    </div>
                                    <div class="comman_para_link">
                        <span>Mehr anzeigen
                          <i class="material-icons">arrow_forward</i></span>
                                    </div>
                                </div>
                                <div class="text_container">
                                    <!-- small box -->
                                    <div class="heading_1 hyphenate">
                                        <p>Filteranlagen</p>
                                    </div>
                                    <div class="comman_para_link">
                        <span>Mehr anzeigen
                          <i class="material-icons">arrow_forward</i></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 col-xs-6 contbxmob">
                            <a href="foerderanlagen\index.htm" class="manage_div_content_boxes_greybg">
                                <div class="image_div smlbx">
                                    <picture>
                                        <source media="(min-width: 1200px)" data-srcset='/fileadmin/_processed_/c/2/csm_knoll-kratzbandfoerderer-k-301x301-01_3fca7d38bf.jpg '>
                                        <source media="(min-width: 992px)" data-srcset='/fileadmin/_processed_/c/2/csm_knoll-kratzbandfoerderer-k-301x301-01_18a9ff6385.jpg '>
                                        <source media="(min-width: 768px)" data-srcset='/fileadmin/_processed_/c/2/csm_knoll-kratzbandfoerderer-k-301x301-01_4c3bf11b74.jpg '>
                                        <source media="(min-width: 480px)" data-srcset='/fileadmin/_processed_/c/2/csm_knoll-kratzbandfoerderer-k-301x301-01_3fca7d38bf.jpg '>
                                        <source media="(max-width: 479px)" data-srcset='/fileadmin/_processed_/c/2/csm_knoll-kratzbandfoerderer-k-301x301-01_18a9ff6385.jpg '>
                                        <img data-src='/fileadmin/_processed_/c/2/csm_knoll-kratzbandfoerderer-k-301x301-01_3fca7d38bf.jpg' alt="Förderanlage Kratzbandförderer K - HYDROFOS Maschinenbau GmbH "></source>
                                        </source>
                                        </source>
                                        </source>
                                        </source>
                                    </picture>
                                </div>
                                <div class="manage_desc">
                                    <!-- small box -->
                                    <div class="heading_1"></div>
                                    <div class="para_1 rte_atag">
                                        <p>HYDROFOS-Späneförderer gibt es in verschiedenen Bauarten sowohl maschinenintegriert als auch zentral aufgestellt. Je nach Späneart und Transportstrecke kommen neben Bandförderern auch Schneckenförderer und Zugklappenförderer zum Einsatz.</p>
                                    </div>
                                    <div class="comman_para_link">
                        <span>Mehr anzeigen
                          <i class="material-icons">arrow_forward</i></span>
                                    </div>
                                </div>
                                <div class="text_container">
                                    <!-- small box -->
                                    <div class="heading_1 hyphenate">
                                        <p>Förderanlagen</p>
                                    </div>
                                    <div class="comman_para_link">
                        <span>Mehr anzeigen
                          <i class="material-icons">arrow_forward</i></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 col-xs-6 contbxmob">
                            <a href="mms-controlube\index.htm" class="manage_div_content_boxes_greybg">
                                <div class="image_div smlbx">
                                    <picture>
                                        <source media="(min-width: 1200px)" data-srcset='/fileadmin/_processed_/4/d/csm_knoll-minimalmengenschmiersystem-controlube-301x301-01_f6a72158f9.jpg '>
                                        <source media="(min-width: 992px)" data-srcset='/fileadmin/_processed_/4/d/csm_knoll-minimalmengenschmiersystem-controlube-301x301-01_98b764cc90.jpg '>
                                        <source media="(min-width: 768px)" data-srcset='/fileadmin/_processed_/4/d/csm_knoll-minimalmengenschmiersystem-controlube-301x301-01_878e68e724.jpg '>
                                        <source media="(min-width: 480px)" data-srcset='/fileadmin/_processed_/4/d/csm_knoll-minimalmengenschmiersystem-controlube-301x301-01_f6a72158f9.jpg '>
                                        <source media="(max-width: 479px)" data-srcset='/fileadmin/_processed_/4/d/csm_knoll-minimalmengenschmiersystem-controlube-301x301-01_98b764cc90.jpg '>
                                        <img data-src='/fileadmin/_processed_/4/d/csm_knoll-minimalmengenschmiersystem-controlube-301x301-01_f6a72158f9.jpg' alt="Minimalmengenschmiersysteme - HYDROFOS Maschinenbau GmbH"></source>
                                        </source>
                                        </source>
                                        </source>
                                        </source>
                                    </picture>
                                </div>
                                <div class="manage_desc">
                                    <!-- small box -->
                                    <div class="heading_1"></div>
                                    <div class="para_1 rte_atag">
                                        <p>Das MMS-System ControLube von HYDROFOS vereint die Vorteile der bisher gängigen Einkanal- und Zweikanal-MMS-Systeme. Darüber hinaus bietet die neuartige Technik besondere Merkmale mit hohem Anwendernutzen.</p>
                                    </div>
                                    <div class="comman_para_link">
                        <span>Mehr anzeigen
                          <i class="material-icons">arrow_forward</i></span>
                                    </div>
                                </div>
                                <div class="text_container">
                                    <!-- small box -->
                                    <div class="heading_1 hyphenate">
                                        <p>Minimalmengenschmiersysteme</p>
                                    </div>
                                    <div class="comman_para_link">
                        <span>Mehr anzeigen
                          <i class="material-icons">arrow_forward</i></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 col-xs-6 contbxmob">
                            <a href="zerkleinerungsanlagen\index.htm" class="manage_div_content_boxes_greybg">
                                <div class="image_div smlbx">
                                    <picture>
                                        <source media="(min-width: 1200px)" data-srcset='/fileadmin/_processed_/1/6/csm_knoll-zerkleinerer-zv-600-301x301-01_d58dd58616.jpg '>
                                        <source media="(min-width: 992px)" data-srcset='/fileadmin/_processed_/1/6/csm_knoll-zerkleinerer-zv-600-301x301-01_71244b93e1.jpg '>
                                        <source media="(min-width: 768px)" data-srcset='/fileadmin/_processed_/1/6/csm_knoll-zerkleinerer-zv-600-301x301-01_a38924a9e9.jpg '>
                                        <source media="(min-width: 480px)" data-srcset='/fileadmin/_processed_/1/6/csm_knoll-zerkleinerer-zv-600-301x301-01_d58dd58616.jpg '>
                                        <source media="(max-width: 479px)" data-srcset='/fileadmin/_processed_/1/6/csm_knoll-zerkleinerer-zv-600-301x301-01_71244b93e1.jpg '>
                                        <img data-src='/fileadmin/_processed_/1/6/csm_knoll-zerkleinerer-zv-600-301x301-01_d58dd58616.jpg' alt="Zerkleinerungsanlagen - HYDROFOS Maschinenbau GmbH"></source>
                                        </source>
                                        </source>
                                        </source>
                                        </source>
                                    </picture>
                                </div>
                                <div class="manage_desc">
                                    <!-- small box -->
                                    <div class="heading_1"></div>
                                    <div class="para_1 rte_atag">
                                        <p>HYDROFOS-Spänezerkleinerer schneiden Metall- und Kunststoffspäne bis zur Schüttgut-Qualität. Die Zerkleinerer können an Bearbeitungsmaschinen oder an zentralen Sammelstellen installiert werden. Je nach Modell ist eine vertikale oder horizontale Spanzufuhr möglich, in einigen Anwendungen auch mit Störteilauswurf.</p>
                                    </div>
                                    <div class="comman_para_link">
                        <span>Mehr anzeigen
                          <i class="material-icons">arrow_forward</i></span>
                                    </div>
                                </div>
                                <div class="text_container">
                                    <!-- small box -->
                                    <div class="heading_1 hyphenate">
                                        <p>Zerkleinerungsanlagen</p>
                                    </div>
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
</section>
<?php
$houzhui = get_houzhui();
if($houzhui == '_zh'){
    $newsCateId = get_cat_ID('新闻');

}
$posts = get_posts("category=" . $newsCateId . "&order=DESC&numberposts=10");
?>

<section class="Headline_Copy_Image secdv no_background remove_bottom_padding " id="">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2 class='big remove_margin_header_top hyphenate'>新闻和日期</h2>
            </div>
            <div class="col-sm-6">
                <div class="headline_copy_image_common_para common_para common_para_light rte_atag">
                    <p>关于HYDROFOS员工，产品，活动的精彩信息 - HYDROFOS live每周7天每天24小时开放。</p>
                </div>
                <!--contacts_headline-->
                <!--contacts_headline-->
                <div class="comman_para_link">
                    <a href="<?php echo get_category_link($newsCateId);?>">对更多感兴趣？
                        <i class="material-icons">arrow_forward</i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="News_Slider secdv remove_slider_wrap_padding ">
    <div class="slider_relative">
        <div class="container">
            <!---News Slider variation 1 STARTS-->
            <div class="news-slider-wrap news-slider-wrap-var1">
                <div class="row news-slider desktop_version hidden-xs">
                    <!--                    新闻遍历post-->
                    <?php
                    foreach ($posts as $post){
                        $suoImageLink = 'javascript::void(0);';
                        $args = get_metadata('post', $post->ID, $key, false);
                        if(!empty($args['新闻显示到首页的图片封面'])){
                            $suoImageLink = $args['新闻显示到首页的图片封面'][0];
                        }
                        ?>
                        <div class='col-sm-3'>
                            <a href='<?php echo $post->guid;?>' class="post-item">
                                <!--=====================P artials/List/OneRowSlider.html -->
                                <div class="postimg">
                                    <picture>
                                        <source media="(min-width: 992px)" data-srcset='<?php echo $suoImageLink;?>'>
                                        <source media="(min-width: 1200px)" data-srcset='<?php echo $suoImageLink;?>'>
                                        <source media="(min-width: 768px)" data-srcset='<?php echo $suoImageLink;?>'>
                                        <source media="(min-width: 480px)" data-srcset='<?php echo $suoImageLink;?>'>
                                        <source media="(max-width: 479px)" data-srcset='<?php echo $suoImageLink;?>'>
                                        <img data-src='<?php echo $post->guid;?>' style="width: 100%"></source>
                                        </source>
                                        </source>
                                        </source>
                                        </source>
                                    </picture>
                                </div>
                                <div class="post_content">
                                    <div class="date" >
                                    	<?php echo  $post->post_date;?>
                                        <!-- date -->
                                        <span class="news-list-date" style="display:none;"><time datetime="<?php echo  $post->post_date;?>"><?php echo  $post->post_date;?>
                                                <meta itemprop="datePublished" content="<?php echo  $post->post_date;?>">
                                                </time>
                                        </span>
                                                <!--in-->
                                        <!-- first category -->
                                        <!--<span class="news-list-category">Unternehmen</span>-->
                                    </div>
                                    
                                    <div class="desc hyphenate"><?php echo  $post->post_title;?><br></div>
                                    <div class="comman_para_link">
                                          <span href="aktuelles\unternehmen\ausgepackt-das-gebaeude-k1-eroeffnet-ende-mai\index.htm">了解更多
                                            <i class="material-icons">arrow_forward</i></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php


                    }
                    ?>


                </div>

                <div class="row news-slider mobile_version visible-xs">
                    <div class='col-sm-3'>
                        <a href='aktuelles\unternehmen\ausgepackt-das-gebaeude-k1-eroeffnet-ende-mai\index.htm' class="post-item">
                            <!--=====================P artials/List/OneRowSlider.html -->
                            <div class="postimg">
                                <picture>
                                    <source media="(min-width: 1200px)" data-srcset='/fileadmin/_processed_/f/2/csm_knoll-empfang-301x301_740a4fbe1a.jpg'>
                                    <source media="(min-width: 992px)" data-srcset='/fileadmin/_processed_/f/2/csm_knoll-empfang-301x301_a35929d448.jpg '>
                                    <source media="(min-width: 768px)" data-srcset='/fileadmin/_processed_/f/2/csm_knoll-empfang-301x301_5bed960e49.jpg '>
                                    <source media="(min-width: 480px)" data-srcset='/fileadmin/_processed_/f/2/csm_knoll-empfang-301x301_d7c3ce3c64.jpg '>
                                    <source media="(max-width: 479px)" data-srcset='/fileadmin/_processed_/f/2/csm_knoll-empfang-301x301_407dd66a97.jpg '>
                                    <img data-src='/fileadmin/_processed_/f/2/csm_knoll-empfang-301x301_740a4fbe1a.jpg' style="width: 100%"></source>
                                    </source>
                                    </source>
                                    </source>
                                    </source>
                                </picture>
                            </div>
                            <div class="post_content">
                                <div class="date">
                                    <!-- date -->
                                    <span class="news-list-date">
                        <time datetime="2019-05-07">07.05.2019
                          <meta itemprop="datePublished" content="2019-05-07"></time></span>in
                                    <!-- first category -->
                                    <span class="news-list-category">Unternehmen</span></div>
                                <div class="desc hyphenate">Ausgepackt: Das Gebäude K1 eröffnet Ende Mai.
                                    <br>
                                    <!-- teaser -->
                                    <!-- <a class="more" title="Ausgepackt: Das Gebäude K1 eröffnet Ende Mai." href="/aktuelles/unternehmen/ausgepackt-das-gebaeude-k1-eroeffnet-ende-mai/">
                                    Weiterlesen
                                    </a>--></div>
                                <div class="comman_para_link">
                      <span href="aktuelles\unternehmen\ausgepackt-das-gebaeude-k1-eroeffnet-ende-mai\index.htm">Mehr erfahren
                        <i class="material-icons">arrow_forward</i></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class='col-sm-3'>
                        <a href='aktuelles\produkte\angepackt-lubicoolr-seit-januar-am-start\index.htm' class="post-item">
                            <!--=====================P artials/List/OneRowSlider.html -->
                            <div class="postimg">
                                <picture>
                                    <source media="(min-width: 1200px)" data-srcset='/fileadmin/_processed_/1/4/csm_knoll-lubicool-301x301_630d2d5569.jpg'>
                                    <source media="(min-width: 992px)" data-srcset='/fileadmin/_processed_/1/4/csm_knoll-lubicool-301x301_b9cabe03cc.jpg '>
                                    <source media="(min-width: 768px)" data-srcset='/fileadmin/_processed_/1/4/csm_knoll-lubicool-301x301_17e0a11455.jpg '>
                                    <source media="(min-width: 480px)" data-srcset='/fileadmin/_processed_/1/4/csm_knoll-lubicool-301x301_a31581dff5.jpg '>
                                    <source media="(max-width: 479px)" data-srcset='/fileadmin/_processed_/1/4/csm_knoll-lubicool-301x301_7d0952a203.jpg '>
                                    <img data-src='/fileadmin/_processed_/1/4/csm_knoll-lubicool-301x301_630d2d5569.jpg' style="width: 100%"></source>
                                    </source>
                                    </source>
                                    </source>
                                    </source>
                                </picture>
                            </div>
                            <div class="post_content">
                                <div class="date">
                                    <!-- date -->
                                    <span class="news-list-date">
                        <time datetime="2019-05-07">07.05.2019
                          <meta itemprop="datePublished" content="2019-05-07"></time></span>in
                                    <!-- first category -->
                                    <span class="news-list-category">Produkt</span></div>
                                <div class="desc hyphenate">Angepackt: LubiCool® seit Januar am Start.
                                    <br>
                                    <!-- teaser -->
                                    <!-- <a class="more" title="Angepackt: LubiCool® seit Januar am Start." href="/aktuelles/produkte/angepackt-lubicoolr-seit-januar-am-start/">
                                    Weiterlesen
                                    </a>--></div>
                                <div class="comman_para_link">
                      <span href="aktuelles\produkte\angepackt-lubicoolr-seit-januar-am-start\index.htm">Mehr erfahren
                        <i class="material-icons">arrow_forward</i></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class='col-sm-3'>
                        <a href='aktuelles\presse\mehr-als-nur-sauber\index.htm' class="post-item">
                            <!--=====================P artials/List/OneRowSlider.html -->
                            <div class="postimg">
                                <picture>
                                    <source media="(min-width: 1200px)" data-srcset='/fileadmin/_processed_/4/8/csm_knoll-pressemitteilung-micropur-zweistufig-b01-301x301_985befb1b7.jpg'>
                                    <source media="(min-width: 992px)" data-srcset='/fileadmin/_processed_/4/8/csm_knoll-pressemitteilung-micropur-zweistufig-b01-301x301_7053438860.jpg '>
                                    <source media="(min-width: 768px)" data-srcset='/fileadmin/_processed_/4/8/csm_knoll-pressemitteilung-micropur-zweistufig-b01-301x301_76ef442d28.jpg '>
                                    <source media="(min-width: 480px)" data-srcset='/fileadmin/_processed_/4/8/csm_knoll-pressemitteilung-micropur-zweistufig-b01-301x301_1bee536e33.jpg '>
                                    <source media="(max-width: 479px)" data-srcset='/fileadmin/_processed_/4/8/csm_knoll-pressemitteilung-micropur-zweistufig-b01-301x301_6a968fea32.jpg '>
                                    <img data-src='/fileadmin/_processed_/4/8/csm_knoll-pressemitteilung-micropur-zweistufig-b01-301x301_985befb1b7.jpg' style="width: 100%"></source>
                                    </source>
                                    </source>
                                    </source>
                                    </source>
                                </picture>
                            </div>
                            <div class="post_content">
                                <div class="date">
                                    <!-- date -->
                                    <span class="news-list-date">
                        <time datetime="2019-04-30">30.04.2019
                          <meta itemprop="datePublished" content="2019-04-30"></time></span>in
                                    <!-- first category -->
                                    <span class="news-list-category">Presse</span></div>
                                <div class="desc hyphenate">Mehr als „nur“ sauber
                                    <br>
                                    <!-- teaser -->
                                    <!-- <a class="more" title="Mehr als „nur“ sauber " href="/aktuelles/presse/mehr-als-nur-sauber/">
                                    Weiterlesen
                                    </a>--></div>
                                <div class="comman_para_link">
                      <span href="aktuelles\presse\mehr-als-nur-sauber\index.htm">Mehr erfahren
                        <i class="material-icons">arrow_forward</i></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class='col-sm-3'>
                        <a href='aktuelles\presse\pumpenfabrik-wangen-uebernimmt-den-geschaeftsbereich-exzenterschneckenpumpe-von-knoll\index.htm' class="post-item">
                            <!--=====================P artials/List/OneRowSlider.html -->
                            <div class="postimg">
                                <picture>
                                    <source media="(min-width: 1200px)" data-srcset='/fileadmin/_processed_/f/c/csm_knoll-pressemitteilung-mx-uebernahme-geschaeftsfuehrer-klein_2b8229a84b.jpg'>
                                    <source media="(min-width: 992px)" data-srcset='/fileadmin/_processed_/f/c/csm_knoll-pressemitteilung-mx-uebernahme-geschaeftsfuehrer-klein_f23bf9b217.jpg '>
                                    <source media="(min-width: 768px)" data-srcset='/fileadmin/_processed_/f/c/csm_knoll-pressemitteilung-mx-uebernahme-geschaeftsfuehrer-klein_53e557a617.jpg '>
                                    <source media="(min-width: 480px)" data-srcset='/fileadmin/_processed_/f/c/csm_knoll-pressemitteilung-mx-uebernahme-geschaeftsfuehrer-klein_8211b25fec.jpg '>
                                    <source media="(max-width: 479px)" data-srcset='/fileadmin/_processed_/f/c/csm_knoll-pressemitteilung-mx-uebernahme-geschaeftsfuehrer-klein_df6e9bf6c9.jpg '>
                                    <img data-src='/fileadmin/_processed_/f/c/csm_knoll-pressemitteilung-mx-uebernahme-geschaeftsfuehrer-klein_2b8229a84b.jpg' style="width: 100%"></source>
                                    </source>
                                    </source>
                                    </source>
                                    </source>
                                </picture>
                            </div>
                            <div class="post_content">
                                <div class="date">
                                    <!-- date -->
                                    <span class="news-list-date">
                        <time datetime="2019-01-21">21.01.2019
                          <meta itemprop="datePublished" content="2019-01-21"></time></span>in
                                    <!-- first category -->
                                    <span class="news-list-category">Presse</span></div>
                                <div class="desc hyphenate">Pumpenfabrik Wangen übernimmt den Geschäftsbereich Exzenterschneckenpumpe...
                                    <br>
                                    <!-- teaser -->
                                    <!-- <a class="more" title="Pumpenfabrik Wangen übernimmt den Geschäftsbereich Exzenterschneckenpumpe von HYDROFOS" href="/aktuelles/presse/pumpenfabrik-wangen-uebernimmt-den-geschaeftsbereich-exzenterschneckenpumpe-von-knoll/">
                                    Weiterlesen
                                    </a>--></div>
                                <div class="comman_para_link">
                      <span href="aktuelles\presse\pumpenfabrik-wangen-uebernimmt-den-geschaeftsbereich-exzenterschneckenpumpe-von-knoll\index.htm">Mehr erfahren
                        <i class="material-icons">arrow_forward</i></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class='col-sm-3'>
                        <a href='aktuelles\presse\staatssekretaer-dr-nussbaum-zeichnet-knoll-maschinenbau-gmbh-mit-dem-schulewirtschaft-preis-aus\index.htm' class="post-item">
                            <!--=====================P artials/List/OneRowSlider.html -->
                            <div class="postimg">
                                <picture>
                                    <source media="(min-width: 1200px)" data-srcset='/fileadmin/_processed_/d/1/csm_knoll-header-preis-schulewirtschaft-301x301_bdd0e3742b.jpg'>
                                    <source media="(min-width: 992px)" data-srcset='/fileadmin/_processed_/d/1/csm_knoll-header-preis-schulewirtschaft-301x301_25be9c9631.jpg '>
                                    <source media="(min-width: 768px)" data-srcset='/fileadmin/_processed_/d/1/csm_knoll-header-preis-schulewirtschaft-301x301_c5d58dd62e.jpg '>
                                    <source media="(min-width: 480px)" data-srcset='/fileadmin/_processed_/d/1/csm_knoll-header-preis-schulewirtschaft-301x301_0f97048008.jpg '>
                                    <source media="(max-width: 479px)" data-srcset='/fileadmin/_processed_/d/1/csm_knoll-header-preis-schulewirtschaft-301x301_9e7156b492.jpg '>
                                    <img data-src='/fileadmin/_processed_/d/1/csm_knoll-header-preis-schulewirtschaft-301x301_bdd0e3742b.jpg' style="width: 100%"></source>
                                    </source>
                                    </source>
                                    </source>
                                    </source>
                                </picture>
                            </div>
                            <div class="post_content">
                                <div class="date">
                                    <!-- date -->
                                    <span class="news-list-date">
                        <time datetime="2018-12-07">07.12.2018
                          <meta itemprop="datePublished" content="2018-12-07"></time></span>in
                                    <!-- first category -->
                                    <span class="news-list-category">Presse</span></div>
                                <div class="desc hyphenate">Staatssekretär Dr. Nussbaum zeichnet HYDROFOS Maschinenbau GmbH mit dem...
                                    <br>
                                    <!-- teaser -->
                                    <!-- <a class="more" title="Staatssekretär Dr. Nussbaum zeichnet HYDROFOS Maschinenbau GmbH mit dem SCHULEWIRTSCHAFT-Preis aus" href="/aktuelles/presse/staatssekretaer-dr-nussbaum-zeichnet-knoll-maschinenbau-gmbh-mit-dem-schulewirtschaft-preis-aus/">
                                    Weiterlesen
                                    </a>--></div>
                                <div class="comman_para_link">
                      <span href="aktuelles\presse\staatssekretaer-dr-nussbaum-zeichnet-knoll-maschinenbau-gmbh-mit-dem-schulewirtschaft-preis-aus\index.htm">Mehr erfahren
                        <i class="material-icons">arrow_forward</i></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class='col-sm-3'>
                        <a href='aktuelles\unternehmen\knoll-ist-familienverbunden-und-weltoffen\index.htm' class="post-item">
                            <!--=====================P artials/List/OneRowSlider.html -->
                            <div class="postimg">
                                <picture>
                                    <source media="(min-width: 1200px)" data-srcset='/fileadmin/_processed_/2/7/csm_KNOLL-news-2018-05-301x301_2d17933403.jpg'>
                                    <source media="(min-width: 992px)" data-srcset='/fileadmin/_processed_/2/7/csm_KNOLL-news-2018-05-301x301_9253a42a04.jpg '>
                                    <source media="(min-width: 768px)" data-srcset='/fileadmin/_processed_/2/7/csm_KNOLL-news-2018-05-301x301_44ae07b95d.jpg '>
                                    <source media="(min-width: 480px)" data-srcset='/fileadmin/_processed_/2/7/csm_KNOLL-news-2018-05-301x301_91bce48494.jpg '>
                                    <source media="(max-width: 479px)" data-srcset='/fileadmin/_processed_/2/7/csm_KNOLL-news-2018-05-301x301_19f87d115f.jpg '>
                                    <img data-src='/fileadmin/_processed_/2/7/csm_KNOLL-news-2018-05-301x301_2d17933403.jpg' style="width: 100%"></source>
                                    </source>
                                    </source>
                                    </source>
                                    </source>
                                </picture>
                            </div>
                            <div class="post_content">
                                <div class="date">
                                    <!-- date -->
                                    <span class="news-list-date">
                        <time datetime="2018-11-30">30.11.2018
                          <meta itemprop="datePublished" content="2018-11-30"></time></span>in
                                    <!-- first category -->
                                    <span class="news-list-category">Unternehmen</span></div>
                                <div class="desc hyphenate">HYDROFOS ist familienverbunden und weltoffen.
                                    <br>
                                    <!-- teaser -->
                                    <!-- <a class="more" title="HYDROFOS ist familienverbunden und weltoffen." href="/aktuelles/unternehmen/knoll-ist-familienverbunden-und-weltoffen/">
                                    Weiterlesen
                                    </a>--></div>
                                <div class="comman_para_link">
                      <span href="aktuelles\unternehmen\knoll-ist-familienverbunden-und-weltoffen\index.htm">Mehr erfahren
                        <i class="material-icons">arrow_forward</i></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class='col-sm-3'>
                        <a href='aktuelles\unternehmen\knoll-goes-global-und-baut-weltweit-eigene-niederlassungen-auf\index.htm' class="post-item">
                            <!--=====================P artials/List/OneRowSlider.html -->
                            <div class="postimg">
                                <picture>
                                    <source media="(min-width: 1200px)" data-srcset='/fileadmin/_processed_/8/3/csm_knoll-eroeffnungsfeier-knoll-china-301x301_dd4206a538.jpg'>
                                    <source media="(min-width: 992px)" data-srcset='/fileadmin/_processed_/8/3/csm_knoll-eroeffnungsfeier-knoll-china-301x301_ad1f2eb5d9.jpg '>
                                    <source media="(min-width: 768px)" data-srcset='/fileadmin/_processed_/8/3/csm_knoll-eroeffnungsfeier-knoll-china-301x301_2ab8f93e18.jpg '>
                                    <source media="(min-width: 480px)" data-srcset='/fileadmin/_processed_/8/3/csm_knoll-eroeffnungsfeier-knoll-china-301x301_fe1032a240.jpg '>
                                    <source media="(max-width: 479px)" data-srcset='/fileadmin/_processed_/8/3/csm_knoll-eroeffnungsfeier-knoll-china-301x301_54b8aa7460.jpg '>
                                    <img data-src='/fileadmin/_processed_/8/3/csm_knoll-eroeffnungsfeier-knoll-china-301x301_dd4206a538.jpg' style="width: 100%"></source>
                                    </source>
                                    </source>
                                    </source>
                                    </source>
                                </picture>
                            </div>
                            <div class="post_content">
                                <div class="date">
                                    <!-- date -->
                                    <span class="news-list-date">
                        <time datetime="2018-11-16">16.11.2018
                          <meta itemprop="datePublished" content="2018-11-16"></time></span>in
                                    <!-- first category -->
                                    <span class="news-list-category">Unternehmen</span></div>
                                <div class="desc hyphenate">HYDROFOS goes Global und baut weltweit eigene Niederlassungen auf ...
                                    <br>
                                    <!-- teaser -->
                                    <!-- <a class="more" title="HYDROFOS goes Global und baut weltweit eigene Niederlassungen auf" href="/aktuelles/unternehmen/knoll-goes-global-und-baut-weltweit-eigene-niederlassungen-auf/">
                                    Weiterlesen
                                    </a>--></div>
                                <div class="comman_para_link">
                      <span href="aktuelles\unternehmen\knoll-goes-global-und-baut-weltweit-eigene-niederlassungen-auf\index.htm">Mehr erfahren
                        <i class="material-icons">arrow_forward</i></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class='col-sm-3'>
                        <a href='aktuelles\presse\fuer-jedes-kss-system-die-richtige-pumpe\index.htm' class="post-item">
                            <!--=====================P artials/List/OneRowSlider.html -->
                            <div class="postimg">
                                <picture>
                                    <source media="(min-width: 1200px)" data-srcset='/fileadmin/_processed_/9/d/csm_knoll-pressemitteilung-tsc-mit-frequenzumrichter-b02-klein-02_cfdfde1330.jpg'>
                                    <source media="(min-width: 992px)" data-srcset='/fileadmin/_processed_/9/d/csm_knoll-pressemitteilung-tsc-mit-frequenzumrichter-b02-klein-02_ff0ad4f836.jpg '>
                                    <source media="(min-width: 768px)" data-srcset='/fileadmin/_processed_/9/d/csm_knoll-pressemitteilung-tsc-mit-frequenzumrichter-b02-klein-02_c1edc6d00b.jpg '>
                                    <source media="(min-width: 480px)" data-srcset='/fileadmin/_processed_/9/d/csm_knoll-pressemitteilung-tsc-mit-frequenzumrichter-b02-klein-02_a8af866a92.jpg '>
                                    <source media="(max-width: 479px)" data-srcset='/fileadmin/_processed_/9/d/csm_knoll-pressemitteilung-tsc-mit-frequenzumrichter-b02-klein-02_947c84bb6f.jpg '>
                                    <img data-src='/fileadmin/_processed_/9/d/csm_knoll-pressemitteilung-tsc-mit-frequenzumrichter-b02-klein-02_cfdfde1330.jpg' style="width: 100%"></source>
                                    </source>
                                    </source>
                                    </source>
                                    </source>
                                </picture>
                            </div>
                            <div class="post_content">
                                <div class="date">
                                    <!-- date -->
                                    <span class="news-list-date">
                        <time datetime="2018-11-13">13.11.2018
                          <meta itemprop="datePublished" content="2018-11-13"></time></span>in
                                    <!-- first category -->
                                    <span class="news-list-category">Presse</span></div>
                                <div class="desc hyphenate">Für jedes KSS-System die richtige Pumpe
                                    <br>
                                    <!-- teaser -->
                                    <!-- <a class="more" title="Für jedes KSS-System die richtige Pumpe" href="/aktuelles/presse/fuer-jedes-kss-system-die-richtige-pumpe/">
                                    Weiterlesen
                                    </a>--></div>
                                <div class="comman_para_link">
                      <span href="aktuelles\presse\fuer-jedes-kss-system-die-richtige-pumpe\index.htm">Mehr erfahren
                        <i class="material-icons">arrow_forward</i></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class='col-sm-3'>
                        <a href='aktuelles\produkte\hochdruck-fuer-drehautomaten\index.htm' class="post-item">
                            <!--=====================P artials/List/OneRowSlider.html -->
                            <div class="postimg">
                                <picture>
                                    <source media="(min-width: 1200px)" data-srcset='/fileadmin/_processed_/0/2/csm_knoll-pressemitteilung-lubicool-b01_2dff8fe872.jpg'>
                                    <source media="(min-width: 992px)" data-srcset='/fileadmin/_processed_/0/2/csm_knoll-pressemitteilung-lubicool-b01_22e8d40f11.jpg '>
                                    <source media="(min-width: 768px)" data-srcset='/fileadmin/_processed_/0/2/csm_knoll-pressemitteilung-lubicool-b01_8c5bcdee42.jpg '>
                                    <source media="(min-width: 480px)" data-srcset='/fileadmin/_processed_/0/2/csm_knoll-pressemitteilung-lubicool-b01_6a11b95a65.jpg '>
                                    <source media="(max-width: 479px)" data-srcset='/fileadmin/_processed_/0/2/csm_knoll-pressemitteilung-lubicool-b01_b1cf1fc60a.jpg '>
                                    <img data-src='/fileadmin/_processed_/0/2/csm_knoll-pressemitteilung-lubicool-b01_2dff8fe872.jpg' style="width: 100%"></source>
                                    </source>
                                    </source>
                                    </source>
                                    </source>
                                </picture>
                            </div>
                            <div class="post_content">
                                <div class="date">
                                    <!-- date -->
                                    <span class="news-list-date">
                        <time datetime="2018-08-06">06.08.2018
                          <meta itemprop="datePublished" content="2018-08-06"></time></span>in
                                    <!-- first category -->
                                    <span class="news-list-category">Produkt</span></div>
                                <div class="desc hyphenate">Hochdruck für Drehautomaten
                                    <br>
                                    <!-- teaser -->
                                    <!-- <a class="more" title="Hochdruck für Drehautomaten" href="/aktuelles/produkte/hochdruck-fuer-drehautomaten/">
                                    Weiterlesen
                                    </a>--></div>
                                <div class="comman_para_link">
                      <span href="aktuelles\produkte\hochdruck-fuer-drehautomaten\index.htm">Mehr erfahren
                        <i class="material-icons">arrow_forward</i></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class='col-sm-3'>
                        <a href='aktuelles\produkte\die-kreiselpumpe-bs-40-selbstansaugend-und-robust\index.htm' class="post-item">
                            <!--=====================P artials/List/OneRowSlider.html -->
                            <div class="postimg">
                                <picture>
                                    <source media="(min-width: 1200px)" data-srcset='/fileadmin/_processed_/d/6/csm_knoll-pressemitteilung-blockpumpe-b01_bb7e3d5de8.jpg'>
                                    <source media="(min-width: 992px)" data-srcset='/fileadmin/_processed_/d/6/csm_knoll-pressemitteilung-blockpumpe-b01_fd56d3908c.jpg '>
                                    <source media="(min-width: 768px)" data-srcset='/fileadmin/_processed_/d/6/csm_knoll-pressemitteilung-blockpumpe-b01_260e8c91be.jpg '>
                                    <source media="(min-width: 480px)" data-srcset='/fileadmin/_processed_/d/6/csm_knoll-pressemitteilung-blockpumpe-b01_4311ee92d0.jpg '>
                                    <source media="(max-width: 479px)" data-srcset='/fileadmin/_processed_/d/6/csm_knoll-pressemitteilung-blockpumpe-b01_6052c00bd7.jpg '>
                                    <img data-src='/fileadmin/_processed_/d/6/csm_knoll-pressemitteilung-blockpumpe-b01_bb7e3d5de8.jpg' style="width: 100%"></source>
                                    </source>
                                    </source>
                                    </source>
                                    </source>
                                </picture>
                            </div>
                            <div class="post_content">
                                <div class="date">
                                    <!-- date -->
                                    <span class="news-list-date">
                        <time datetime="2018-08-06">06.08.2018
                          <meta itemprop="datePublished" content="2018-08-06"></time></span>in
                                    <!-- first category -->
                                    <span class="news-list-category">Produkt</span></div>
                                <div class="desc hyphenate">Die Kreiselpumpe BS 40 – selbstansaugend und robust
                                    <br>
                                    <!-- teaser -->
                                    <!-- <a class="more" title="Die Kreiselpumpe BS 40 – selbstansaugend und robust" href="/aktuelles/produkte/die-kreiselpumpe-bs-40-selbstansaugend-und-robust/">
                                    Weiterlesen
                                    </a>--></div>
                                <div class="comman_para_link">
                      <span href="aktuelles\produkte\die-kreiselpumpe-bs-40-selbstansaugend-und-robust\index.htm">Mehr erfahren
                        <i class="material-icons">arrow_forward</i></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class='col-sm-3'>
                        <a href='aktuelles\presse\projekt-effproschliffup\index.htm' class="post-item">
                            <!--=====================P artials/List/OneRowSlider.html -->
                            <div class="postimg">
                                <picture>
                                    <source media="(min-width: 1200px)" data-srcset='/fileadmin/_processed_/1/9/csm_knoll-effproschliffup-301x301_4d16c65f70.png'>
                                    <source media="(min-width: 992px)" data-srcset='/fileadmin/_processed_/1/9/csm_knoll-effproschliffup-301x301_566c90459a.png '>
                                    <source media="(min-width: 768px)" data-srcset='/fileadmin/_processed_/1/9/csm_knoll-effproschliffup-301x301_72c980740a.png '>
                                    <source media="(min-width: 480px)" data-srcset='/fileadmin/_processed_/1/9/csm_knoll-effproschliffup-301x301_c8d65c9519.png '>
                                    <source media="(max-width: 479px)" data-srcset='/fileadmin/_processed_/1/9/csm_knoll-effproschliffup-301x301_dc3b019f4e.png '>
                                    <img data-src='/fileadmin/_processed_/1/9/csm_knoll-effproschliffup-301x301_4d16c65f70.png' style="width: 100%"></source>
                                    </source>
                                    </source>
                                    </source>
                                    </source>
                                </picture>
                            </div>
                            <div class="post_content">
                                <div class="date">
                                    <!-- date -->
                                    <span class="news-list-date">
                        <time datetime="2018-07-26">26.07.2018
                          <meta itemprop="datePublished" content="2018-07-26"></time></span>in
                                    <!-- first category -->
                                    <span class="news-list-category">Presse</span></div>
                                <div class="desc hyphenate">Projekt „EffProSchliffUp“
                                    <br>
                                    <!-- teaser -->
                                    <!-- <a class="more" title="Projekt „EffProSchliffUp“" href="/aktuelles/presse/projekt-effproschliffup/">
                                    Weiterlesen
                                    </a>--></div>
                                <div class="comman_para_link">
                      <span href="aktuelles\presse\projekt-effproschliffup\index.htm">Mehr erfahren
                        <i class="material-icons">arrow_forward</i></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class='col-sm-3'>
                        <a href='aktuelles\presse\amb-2018-erfrischend-anders\index.htm' class="post-item">
                            <!--=====================P artials/List/OneRowSlider.html -->
                            <div class="postimg">
                                <picture>
                                    <source media="(min-width: 1200px)" data-srcset='/fileadmin/_processed_/2/9/csm_logo-amb-301x301_73dc362bad.jpg'>
                                    <source media="(min-width: 992px)" data-srcset='/fileadmin/_processed_/2/9/csm_logo-amb-301x301_59a54b807b.jpg '>
                                    <source media="(min-width: 768px)" data-srcset='/fileadmin/_processed_/2/9/csm_logo-amb-301x301_bc59c98445.jpg '>
                                    <source media="(min-width: 480px)" data-srcset='/fileadmin/_processed_/2/9/csm_logo-amb-301x301_ed94601b72.jpg '>
                                    <source media="(max-width: 479px)" data-srcset='/fileadmin/_processed_/2/9/csm_logo-amb-301x301_1e34b3f860.jpg '>
                                    <img data-src='/fileadmin/_processed_/2/9/csm_logo-amb-301x301_73dc362bad.jpg' style="width: 100%"></source>
                                    </source>
                                    </source>
                                    </source>
                                    </source>
                                </picture>
                            </div>
                            <div class="post_content">
                                <div class="date">
                                    <!-- date -->
                                    <span class="news-list-date">
                        <time datetime="2018-06-27">27.06.2018
                          <meta itemprop="datePublished" content="2018-06-27"></time></span>in
                                    <!-- first category -->
                                    <span class="news-list-category">Presse</span></div>
                                <div class="desc hyphenate">AMB 2018 - Erfrischend anders
                                    <br>
                                    <!-- teaser -->
                                    <!-- <a class="more" title="AMB 2018 - Erfrischend anders" href="/aktuelles/presse/amb-2018-erfrischend-anders/">
                                    Weiterlesen
                                    </a>--></div>
                                <div class="comman_para_link">
                      <span href="aktuelles\presse\amb-2018-erfrischend-anders\index.htm">Mehr erfahren
                        <i class="material-icons">arrow_forward</i></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class='col-sm-3'>
                        <a href='aktuelles\presse\automatica-2018-unbegrenzte-transportmoeglichkeiten\index.htm' class="post-item">
                            <!--=====================P artials/List/OneRowSlider.html -->
                            <div class="postimg">
                                <picture>
                                    <source media="(min-width: 1200px)" data-srcset='/fileadmin/_processed_/c/6/csm_knoll-pressemitteilung-automatica2018-kupplungszufuehrung-b01-301x301_9eb56ae92a.jpg'>
                                    <source media="(min-width: 992px)" data-srcset='/fileadmin/_processed_/c/6/csm_knoll-pressemitteilung-automatica2018-kupplungszufuehrung-b01-301x301_f05942aeb0.jpg '>
                                    <source media="(min-width: 768px)" data-srcset='/fileadmin/_processed_/c/6/csm_knoll-pressemitteilung-automatica2018-kupplungszufuehrung-b01-301x301_82b9110a28.jpg '>
                                    <source media="(min-width: 480px)" data-srcset='/fileadmin/_processed_/c/6/csm_knoll-pressemitteilung-automatica2018-kupplungszufuehrung-b01-301x301_0c16a2aa3d.jpg '>
                                    <source media="(max-width: 479px)" data-srcset='/fileadmin/_processed_/c/6/csm_knoll-pressemitteilung-automatica2018-kupplungszufuehrung-b01-301x301_208fa23ad0.jpg '>
                                    <img data-src='/fileadmin/_processed_/c/6/csm_knoll-pressemitteilung-automatica2018-kupplungszufuehrung-b01-301x301_9eb56ae92a.jpg' style="width: 100%"></source>
                                    </source>
                                    </source>
                                    </source>
                                    </source>
                                </picture>
                            </div>
                            <div class="post_content">
                                <div class="date">
                                    <!-- date -->
                                    <span class="news-list-date">
                        <time datetime="2018-05-24">24.05.2018
                          <meta itemprop="datePublished" content="2018-05-24"></time></span>in
                                    <!-- first category -->
                                    <span class="news-list-category">Presse</span></div>
                                <div class="desc hyphenate">Automatica 2018 – Unbegrenzte Transportmöglichkeiten
                                    <br>
                                    <!-- teaser -->
                                    <!-- <a class="more" title="Automatica 2018 – Unbegrenzte Transportmöglichkeiten" href="/aktuelles/presse/automatica-2018-unbegrenzte-transportmoeglichkeiten/">
                                    Weiterlesen
                                    </a>--></div>
                                <div class="comman_para_link">
                      <span href="aktuelles\presse\automatica-2018-unbegrenzte-transportmoeglichkeiten\index.htm">Mehr erfahren
                        <i class="material-icons">arrow_forward</i></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class='col-sm-3'>
                        <a href='aktuelles\presse\heute-bestellt-morgen-geliefert\index.htm' class="post-item">
                            <!--=====================P artials/List/OneRowSlider.html -->
                            <div class="postimg">
                                <picture>
                                    <source media="(min-width: 1200px)" data-srcset='/fileadmin/_processed_/f/8/csm_knoll-pressemitteilung-kts-pumpe-komplett-b01-301x301_0c7af5da67.jpg'>
                                    <source media="(min-width: 992px)" data-srcset='/fileadmin/_processed_/f/8/csm_knoll-pressemitteilung-kts-pumpe-komplett-b01-301x301_91827c6fa1.jpg '>
                                    <source media="(min-width: 768px)" data-srcset='/fileadmin/_processed_/f/8/csm_knoll-pressemitteilung-kts-pumpe-komplett-b01-301x301_2cb58b7d1f.jpg '>
                                    <source media="(min-width: 480px)" data-srcset='/fileadmin/_processed_/f/8/csm_knoll-pressemitteilung-kts-pumpe-komplett-b01-301x301_d45a37a8c2.jpg '>
                                    <source media="(max-width: 479px)" data-srcset='/fileadmin/_processed_/f/8/csm_knoll-pressemitteilung-kts-pumpe-komplett-b01-301x301_f063a6423f.jpg '>
                                    <img data-src='/fileadmin/_processed_/f/8/csm_knoll-pressemitteilung-kts-pumpe-komplett-b01-301x301_0c7af5da67.jpg' style="width: 100%"></source>
                                    </source>
                                    </source>
                                    </source>
                                    </source>
                                </picture>
                            </div>
                            <div class="post_content">
                                <div class="date">
                                    <!-- date -->
                                    <span class="news-list-date">
                        <time datetime="2018-05-14">14.05.2018
                          <meta itemprop="datePublished" content="2018-05-14"></time></span>in
                                    <!-- first category -->
                                    <span class="news-list-category">Presse</span></div>
                                <div class="desc hyphenate">Heute bestellt, morgen geliefert
                                    <br>
                                    <!-- teaser -->
                                    <!-- <a class="more" title="Heute bestellt, morgen geliefert" href="/aktuelles/presse/heute-bestellt-morgen-geliefert/">
                                    Weiterlesen
                                    </a>--></div>
                                <div class="comman_para_link">
                      <span href="aktuelles\presse\heute-bestellt-morgen-geliefert\index.htm">Mehr erfahren
                        <i class="material-icons">arrow_forward</i></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class='col-sm-3'>
                        <a href='aktuelles\presse\neu-und-erfrischend-anders\index.htm' class="post-item">
                            <!--=====================P artials/List/OneRowSlider.html -->
                            <div class="postimg">
                                <picture>
                                    <source media="(min-width: 1200px)" data-srcset='/fileadmin/_processed_/2/7/csm_knoll-qr-code_cbd67ff4d6.png'>
                                    <source media="(min-width: 992px)" data-srcset='/fileadmin/_processed_/2/7/csm_knoll-qr-code_289166b38b.png '>
                                    <source media="(min-width: 768px)" data-srcset='/fileadmin/_processed_/2/7/csm_knoll-qr-code_d4a1ea8f73.png '>
                                    <source media="(min-width: 480px)" data-srcset='/fileadmin/_processed_/2/7/csm_knoll-qr-code_799eda7d05.png '>
                                    <source media="(max-width: 479px)" data-srcset='/fileadmin/_processed_/2/7/csm_knoll-qr-code_4a7c5e6895.png '>
                                    <img data-src='/fileadmin/_processed_/2/7/csm_knoll-qr-code_cbd67ff4d6.png' style="width: 100%"></source>
                                    </source>
                                    </source>
                                    </source>
                                    </source>
                                </picture>
                            </div>
                            <div class="post_content">
                                <div class="date">
                                    <!-- date -->
                                    <span class="news-list-date">
                        <time datetime="2018-04-26">26.04.2018
                          <meta itemprop="datePublished" content="2018-04-26"></time></span>in
                                    <!-- first category -->
                                    <span class="news-list-category">Presse</span></div>
                                <div class="desc hyphenate">Neu und erfrischend anders
                                    <br>
                                    <!-- teaser -->
                                    <!-- <a class="more" title="Neu und erfrischend anders" href="/aktuelles/presse/neu-und-erfrischend-anders/">
                                    Weiterlesen
                                    </a>--></div>
                                <div class="comman_para_link">
                      <span href="aktuelles\presse\neu-und-erfrischend-anders\index.htm">Mehr erfahren
                        <i class="material-icons">arrow_forward</i></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class='col-sm-3'>
                        <a href='aktuelles\presse\kss-reinigung-im-rampenlicht\index.htm' class="post-item">
                            <!--=====================P artials/List/OneRowSlider.html -->
                            <div class="postimg">
                                <picture>
                                    <source media="(min-width: 1200px)" data-srcset='/fileadmin/_processed_/d/9/csm_knoll-pressemitteilung-ceratizit-b08_aee80ed4a1.jpg'>
                                    <source media="(min-width: 992px)" data-srcset='/fileadmin/_processed_/d/9/csm_knoll-pressemitteilung-ceratizit-b08_9d355a7247.jpg '>
                                    <source media="(min-width: 768px)" data-srcset='/fileadmin/_processed_/d/9/csm_knoll-pressemitteilung-ceratizit-b08_74cc0515b4.jpg '>
                                    <source media="(min-width: 480px)" data-srcset='/fileadmin/_processed_/d/9/csm_knoll-pressemitteilung-ceratizit-b08_28323fc71d.jpg '>
                                    <source media="(max-width: 479px)" data-srcset='/fileadmin/_processed_/d/9/csm_knoll-pressemitteilung-ceratizit-b08_f2e9315e0b.jpg '>
                                    <img data-src='/fileadmin/_processed_/d/9/csm_knoll-pressemitteilung-ceratizit-b08_aee80ed4a1.jpg' style="width: 100%"></source>
                                    </source>
                                    </source>
                                    </source>
                                    </source>
                                </picture>
                            </div>
                            <div class="post_content">
                                <div class="date">
                                    <!-- date -->
                                    <span class="news-list-date">
                        <time datetime="2018-03-29">29.03.2018
                          <meta itemprop="datePublished" content="2018-03-29"></time></span>in
                                    <!-- first category -->
                                    <span class="news-list-category">Presse</span></div>
                                <div class="desc hyphenate">KSS-Reinigung im Rampenlicht
                                    <br>
                                    <!-- teaser -->
                                    <!-- <a class="more" title="KSS-Reinigung im Rampenlicht" href="/aktuelles/presse/kss-reinigung-im-rampenlicht/">
                                    Weiterlesen
                                    </a>--></div>
                                <div class="comman_para_link">
                      <span href="aktuelles\presse\kss-reinigung-im-rampenlicht\index.htm">Mehr erfahren
                        <i class="material-icons">arrow_forward</i></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
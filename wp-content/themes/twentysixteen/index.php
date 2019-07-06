<?php
get_header();
$getNavigationBar = getNavigationBar();
$banner = show_banners();
$houzhui = get_houzhui();
if($houzhui == '_zh'){
    $newsCateId = get_cat_ID('新闻');
}
$posts = get_posts("category=" . $newsCateId . "&order=ASC&numberposts=1000");
$catesLv1 = get_parent0();

?>

<body>
<div id="loader">
    <div class="wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
</div>
<div class="header_div">
    <nav class="navbar">
        <div class="navbar-header">
            <a class="navbar-brand-logo" href="index.htm">
                <img src="fileadmin\knoll\Resources\Public\images\KNOLL-Logo_4c.svg" alt="" class="img-responsive"></a>

            <button type="button" class="navbar-toggle" data-target="#myNavbar" id="myBtnNavbar" aria-expanded="false">
                <span class="icon-bar bar1"></span>
                <span class="icon-bar bar2"></span>
                <span class="icon-bar bar3"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <div class="menu_list">
                <ul class="nav navbar-nav">
                    <div class="ulwrapper">
                        <?php
                            foreach ($getNavigationBar as $term_id => $lv1title) {
                                echo '<li class="sub"><a title="'.$lv1title['name'].'" href="'.get_category_link($term_id).'">'.$lv1title['name'].'</a>';
                                if(!empty($lv1title['child'])){
                                    echo '<ul class=""><div class="ulwrapper">';
                                    foreach ($lv1title['child'] as $lv2term_id => $lv2title){
                                        echo '<li class="sub "><a title="'.$lv2title['name'].'" href="'.get_category_link($lv2term_id).'">'.$lv2title['name'].'</a>';
                                        if(!empty($lv2title['child'])){
                                            echo '<ul class=""><div class="ulwrapper">';
                                            foreach ($lv2title['child'] as $lv3term_id => $lv3title){
                                                echo '<li class="sub"><a title="'.$lv3title['name'].'" href="'.get_category_link($lv3term_id).'">'.$lv3title['name'].'</a></li>';
                                            }
                                            echo '</div></ul>';
                                        }
                                        echo '</li>';
                                    }
                                    echo ' </div></ul>';
                                }
                                echo '</li>';
                            }
                        ?>
                    </div>
                </ul>
                <div class="menu_bottom">
                    <div class="language_div">
                        <div class="language_text">Sprache auswählen:</div>
                        <ul class="bar_open">
                            <li class="active">
                                <a href="index.htm">
                                    <div class="icon">
                                        <span>de</span></div>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="en\index.htm">
                                    <div class="icon">
                                        <span>en</span></div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="search_div_mobile">
                        <div class="form-group search_container_mobile">
                            <input type="text" class="form-control" id="search_container_mobile_input">
                            <button id="search_container_mobile_submit" type="button" class="btn btn_custom">
                                <i class="material-icons">search</i></button>
                        </div>
                       </div>
                    <div class="person_contact lang_bar_open mobile">
                     </div>
                </div>
            </div>
        </div>
    </nav>
</div>
<div class="header_right">
    <ul>
        <li class="search_btn">
            <a>
                <div class="icon">
                    <i class="material-icons">search</i></div>
            </a>
        </li>
        <li class="language_btn  ">
            <a>
                <div class="icon language_icon">
                    <span>DE</span>
                    <i class="material-icons">language</i></div>
            </a>
            <ul>
                <li class="active">
                    <a href="?lang=zh">
                        <div class="icon">
                            <span>de</span></div>
                    </a>
                </li>
                <li class=" ">
                    <a href="?lang=en">
                        <div class="icon">
                            <span>en</span></div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="contact_btn">
            <a>
                <div class="icon">
                    <i class="material-icons icon_person">person</i>
                    <i class="material-icons icon_clear">clear</i></div>
            </a>
            <div class="person_contact"></div>
        </li>
        <li class="back_btn">
            <a>
                <div class="icon">
                    <i class="material-icons icon_arrow_back">arrow_back</i>
                    <i class="material-icons icon_clear">clear</i></div>
            </a>
            <ul>
                <li>
                    <a href="index.htm">
                        <div class="icon">
                            <span>Zur Übersicht</span></div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>
<div class="search_div hide_search">
    <div class="tx-indexedsearch-searchbox search_form_div">
        <form method="post" class="form-inline" id="tx_indexedsearch" action="/suche/results/">
            <div>
                <input type="hidden" name="tx_indexedsearch_pi2[__referrer][@extension]" value="IndexedSearch">
                <input type="hidden" name="tx_indexedsearch_pi2[__referrer][@vendor]" value="TYPO3\CMS">
                <input type="hidden" name="tx_indexedsearch_pi2[__referrer][@controller]" value="Search">
                <input type="hidden" name="tx_indexedsearch_pi2[__referrer][@action]" value="form">
                <input type="hidden" name="tx_indexedsearch_pi2[__referrer][arguments]" value="YTowOnt9c04c20365159373e6376f91f830343add4882613">
                <input type="hidden" name="tx_indexedsearch_pi2[__referrer][@request]" value="a:4:{s:10:&quot;@extension&quot;;s:13:&quot;IndexedSearch&quot;;s:11:&quot;@controller&quot;;s:6:&quot;Search&quot;;s:7:&quot;@action&quot;;s:4:&quot;form&quot;;s:7:&quot;@vendor&quot;;s:9:&quot;TYPO3\CMS&quot;;}5461e69d0ef68a73d202cbfec1edc197a616fb03">
                <input type="hidden" name="tx_indexedsearch_pi2[__trustedProperties]" value="a:1:{s:6:&quot;search&quot;;a:1:{s:12:&quot;submitButton&quot;;i:1;}}6f90fcfbce1abac6a62c7dc994b276a019fd77b8"></div>
            <div class="tx-indexedsearch-form form-group">
                <input value='' class="form-control indexed-search-autocomplete-sword" id="tx-indexedsearch-searchbox-sword" type="text" name="tx_indexedsearch_pi2[search][sword]" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
                <div class="tx-indexedsearch-search-submit submit_btn">
                    <input class="form-control" id="tx-indexedsearch-searchbox-button-submit" type="submit" value="Suchen" name="tx_indexedsearch_pi2[search][submitButton]">
                    <i class="material-icons">search</i></div>
            </div>
            <button type="button" class="btn btn_custom">
                <i class="material-icons">clear</i></button>
        </form>
    </div>
    <div class="search-autocomplete-results" data-mode="word" data-searchonclick="true" data-maxresults="6" data-minlength="2" data-searchurl="/nc/?type=7423794&amp;tx_indexedsearchautocomplete_pi2%5Baction%5D=search&amp;tx_indexedsearchautocomplete_pi2%5Bcontroller%5D=Search"></div>
</div>
<div class="overlay search_overlay hide"></div>
<div class="overlay main_overlay hide" id="mainOverlay"></div>
<div class="contact_header_module hide">
    <address class="common_para rte_atag">
        <p>KNOLL Maschinenbau GmbH
            <br>Schwarzachstraße 20
            <br>D-88348 Bad Saulgau</p></address>
    <div class="kontakt_no">
        <div class="kontact_icons">
            <i class="material-icons icon_clear">phone</i></div>
        <div class="number common_para">
            <a href="tel:+4975812008-0">+49 7581 2008-0</a></div>
    </div>
    <div class="kontakt_no">
        <div class="kontact_icons">
            <i class="material-icons icon_clear">print</i></div>
        <div class="number common_para">
            <a href="fax:+4975812008-90140">+49 7581 2008-90140</a></div>
    </div>
    <div class="kontakt_no">
        <div class="kontact_icons">
            <i class="material-icons icon_clear">email</i></div>
        <div class="number common_para">
            <a href="javascript:linkTo_UnCryptMailto('ocknvq,kphq0kvyqtmuBmpqnn\/od0fg');">info.itworks(at)knoll-mb.de</a></div>
    </div>
    <div class="link_text common_para">
        <a href='unternehmen\knoll-weltweit\index.htm'>KNOLL weltweit
            <i class="material-icons">arrow_forward</i></a>
    </div>
</div>
<!--轮播图的部分-->
<section class="Pageentry_Header_Slider" id="">
    <div class="main_home_slider has-autoplay">
        <?php

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
<section class="Headline_Copy_Image secdv no_background remove_bottom_padding " id="">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2 class='big remove_margin_header_top hyphenate'>新闻和日期</h2>
            </div>
            <div class="col-sm-6">
                <div class="headline_copy_image_common_para common_para common_para_light rte_atag">
                    <p>关于KNOLL员工，产品，活动的精彩信息 - KNOLL live每周7天每天24小时开放。</p>
                </div>
                <!--contacts_headline-->
                <!--contacts_headline-->
                <div class="comman_para_link">
                    <a href="aktuelles\index.htm">对更多感兴趣？
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
                            $args = get_metadata('post', $post->ID, $key, false);
                            if(!empty($args['image'])){
                                $suoImageLink = $args['image'][0];
                            }
                            ?>
                            <div class='col-sm-3'>
                                <a href='aktuelles\unternehmen\ausgepackt-das-gebaeude-k1-eroeffnet-ende-mai\index.htm' class="post-item">
                                    <!--=====================P artials/List/OneRowSlider.html -->
                                    <div class="postimg">
                                        <picture>
                                            <source media="(min-width: 992px)" data-srcset='<?php echo $suoImageLink;?>'>
                                            <source media="(min-width: 1200px)" data-srcset='<?php echo $suoImageLink;?>'>
                                            <source media="(min-width: 768px)" data-srcset='<?php echo $suoImageLink;?>'>
                                            <source media="(min-width: 480px)" data-srcset='<?php echo $suoImageLink;?>'>
                                            <source media="(max-width: 479px)" data-srcset='<?php echo $suoImageLink;?>'>
                                            <img data-src='<?php echo $suoImageLink;?>' style="width: 100%"></source>
                                            </source>
                                            </source>
                                            </source>
                                            </source>
                                        </picture>
                                    </div>
                                    <div class="post_content">
                                        <div class="date">
                                            <!-- date -->
                                            <span class="news-list-date"><time datetime="2019-05-07">07.05.2019
                                                <meta itemprop="datePublished" content="2019-05-07"></time></span>in
                                            <!-- first category -->
                                            <span class="news-list-category">Unternehmen</span></div>
                                        <div class="desc hyphenate"><?php echo  $post->post_title;?><br></div>
                                        <div class="comman_para_link">
                                          <span href="aktuelles\unternehmen\ausgepackt-das-gebaeude-k1-eroeffnet-ende-mai\index.htm">Mehr erfahren
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
                                    <!-- <a class="more" title="Pumpenfabrik Wangen übernimmt den Geschäftsbereich Exzenterschneckenpumpe von KNOLL" href="/aktuelles/presse/pumpenfabrik-wangen-uebernimmt-den-geschaeftsbereich-exzenterschneckenpumpe-von-knoll/">
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
                                <div class="desc hyphenate">Staatssekretär Dr. Nussbaum zeichnet KNOLL Maschinenbau GmbH mit dem...
                                    <br>
                                    <!-- teaser -->
                                    <!-- <a class="more" title="Staatssekretär Dr. Nussbaum zeichnet KNOLL Maschinenbau GmbH mit dem SCHULEWIRTSCHAFT-Preis aus" href="/aktuelles/presse/staatssekretaer-dr-nussbaum-zeichnet-knoll-maschinenbau-gmbh-mit-dem-schulewirtschaft-preis-aus/">
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
                                <div class="desc hyphenate">KNOLL ist familienverbunden und weltoffen.
                                    <br>
                                    <!-- teaser -->
                                    <!-- <a class="more" title="KNOLL ist familienverbunden und weltoffen." href="/aktuelles/unternehmen/knoll-ist-familienverbunden-und-weltoffen/">
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
                                <div class="desc hyphenate">KNOLL goes Global und baut weltweit eigene Niederlassungen auf ...
                                    <br>
                                    <!-- teaser -->
                                    <!-- <a class="more" title="KNOLL goes Global und baut weltweit eigene Niederlassungen auf" href="/aktuelles/unternehmen/knoll-goes-global-und-baut-weltweit-eigene-niederlassungen-auf/">
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
<section class="Headline_Copy_Image secdv background_grey  " id="">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2 class='big remove_margin_header_top hyphenate'>
                    公司
                    </h2>
                <div class="headline_copy_image_common_para common_para common_para_light rte_atag">
                    <p>我们专注于为客户做好事。为此，我们为公司创造了最佳条件。我们运动的创新和进步。 </p>
                 </div>

                <div class="common_para comman_para_link">
                    <a href='unternehmen\index.htm'>对更多感兴趣？
                        <i class="material-icons">arrow_forward</i></a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class='right_image'>
                    <picture>
                        <img data-src="http://localhost/wordpress/wp-content/uploads/2019/07/right_image.jpg" alt="Einblick in die Blechbearbeitung der KNOLL Maschinenbau GmbH"></picture>
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
                    <p>KNOLL是金属加工输送系统，过滤系统和泵的领先供应商。它们运输和分离芯片和冷却润滑剂。另一个部门通过装配和运输系统解决了苛刻的物流任务</p>
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
                                if(!empty($cateLv1->description)){

                                ?>
                                <div class="col-sm-3 col-xs-6 contbx">
                                    <a href="einzelanlagen\index.htm" class="manage_div_content_boxes">
                                        <div class="image_div smlbx">
                                            <picture>
                                                <source media="(min-width: 1200px)" data-srcset='<?php  echo $cateLv1->description;?>'>
                                                <source media="(min-width: 992px)" data-srcset='<?php  echo $cateLv1->description;?> '>
                                                <source media="(min-width: 768px)" data-srcset='<?php  echo $cateLv1->description;?>'>
                                                <source media="(min-width: 480px)" data-srcset='<?php  echo $cateLv1->description;?>'>
                                                <source media="(max-width: 479px)" data-srcset='<?php  echo $cateLv1->description;?>'>
                                                <img data-src='<?php  echo $cateLv1->description;?>' alt="Kompaktfilter KF - KNOLL Maschinenbau GmbH"></source>
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
                                }
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
                                        <img data-src='/fileadmin/_processed_/7/f/csm_knoll-kompaktfilter-kf-301x301-01_3f22f30d66.jpg' alt="Kompaktfilter KF - KNOLL Maschinenbau GmbH"></source>
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
                                        <img data-src='/fileadmin/_processed_/f/7/csm_knoll-zentralsysteme-301x301-01_4e887329e0.jpg' alt="Zentralsystem der KNOLL Maschinenbau GmbH"></source>
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
                                        <img data-src='/fileadmin/_processed_/7/3/csm_knoll-transportsystem-ts-301x301-02_5663ffd6b4.jpg' alt="Transportsystem TS – KNOLL Maschinenbau GmbH"></source>
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
                        <source media="(min-width: 1024px)" data-srcset="/fileadmin/Home/knoll-hotline-644x644-01.jpg">
                        <source media="(min-width: 768px)" data-srcset="/fileadmin/_processed_/4/f/csm_knoll-hotline-644x644-01_47f5ef77ab.jpg">
                        <source media="(min-width: 480px)" data-srcset="/fileadmin/_processed_/4/f/csm_knoll-hotline-644x644-01_47f5ef77ab.jpg">
                        <source media="(max-width: 479px)" data-srcset="/fileadmin/_processed_/4/f/csm_knoll-hotline-644x644-01_4a63844377.jpg">
                        <img data-src="/fileadmin/_processed_/4/f/csm_knoll-hotline-644x644-01_6213d9aa58.jpg" alt="Mitarbeiterin an der Service-Hotline - KNOLL Maschinenbau GmbH" style="width: 100%;"></source>
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
<footer id="footer">
    <div class="footer_dv">
        <div class="container">
            <div class="row footer_menu_desktop visible-xs-block">
                <div class="col-xs-2">
                    <ul class="menu_content">
                        <li>
                            <h4 class="menu_head">
                                <!--<a href="/unternehmen/" class="">Unternehmen</a>-->
                                <a class="hyphenate" title="Unternehmen" href="unternehmen\index.htm">Unternehmen</a>
                            </h4>
                            <ul>
                                <li class="menu_sub">
                                    <!--<a href="/unternehmen/knoll-weltweit/">KNOLL weltweit</a>-->
                                    <a class="hyphenate" title="KNOLL weltweit" href="unternehmen\knoll-weltweit\index.htm">KNOLL weltweit</a></li>
                                <li class="menu_sub">
                                    <!--<a href="/unternehmen/#geschaeftsleitung">Geschäftsleitung</a>-->
                                    <a class="hyphenate" title="Geschäftsleitung" href="/unternehmen/geschaeftsleitung/">Geschäftsleitung</a></li>
                                <li class="menu_sub">
                                    <!--<a href="/unternehmen/#historie">Historie</a>-->
                                    <a class="hyphenate" title="Historie" href="/unternehmen/historie/">Historie</a></li>
                                <li class="menu_sub">
                                    <!--<a href="/unternehmen/#unternehmensleitbild">Unternehmensleitbild</a>-->
                                    <a class="hyphenate" title="Unternehmensleitbild" href="/unternehmen/unternehmensleitbild/">Unternehmensleitbild</a></li>
                                <li class="menu_sub">
                                    <!--<a href="/unternehmen/#portrait">Portrait</a>-->
                                    <a class="hyphenate" title="Portrait" href="/unternehmen/portrait/">Portrait</a></li>
                                <li class="menu_sub">
                                    <!--<a href="/unternehmen/#zertifikate">Zertifikate</a>-->
                                    <a class="hyphenate" title="Zertifikate" href="/unternehmen/zertifikate/">Zertifikate</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-2">
                    <ul class="menu_content">
                        <li>
                            <h4 class="menu_head">
                                <!--<a href="/einzelanlagen/" class="">Einzelanlagen</a>-->
                                <a class="hyphenate" title="Einzelanlagen" href="einzelanlagen\index.htm">Einzelanlagen</a></h4>
                            <ul>
                                <li class="menu_sub">
                                    <!--<a href="/einzelanlagen/hochdruckanlagen/">Hochdruckanlagen</a>-->
                                    <a class="hyphenate" title="Hochdruckanlagen" href="einzelanlagen\hochdruckanlagen\index.htm">Hochdruckanlagen</a></li>
                                <li class="menu_sub">
                                    <!--<a href="/einzelanlagen/filteranlagen/">Filteranlagen</a>-->
                                    <a class="hyphenate" title="Filteranlagen" href="einzelanlagen\filteranlagen\index.htm">Filteranlagen</a></li>
                                <li class="menu_sub">
                                    <!--<a href="/einzelanlagen/foerderanlagen/">Förderanlagen</a>-->
                                    <a class="hyphenate" title="Förderanlagen" href="einzelanlagen\foerderanlagen\index.htm">Förderanlagen</a></li>
                                <li class="menu_sub">
                                    <!--<a href="/einzelanlagen/mms-controlube/">MMS ControLube</a>-->
                                    <a class="hyphenate" title="MMS ControLube" href="einzelanlagen\mms-controlube\index.htm">MMS ControLube</a></li>
                                <li class="menu_sub">
                                    <!--<a href="/einzelanlagen/zerkleinerungsanlagen/">Zerkleinerungsanlagen</a>-->
                                    <a class="hyphenate" title="Zerkleinerungsanlagen" href="einzelanlagen\zerkleinerungsanlagen\index.htm">Zerkleinerungsanlagen</a></li>
                                <li class="menu_sub">
                                    <!--<a href="/einzelanlagen/#anwendungen">Anwendungen</a>-->
                                    <a class="hyphenate" title="Anwendungen" href="/einzelanlagen/anwendungen/">Anwendungen</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-2">
                    <ul class="menu_content">
                        <li>
                            <h4 class="menu_head">
                                <!--<a href="/zentralsysteme/" class="">Zentralsysteme</a>-->
                                <a class="hyphenate" title="Zentralsysteme" href="zentralsysteme\index.htm">Zentralsysteme</a></h4>
                            <ul>
                                <li class="menu_sub">
                                    <!--<a href="/zentralsysteme/systeme-mit-pumptechnik/">Systeme mit Pumptechnik</a>-->
                                    <a class="hyphenate" title="Systeme mit Pumptechnik" href="zentralsysteme\systeme-mit-pumptechnik\index.htm">Systeme mit Pumptechnik</a></li>
                                <li class="menu_sub">
                                    <!--<a href="/zentralsysteme/systeme-mit-saugtechnik/">Systeme mit Saugtechnik</a>-->
                                    <a class="hyphenate" title="Systeme mit Saugtechnik" href="zentralsysteme\systeme-mit-saugtechnik\index.htm">Systeme mit Saugtechnik</a></li>
                                <li class="menu_sub">
                                    <!--<a href="/zentralsysteme/systeme-mit-sammelfoerderer/">Systeme mit Sammelförderer</a>-->
                                    <a class="hyphenate" title="Systeme mit Sammelförderer" href="zentralsysteme\systeme-mit-sammelfoerderer\index.htm">Systeme mit Sammelförderer</a></li>
                                <li class="menu_sub">
                                    <!--<a href="/zentralsysteme/systeme-zur-spaeneaufbereitung/">Systeme zur Späneaufbereitung</a>-->
                                    <a class="hyphenate" title="Systeme zur Späneaufbereitung" href="zentralsysteme\systeme-zur-spaeneaufbereitung\index.htm">Systeme zur Späneaufbereitung</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-2">
                    <ul class="menu_content">
                        <li>
                            <h4 class="menu_head">
                                <!--<a href="/transportsysteme/" class="">Transportsysteme</a>-->
                                <a class="hyphenate" title="Transportsysteme" href="transportsysteme\index.htm">Transportsysteme</a></h4>
                            <ul>
                                <li class="menu_sub">
                                    <!--<a href="/transportsysteme/#montageanwendungen">Montageanwendungen</a>-->
                                    <a class="hyphenate" title="Montageanwendungen" href="/transportsysteme/montageanwendungen/">Montageanwendungen</a></li>
                                <li class="menu_sub">
                                    <!--<a href="/transportsysteme/#logistikanwendungen">Logistikanwendungen</a>-->
                                    <a class="hyphenate" title="Logistikanwendungen" href="/transportsysteme/logistikanwendungen/">Logistikanwendungen</a></li>
                                <li class="menu_sub">
                                    <!--<a href="/transportsysteme/#service">Dienstleistungen</a>-->
                                    <a class="hyphenate" title="Dienstleistungen" href="/transportsysteme/dienstleistungen/">Dienstleistungen</a></li>
                                <li class="menu_sub">
                                    <!--<a href="/transportsysteme/#branchen">Branchen</a>-->
                                    <a class="hyphenate" title="Branchen" href="/transportsysteme/branchen/">Branchen</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-2">
                    <ul class="menu_content">
                        <li>
                            <h4 class="menu_head">
                                <!--<a href="/pumpen/" class="">Pumpen</a>-->
                                <a class="hyphenate" title="Pumpen" href="pumpen\index.htm">Pumpen</a></h4>
                            <ul>
                                <li class="menu_sub">
                                    <!--<a href="/pumpen/schraubenspindelpumpe-kts/">Schraubenspindelpumpe KTS</a>-->
                                    <a class="hyphenate" title="Schraubenspindelpumpe KTS" href="pumpen\schraubenspindelpumpe-kts\index.htm">Schraubenspindelpumpe KTS</a></li>
                                <li class="menu_sub">
                                    <!--<a href="/pumpen/schraubenspindelpumpe-ktsv/">Schraubenspindelpumpe KTSV</a>-->
                                    <a class="hyphenate" title="Schraubenspindelpumpe KTSV" href="pumpen\schraubenspindelpumpe-ktsv\index.htm">Schraubenspindelpumpe KTSV</a></li>
                                <li class="menu_sub">
                                    <!--<a href="/pumpen/kreiselpumpe/">Kreiselpumpe</a>-->
                                    <a class="hyphenate" title="Kreiselpumpe" href="pumpen\kreiselpumpe\index.htm">Kreiselpumpe</a></li>
                                <li class="menu_sub">
                                    <!--<a href="/pumpen/exzenterschneckenpumpe-mx/">Exzenterschneckenpumpe MX</a>-->
                                    <a class="hyphenate" title="Exzenterschneckenpumpe MX" href="pumpen\exzenterschneckenpumpe-mx\index.htm">Exzenterschneckenpumpe MX</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-2">
                    <ul class="menu_content">
                        <li>
                            <h4 class="menu_head">
                                <a href="service\index.htm" class="hyphenate test">Service</a></h4>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-2">
                    <ul class="menu_content">
                        <li>
                            <h4 class="menu_head">
                                <a href="aktuelles\index.htm" class="hyphenate test">Aktuelles</a></h4>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-2">
                    <ul class="menu_content">
                        <li>
                            <h4 class="menu_head">
                                <a href="kontakt\index.htm" class="hyphenate test">Kontakt</a></h4>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-2">
                    <ul class="menu_content">
                        <li>
                            <h4 class="menu_head">
                                <a href="karriere\index.htm" class="hyphenate test">Karriere</a></h4>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row hidden-xs">
                <?php


                ?>
                <div class="col-xs-2">
                    <ul class="menu_content">
                        <li>
                            <h4 class="menu_head">
                                <!--<a href="/unternehmen/" class="">Unternehmen</a>-->
                                <a class="hyphenate" title="Unternehmen" href="unternehmen\index.htm">Unternehmen</a></h4>
                            <ul>
                                <li class="menu_sub">
                                    <!--<a href="/unternehmen/knoll-weltweit/">KNOLL weltweit</a>-->
                                    <a class="hyphenate" title="KNOLL weltweit" href="unternehmen\knoll-weltweit\index.htm">KNOLL weltweit</a></li>
                                <li class="menu_sub">
                                    <!--<a href="/unternehmen/#geschaeftsleitung">Geschäftsleitung</a>-->
                                    <a class="hyphenate" title="Geschäftsleitung" href="/unternehmen/geschaeftsleitung/">Geschäftsleitung</a></li>
                                <li class="menu_sub">
                                    <!--<a href="/unternehmen/#historie">Historie</a>-->
                                    <a class="hyphenate" title="Historie" href="/unternehmen/historie/">Historie</a></li>
                                <li class="menu_sub">
                                    <!--<a href="/unternehmen/#unternehmensleitbild">Unternehmensleitbild</a>-->
                                    <a class="hyphenate" title="Unternehmensleitbild" href="/unternehmen/unternehmensleitbild/">Unternehmensleitbild</a></li>
                                <li class="menu_sub">
                                    <!--<a href="/unternehmen/#portrait">Portrait</a>-->
                                    <a class="hyphenate" title="Portrait" href="/unternehmen/portrait/">Portrait</a></li>
                                <li class="menu_sub">
                                    <!--<a href="/unternehmen/#zertifikate">Zertifikate</a>-->
                                    <a class="hyphenate" title="Zertifikate" href="/unternehmen/zertifikate/">Zertifikate</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-2">
                    <ul class="menu_content">
                        <li>
                            <h4 class="menu_head">
                                <!--<a href="/einzelanlagen/" class="">Einzelanlagen</a>-->
                                <a class="hyphenate" title="Einzelanlagen" href="einzelanlagen\index.htm">Einzelanlagen</a></h4>
                            <ul>
                                <li class="menu_sub">
                                    <!--<a href="/einzelanlagen/hochdruckanlagen/">Hochdruckanlagen</a>-->
                                    <a class="hyphenate" title="Hochdruckanlagen" href="einzelanlagen\hochdruckanlagen\index.htm">Hochdruckanlagen</a></li>
                                <li class="menu_sub">
                                    <!--<a href="/einzelanlagen/filteranlagen/">Filteranlagen</a>-->
                                    <a class="hyphenate" title="Filteranlagen" href="einzelanlagen\filteranlagen\index.htm">Filteranlagen</a></li>
                                <li class="menu_sub">
                                    <!--<a href="/einzelanlagen/foerderanlagen/">Förderanlagen</a>-->
                                    <a class="hyphenate" title="Förderanlagen" href="einzelanlagen\foerderanlagen\index.htm">Förderanlagen</a></li>
                                <li class="menu_sub">
                                    <!--<a href="/einzelanlagen/mms-controlube/">MMS ControLube</a>-->
                                    <a class="hyphenate" title="MMS ControLube" href="einzelanlagen\mms-controlube\index.htm">MMS ControLube</a></li>
                                <li class="menu_sub">
                                    <!--<a href="/einzelanlagen/zerkleinerungsanlagen/">Zerkleinerungsanlagen</a>-->
                                    <a class="hyphenate" title="Zerkleinerungsanlagen" href="einzelanlagen\zerkleinerungsanlagen\index.htm">Zerkleinerungsanlagen</a></li>
                                <li class="menu_sub">
                                    <!--<a href="/einzelanlagen/#anwendungen">Anwendungen</a>-->
                                    <a class="hyphenate" title="Anwendungen" href="/einzelanlagen/anwendungen/">Anwendungen</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-2">
                    <ul class="menu_content">
                        <li>
                            <h4 class="menu_head">
                                <!--<a href="/zentralsysteme/" class="">Zentralsysteme</a>-->
                                <a class="hyphenate" title="Zentralsysteme" href="zentralsysteme\index.htm">Zentralsysteme</a></h4>
                            <ul>
                                <li class="menu_sub">
                                    <!--<a href="/zentralsysteme/systeme-mit-pumptechnik/">Systeme mit Pumptechnik</a>-->
                                    <a class="hyphenate" title="Systeme mit Pumptechnik" href="zentralsysteme\systeme-mit-pumptechnik\index.htm">Systeme mit Pumptechnik</a></li>
                                <li class="menu_sub">
                                    <!--<a href="/zentralsysteme/systeme-mit-saugtechnik/">Systeme mit Saugtechnik</a>-->
                                    <a class="hyphenate" title="Systeme mit Saugtechnik" href="zentralsysteme\systeme-mit-saugtechnik\index.htm">Systeme mit Saugtechnik</a></li>
                                <li class="menu_sub">
                                    <!--<a href="/zentralsysteme/systeme-mit-sammelfoerderer/">Systeme mit Sammelförderer</a>-->
                                    <a class="hyphenate" title="Systeme mit Sammelförderer" href="zentralsysteme\systeme-mit-sammelfoerderer\index.htm">Systeme mit Sammelförderer</a></li>
                                <li class="menu_sub">
                                    <!--<a href="/zentralsysteme/systeme-zur-spaeneaufbereitung/">Systeme zur Späneaufbereitung</a>-->
                                    <a class="hyphenate" title="Systeme zur Späneaufbereitung" href="zentralsysteme\systeme-zur-spaeneaufbereitung\index.htm">Systeme zur Späneaufbereitung</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-2">
                    <ul class="menu_content">
                        <li>
                            <h4 class="menu_head">
                                <!--<a href="/transportsysteme/" class="">Transportsysteme</a>-->
                                <a class="hyphenate" title="Transportsysteme" href="transportsysteme\index.htm">Transportsysteme</a></h4>
                            <ul>
                                <li class="menu_sub">
                                    <!--<a href="/transportsysteme/#montageanwendungen">Montageanwendungen</a>-->
                                    <a class="hyphenate" title="Montageanwendungen" href="/transportsysteme/montageanwendungen/">Montageanwendungen</a></li>
                                <li class="menu_sub">
                                    <!--<a href="/transportsysteme/#logistikanwendungen">Logistikanwendungen</a>-->
                                    <a class="hyphenate" title="Logistikanwendungen" href="/transportsysteme/logistikanwendungen/">Logistikanwendungen</a></li>
                                <li class="menu_sub">
                                    <!--<a href="/transportsysteme/#service">Dienstleistungen</a>-->
                                    <a class="hyphenate" title="Dienstleistungen" href="/transportsysteme/dienstleistungen/">Dienstleistungen</a></li>
                                <li class="menu_sub">
                                    <!--<a href="/transportsysteme/#branchen">Branchen</a>-->
                                    <a class="hyphenate" title="Branchen" href="/transportsysteme/branchen/">Branchen</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-2">
                    <ul class="menu_content">
                        <li>
                            <h4 class="menu_head">
                                <!--<a href="/pumpen/" class="">Pumpen</a>-->
                                <a class="hyphenate" title="Pumpen" href="pumpen\index.htm">Pumpen</a></h4>
                            <ul>
                                <li class="menu_sub">
                                    <!--<a href="/pumpen/schraubenspindelpumpe-kts/">Schraubenspindelpumpe KTS</a>-->
                                    <a class="hyphenate" title="Schraubenspindelpumpe KTS" href="pumpen\schraubenspindelpumpe-kts\index.htm">Schraubenspindelpumpe KTS</a></li>
                                <li class="menu_sub">
                                    <!--<a href="/pumpen/schraubenspindelpumpe-ktsv/">Schraubenspindelpumpe KTSV</a>-->
                                    <a class="hyphenate" title="Schraubenspindelpumpe KTSV" href="pumpen\schraubenspindelpumpe-ktsv\index.htm">Schraubenspindelpumpe KTSV</a></li>
                                <li class="menu_sub">
                                    <!--<a href="/pumpen/kreiselpumpe/">Kreiselpumpe</a>-->
                                    <a class="hyphenate" title="Kreiselpumpe" href="pumpen\kreiselpumpe\index.htm">Kreiselpumpe</a></li>
                                <li class="menu_sub">
                                    <!--<a href="/pumpen/exzenterschneckenpumpe-mx/">Exzenterschneckenpumpe MX</a>-->
                                    <a class="hyphenate" title="Exzenterschneckenpumpe MX" href="pumpen\exzenterschneckenpumpe-mx\index.htm">Exzenterschneckenpumpe MX</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-2">
                    <ul class="menu_content">
                        <li>
                            <h4 class="menu_head">
                                <a href="service\index.htm" class="hyphenate test">Service</a></h4>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-2">
                    <ul class="menu_content">
                        <li>
                            <h4 class="menu_head">
                                <a href="aktuelles\index.htm" class="hyphenate test">Aktuelles</a></h4>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-2">
                    <ul class="menu_content">
                        <li>
                            <h4 class="menu_head">
                                <a href="kontakt\index.htm" class="hyphenate test">Kontakt</a></h4>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-2">
                    <ul class="menu_content">
                        <li>
                            <h4 class="menu_head">
                                <a href="karriere\index.htm" class="hyphenate test">Karriere</a></h4>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="foot_left_grad foot_grad"></div>
        <div class="foot_right_grad foot_grad"></div>
    </div>
    <div class="footer_bottom_dv">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="social_dv">
                        <div class="tx-dce-pi1">
                            <div class="socialtest"></div>
                            <a href="https://www.facebook.com/knollausbildung/" target="_blank">
                                <div class="icon">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                    <p class="icon_text">Facebook</p></div>
                            </a>
                            <a href="https://www.xing.com/companies/knollmaschinenbaugmbh" target="_blank">
                                <div class="icon">
                                    <i class="fa fa-xing" aria-hidden="true"></i>
                                    <p class="icon_text">Xing</p></div>
                            </a>
                            <a href="https://www.linkedin.com/company/knoll-maschinenbau-gmbh/" target="_blank">
                                <div class="icon">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    <p class="icon_text">LinkedIn</p></div>
                            </a>
                            <a href="https://www.instagram.com/knoll_maschinenbau/" target="_blank">
                                <div class="icon">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                    <p class="icon_text">Instagram</p></div>
                            </a>
                            <a href="https://www.youtube.com/user/Knollitworks" target="_blank">
                                <div class="icon">
                                    <i class="fa fa-youtube" aria-hidden="true"></i>
                                    <p class="icon_text">YouTube</p></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <nav class="footer_mid">
                        <a title="Impressum" href="impressum\index.htm">Impressum</a>
                        <a title="Datenschutz" href="datenschutz\index.htm">Datenschutz</a>
                        <a title="Informationspflicht nach Art. 13" href="informationspflicht-nach-art-13\index.htm">Informationspflicht nach Art. 13</a>
                        <a title="AGB" href="agb\index.htm">AGB</a>
                        <a title="Downloads" href="downloads\index.htm">Downloads</a></nav>
                </div>
                <div class="col-md-3 text-right">
                    <div class="copyright">
                        <i class="fa fa-copyright" aria-hidden="true"></i>
                        <p>KNOLL Maschinenbau GmbH
                        <p></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div id="cookies" style="opacity: 0">
    <div class="wrapper">
        <div class="content">
            <p>Wir verwenden Cookies, um diese Webseite bestmöglich an Ihre Bedürfnisse anzupassen sowie unsere Serviceleistungen zu verbessern. Die weitere Nutzung der Webseite wird als Zustimmung zu unseren
                <a href="datenschutz\index.htm">Regelungen über Cookies</a>verstanden.</p></div>
        <div class="buttons">
            <a href="datenschutz\index.htm" class="btn_c">Mehr</a>
            <a href="javascript: void(0)" class="btn_c">OK</a></div>
    </div>
</div>
<script src="typo3temp\assets\compressed\merged-12bbe16b617c7915aa2c1a50e2b4f494-97c3270d899c6a94e15385184d687000.js?1560585239" type="text/javascript"></script>
<script src="typo3temp\assets\compressed\merged-6b0b01f3db70003843ab03342a10e96e-e805599761e92044bfb05456870afe47.js?1558096143" type="text/javascript"></script>
</body>

</html>
<?php
/** * The template part for displaying single posts * * @package WordPress * @subpackage Twenty_Sixteen * @since Twenty Sixteen 1.0 */

$postid=get_the_ID();
$post=get_post($postid);
$url=home_url();
$args=get_metadata( 'post', $post->ID, $key, false);
if(empty($args['头部大图片网址'][0])){
    echo '没有设置顶部的图像，请联系编辑编辑'; die;
} ?>
    <!DOCTYPE html>
    <html lang="de">

    <head>
        <meta charset="utf-8">
        <title>KNOLL Maschinenbau GmbH - Ausgepackt: Das Gebäude K1 eröffnet Ende Mai.</title>
        <link hreflang="de" rel="alternate" href="index.htm">
        <link hreflang="en" rel="alternate" href="<?php echo $url; ?>\en\news\company\unpacked-the-k1-building-will-open-at-the-end-of-may\index.htm">
        <link hreflang="x-default" rel="alternate" href="index.htm">
        <link rel="canonical" href="index.htm">
        <meta property="og:title" content="Aktuelles - Ausgepackt: Das Gebäude K1 eröffnet Ende Mai. - KNOLL Maschinenbau">
        <meta property="og:type" content="article">
        <meta property="og:url" content="https://www.knoll-mb.de/aktuelles/unternehmen/ausgepackt-das-gebaeude-k1-eroeffnet-ende-mai/">
        <meta property="og:image" content="https://www.knoll-mb.de/fileadmin/Home/Aktuelles/Unternehmen/knoll-empfang-301x301.jpg">
        <meta property="og:image:width" content="301">
        <meta property="og:image:height" content="301">
        <meta name="description" content="Die Eröffnung des neuen KNOLL Verwaltungsgebäudes K1 steht kurz bevor, der Umzug ist für Ende Mai geplant.">
        <meta property="og:description" content="Die Eröffnung des neuen KNOLL Verwaltungsgebäudes K1 steht kurz bevor, der Umzug ist für Ende Mai geplant.">
        <meta name="generator" content="TYPO3 CMS">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="robots" content="index,follow ">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $url; ?>\fileadmin\knoll\Resources\Public\images\Favicons\appletouchicon180x180.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $url; ?>\fileadmin\knoll\Resources\Public\images\Favicons\Favicon16x16.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $url; ?>\fileadmin\knoll\Resources\Public\images\Favicons\Favicon32x32.png">
        <link rel="manifest" href="<?php echo $url; ?>\fileadmin\knoll\Resources\Public\images\Favicons\manifest.json">
        <link rel="mask-icon" href="<?php echo $url; ?>\fileadmin\knoll\Resources\Public\images\Favicons\Pinnedtabicon.svg" color="#005caa ">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $url; ?>\fileadmin\knoll\Resources\Public\images\Favicons\favicon.ico">
        <meta name="apple-mobile-web-app-title" content="Knoll">
        <meta name="application-name" content="Knoll">
        <meta name="msapplication-config" content="/fileadmin/knoll/Resources/Public/images/Favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff ">
        <script>var gaProperty = 'UA-113727996-1';
            var disableStr = 'ga-disable-' + gaProperty;
            if (document.cookie.indexOf(disableStr + '=true') > -1) {
                window[disableStr] = true;
            }</script>
        <!-- Global site tag (gtag.js) - Google Analytics -->

        <script>window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-113727996-1', {
                'anonymize_ip': true
            });</script>
        <link rel="stylesheet" type="text/css" href="<?php echo $url; ?>\typo3conf\ext\indexed_search_autocomplete\Resources\Public\Css\Indexed_search_autocomplete.css?1528809227" media="all">
        <link rel="stylesheet" type="text/css" href="<?php echo $url; ?>\fileadmin\knoll\Resources\Public\css\style.css?1548343140" media="all">
        <link rel="stylesheet" type="text/css" href="<?php echo $url; ?>\typo3conf\ext\rx_shariff\Resources\Public\Css\shariff.complete.css?1523915631" media="all">
        <script src="<?php echo $url; ?>\typo3temp\assets\compressed\merged-2f9fa42fcba7a75c5d3b88bde77808ee-763d824cc7edc1a0df2df97769640298.js?1558088697" type="text/javascript"></script>
        <!--###POSTJSMARKER###--></head>

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

    <?php get_template_part( 'template-parts/indexPage/navBar');?>

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
                        <a href="index.htm">
                            <div class="icon">
                                <span>de</span></div>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="<?php echo $url; ?>\en\news\company\unpacked-the-k1-building-will-open-at-the-end-of-may\index.htm">
                            <div class="icon">
                                <span>en</span></div>
                        </a>
                    </li>
                    <!--defaultLanguageLabel="DE"--></ul>
            </li>
            <li class="contact_btn">
                <a>
                    <div class="icon">
                        <i class="material-icons icon_person">person</i>
                        <i class="material-icons icon_clear">clear</i></div>
                </a>
                <div class="person_contact">
                    <!--f:cObject typoscriptObjectPath="lib.contactHeader" /--></div>
            </li>
            <li class="back_btn">
                <a>
                    <div class="icon">
                        <i class="material-icons icon_arrow_back">arrow_back</i>
                        <i class="material-icons icon_clear">clear</i></div>
                </a>
                <ul>
                    <li>
                        <div class="tx-dce-pi1">
                            <a href='..\..\index.htm'>
                                <div class="icon">
                                    <span>Zur Übersicht</span></div>
                            </a>
                        </div>
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
        <div class="search-autocomplete-results" data-mode="word" data-searchonclick="true" data-maxresults="6" data-minlength="2" data-searchurl="/nc/aktuelles/unternehmen/?type=7423794&amp;tx_indexedsearchautocomplete_pi2%5Baction%5D=search&amp;tx_indexedsearchautocomplete_pi2%5Bcontroller%5D=Search"></div>
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
            <a href='<?php echo $url; ?>\unternehmen\knoll-weltweit\index.htm'>KNOLL weltweit
                <i class="material-icons">arrow_forward</i></a>
        </div>
    </div>
    <section class="Pageentry_Header_Slider" id="">
        <div class="main_home_slider
        ">
            <div class="home_slider_item">
                <div class="home_slider ie_hide object_fit_image">
                    <!--div class="head_banner_image" style="background-image: url('images/banner_image1.jpg')"></div-->
                    <picture>
                        <source media="(min-width: 1440px)" data-srcset='<?php echo $args['头部大图片网址'][0];?>'>
                        <source media="(min-width: 1020px)" data-srcset='<?php echo $args['头部大图片网址'][0];?>'>
                        <source media="(min-width: 768px)" data-srcset='<?php echo $args['头部大图片网址'][0];?>'>
                        <source data-srcset='<?php echo $args['头部大图片网址'][0];?>'>
                        <img data-src='<?php echo $args['头部大图片网址'][0];?>' alt="Knoll Maschinenbau GmbH – News" style="width: 100%;"></source>
                        </source>
                        </source>
                        </source>
                    </picture>
                </div>

            </div>
        </div>
    </section>
    <div class="news news-single">
        <div class="article" itemscope="itemscope" itemtype="http://schema.org/Article">
            <section class="news_details_page_dv" id="Detail">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="common_heading "><?php echo $post->post_title;?></h1>
                            <!-- teaser -->

                        </div>
                        <div class="col-sm-2">
                            <div class="social_text">Diesen Artikel teilen:</div>
                            <div class="social_share_icons">
                                <html xmlns:rx="http://typo3.org/ns/Reelworx/RxShariff/ViewHelper">
                                <div data-mail-url="mailto:" data-title="KNOLL Maschinenbau GmbH - Ausgepackt: Das Gebäude K1 eröffnet Ende Mai." data-backend-url="/aktuelles/unternehmen/?eID=shariff" data-services="[&quot;whatsapp&quot;,&quot;facebook&quot;,&quot;xing&quot;,&quot;twitter&quot;,&quot;mail&quot;]" data-lang="de" class="shariff"></div>

                                </html>
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <div class="header hide">
                                <h3 itemprop="headline">Ausgepackt: Das Gebäude K1 eröffnet Ende Mai.</h3></div>
                            <!-- main text -->
                            <div class="news-text-wrap" itemprop="articleBody">
                                <!--TYPO3SEARCH_begin-->
                                <!--TYPO3SEARCH_end--></div>
                            <!-- content elements -->
                            <!--TYPO3SEARCH_begin-->
                            <div class="news_details_page_content" id="">
                                <!--gallery/slider variation3--->
                                <div class="post_image gallery_slider">
                                    <div class="image_background">
                                        <img src='<?php echo $url; ?>\fileadmin\Home\Aktuelles\Unternehmen\knoll-empfang-1000x550.jpg' alt="" class="img-responsive"></div>
                                    <div class="image_background">
                                        <img src='<?php echo $url; ?>\fileadmin\Home\Aktuelles\Unternehmen\knoll-luftbild-1000x550.jpg' alt="" class="img-responsive"></div>
                                    <div class="image_background">
                                        <img src='<?php echo $url; ?>\fileadmin\Home\Aktuelles\Unternehmen\knoll-fassade-1000x550.jpg' alt="" class="img-responsive"></div>
                                </div>
                                <!--gallery/slider variation3 ends--->
                                <div class="content-dv rte_atag rte_img">
                                    <?php  echo $post->post_content;?>
                                </div>
                            </div>
                            <!--TYPO3SEARCH_end-->
                            <div class="footer hide">
                                <p>
                                    <!-- date -->
                                    <span class="news-list-date">
                        <time datetime="2019-05-07">07.05.2019
                          <meta itemprop="datePublished" content="2019-05-07"></time></span>
                                    <!-- categories -->
                                    <!--                                    <span class="news-list-category" xmlns:f="http://typo3.org/ns/TYPO3/CMS/Fluid/ViewHelpers">Unternehmen</span></p>-->
                            </div>
                            <!-- related things -->
                            <div class="news-related-wrap"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!--dce download module separate-->
            <!-- content elements -->
            <!--dce download module separate--></div>
    </div>
    <footer id="footer">
        <div class="footer_dv">
            <div class="container">
                <div class="row footer_menu_desktop visible-xs-block">
                    <div class="col-xs-2">
                        <ul class="menu_content">
                            <li>
                                <h4 class="menu_head">
                                    <!--                                    <a class="hyphenate" title="Unternehmen" href="--><?php //echo $url; ?><!--\unternehmen\index.htm">Unternehmen</a></h4>-->
                                    <ul>
                                        <li class="menu_sub">
                                            <!--<a href="/unternehmen/knoll-weltweit/">KNOLL weltweit</a>-->
                                            <a class="hyphenate" title="KNOLL weltweit" href="<?php echo $url; ?>\unternehmen\knoll-weltweit\index.htm">KNOLL weltweit</a></li>
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
                                    <a class="hyphenate" title="Einzelanlagen" href="<?php echo $url; ?>\einzelanlagen\index.htm">Einzelanlagen</a></h4>
                                <ul>
                                    <li class="menu_sub">
                                        <!--<a href="/einzelanlagen/hochdruckanlagen/">Hochdruckanlagen</a>-->
                                        <a class="hyphenate" title="Hochdruckanlagen" href="<?php echo $url; ?>\einzelanlagen\hochdruckanlagen\index.htm">Hochdruckanlagen</a></li>
                                    <li class="menu_sub">
                                        <!--<a href="/einzelanlagen/filteranlagen/">Filteranlagen</a>-->
                                        <a class="hyphenate" title="Filteranlagen" href="<?php echo $url; ?>\einzelanlagen\filteranlagen\index.htm">Filteranlagen</a></li>
                                    <li class="menu_sub">
                                        <!--<a href="/einzelanlagen/foerderanlagen/">Förderanlagen</a>-->
                                        <a class="hyphenate" title="Förderanlagen" href="<?php echo $url; ?>\einzelanlagen\foerderanlagen\index.htm">Förderanlagen</a></li>
                                    <li class="menu_sub">
                                        <!--<a href="/einzelanlagen/mms-controlube/">MMS ControLube</a>-->
                                        <a class="hyphenate" title="MMS ControLube" href="<?php echo $url; ?>\einzelanlagen\mms-controlube\index.htm">MMS ControLube</a></li>
                                    <li class="menu_sub">
                                        <!--<a href="/einzelanlagen/zerkleinerungsanlagen/">Zerkleinerungsanlagen</a>-->
                                        <a class="hyphenate" title="Zerkleinerungsanlagen" href="<?php echo $url; ?>\einzelanlagen\zerkleinerungsanlagen\index.htm">Zerkleinerungsanlagen</a></li>
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
                                    <a class="hyphenate" title="Zentralsysteme" href="<?php echo $url; ?>\zentralsysteme\index.htm">Zentralsysteme</a></h4>
                                <ul>
                                    <li class="menu_sub">
                                        <!--<a href="/zentralsysteme/systeme-mit-pumptechnik/">Systeme mit Pumptechnik</a>-->
                                        <a class="hyphenate" title="Systeme mit Pumptechnik" href="<?php echo $url; ?>\zentralsysteme\systeme-mit-pumptechnik\index.htm">Systeme mit Pumptechnik</a></li>
                                    <li class="menu_sub">
                                        <!--<a href="/zentralsysteme/systeme-mit-saugtechnik/">Systeme mit Saugtechnik</a>-->
                                        <a class="hyphenate" title="Systeme mit Saugtechnik" href="<?php echo $url; ?>\zentralsysteme\systeme-mit-saugtechnik\index.htm">Systeme mit Saugtechnik</a></li>
                                    <li class="menu_sub">
                                        <!--<a href="/zentralsysteme/systeme-mit-sammelfoerderer/">Systeme mit Sammelförderer</a>-->
                                        <a class="hyphenate" title="Systeme mit Sammelförderer" href="<?php echo $url; ?>\zentralsysteme\systeme-mit-sammelfoerderer\index.htm">Systeme mit Sammelförderer</a></li>
                                    <li class="menu_sub">
                                        <!--<a href="/zentralsysteme/systeme-zur-spaeneaufbereitung/">Systeme zur Späneaufbereitung</a>-->
                                        <a class="hyphenate" title="Systeme zur Späneaufbereitung" href="<?php echo $url; ?>\zentralsysteme\systeme-zur-spaeneaufbereitung\index.htm">Systeme zur Späneaufbereitung</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-2">
                        <ul class="menu_content">
                            <li>
                                <h4 class="menu_head">
                                    <!--<a href="/transportsysteme/" class="">Transportsysteme</a>-->
                                    <a class="hyphenate" title="Transportsysteme" href="<?php echo $url; ?>\transportsysteme\index.htm">Transportsysteme</a></h4>
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
                                    <a class="hyphenate" title="Pumpen" href="<?php echo $url; ?>\pumpen\index.htm">Pumpen</a></h4>
                                <ul>
                                    <li class="menu_sub">
                                        <!--<a href="/pumpen/schraubenspindelpumpe-kts/">Schraubenspindelpumpe KTS</a>-->
                                        <a class="hyphenate" title="Schraubenspindelpumpe KTS" href="<?php echo $url; ?>\pumpen\schraubenspindelpumpe-kts\index.htm">Schraubenspindelpumpe KTS</a></li>
                                    <li class="menu_sub">
                                        <!--<a href="/pumpen/schraubenspindelpumpe-ktsv/">Schraubenspindelpumpe KTSV</a>-->
                                        <a class="hyphenate" title="Schraubenspindelpumpe KTSV" href="<?php echo $url; ?>\pumpen\schraubenspindelpumpe-ktsv\index.htm">Schraubenspindelpumpe KTSV</a></li>
                                    <li class="menu_sub">
                                        <!--<a href="/pumpen/kreiselpumpe/">Kreiselpumpe</a>-->
                                        <a class="hyphenate" title="Kreiselpumpe" href="<?php echo $url; ?>\pumpen\kreiselpumpe\index.htm">Kreiselpumpe</a></li>
                                    <li class="menu_sub">
                                        <!--<a href="/pumpen/exzenterschneckenpumpe-mx/">Exzenterschneckenpumpe MX</a>-->
                                        <a class="hyphenate" title="Exzenterschneckenpumpe MX" href="<?php echo $url; ?>\pumpen\exzenterschneckenpumpe-mx\index.htm">Exzenterschneckenpumpe MX</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-2">
                        <ul class="menu_content">
                            <li>
                                <h4 class="menu_head">
                                    <a href="<?php echo $url; ?>\service\index.htm" class="hyphenate test">Service</a></h4>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-2">
                        <ul class="menu_content">
                            <li>
                                <h4 class="menu_head">
                                    <a href="..\..\index.htm" class="hyphenate test">Aktuelles</a></h4>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-2">
                        <ul class="menu_content">
                            <li>
                                <h4 class="menu_head">
                                    <a href="<?php echo $url; ?>\kontakt\index.htm" class="hyphenate test">Kontakt</a></h4>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-2">
                        <ul class="menu_content">
                            <li>
                                <h4 class="menu_head">
                                    <a href="<?php echo $url; ?>\karriere\index.htm" class="hyphenate test">Karriere</a></h4>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php get_footer();?>
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
                            <a title="Impressum" href="<?php echo $url; ?>\impressum\index.htm">Impressum</a>
                            <a title="Datenschutz" href="<?php echo $url; ?>\datenschutz\index.htm">Datenschutz</a>
                            <a title="Informationspflicht nach Art. 13" href="<?php echo $url; ?>\informationspflicht-nach-art-13\index.htm">Informationspflicht nach Art. 13</a>
                            <a title="AGB" href="<?php echo $url; ?>\agb\index.htm">AGB</a>
                            <a title="Downloads" href="<?php echo $url; ?>\downloads\index.htm">Downloads</a></nav>
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
                    <a href="<?php echo $url; ?>\datenschutz\index.htm">Regelungen über Cookies</a>verstanden.</p></div>
            <div class="buttons">
                <a href="<?php echo $url; ?>\datenschutz\index.htm" class="btn_c">Mehr</a>
                <a href="javascript: void(0)" class="btn_c">OK</a></div>
        </div>
    </div>
    <script src="<?php echo $url; ?>\typo3temp\assets\compressed\merged-e52a66f261577b65c5b0a278b12130e1-8f2ff92135167a401e722786315b8043.js?1560586270" type="text/javascript"></script>
    <script src="<?php echo $url; ?>\typo3temp\assets\compressed\merged-6b0b01f3db70003843ab03342a10e96e-e805599761e92044bfb05456870afe47.js?1558096143" type="text/javascript"></script>
    </body>

    </html>

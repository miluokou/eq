<?php
/** * The template part for displaying single posts * * @package WordPress * @subpackage Twenty_Sixteen * @since Twenty Sixteen 1.0 */

$postid=get_the_ID();
$post=get_post($postid);
$url=home_url();
$args=get_metadata( 'post', $post->ID, $key, false);
if(empty($args['头部大图片网址'][0])){
    echo '没有设置顶部的图像，请联系编辑编辑'; die;
} 

if(!empty($args['新闻轮播图1'][0])){

    $newsLunbo1 = $args['新闻轮播图1'][0];
} 
if(!empty($args['新闻轮播图2'][0])){

    $newsLunbo2 = $args['新闻轮播图2'][0];
} 
if(!empty($args['新闻轮播图3'][0])){
  
    $newsLunbo3 = $args['新闻轮播图3'][0];
} 


?>
    <!DOCTYPE html>
    <html lang="de">

    <head>
        <meta charset="utf-8">
        <title>HYDROFOS Maschinenbau GmbH - Ausgepackt: Das Gebäude K1 eröffnet Ende Mai.</title>
        <link hreflang="de" rel="alternate" href="index.htm">
        <link hreflang="en" rel="alternate" href="<?php echo $url; ?>\en\news\company\unpacked-the-k1-building-will-open-at-the-end-of-may\index.htm">
        <link hreflang="x-default" rel="alternate" href="index.htm">
        <link rel="canonical" href="index.htm">
        <meta property="og:title" content="Aktuelles - Ausgepackt: Das Gebäude K1 eröffnet Ende Mai. - HYDROFOS Maschinenbau">
        <meta property="og:type" content="article">
        <meta property="og:url" content="https://www.knoll-mb.de/aktuelles/unternehmen/ausgepackt-das-gebaeude-k1-eroeffnet-ende-mai/">
        <meta property="og:image" content="https://www.knoll-mb.de/fileadmin/Home/Aktuelles/Unternehmen/knoll-empfang-301x301.jpg">
        <meta property="og:image:width" content="301">
        <meta property="og:image:height" content="301">
        <meta name="description" content="Die Eröffnung des neuen HYDROFOS Verwaltungsgebäudes K1 steht kurz bevor, der Umzug ist für Ende Mai geplant.">
        <meta property="og:description" content="Die Eröffnung des neuen HYDROFOS Verwaltungsgebäudes K1 steht kurz bevor, der Umzug ist für Ende Mai geplant.">
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

    <?php
        get_template_part( 'template-parts/indexPage/navBar');
        get_template_part('template-parts/indexPage/rightIconList');
    ?>


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
                        <img data-src='<?php echo $args['头部大图片网址'][0];?>' alt="HYDROFOS Maschinenbau GmbH – News" style="width: 100%;"></source>
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

                        <div class="col-sm-2">
                           
                            <div class="social_share_icons">
                                <html xmlns:rx="http://typo3.org/ns/Reelworx/RxShariff/ViewHelper">
                                <div data-mail-url="mailto:" data-title="HYDROFOS Maschinenbau GmbH - Ausgepackt: Das Gebäude K1 eröffnet Ende Mai." data-backend-url="/aktuelles/unternehmen/?eID=shariff" data-services="[&quot;whatsapp&quot;,&quot;facebook&quot;,&quot;xing&quot;,&quot;twitter&quot;,&quot;mail&quot;]" data-lang="de" class="shariff"></div>

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
                                	<?php if(!empty($newsLunbo1)){
                                		?>
                                	    <div class="image_background">
                                           <img src='<?php echo $newsLunbo1; ?>' alt="" class="img-responsive">
                                        </div>	
                                		<?php	
                                	}?>
                                	<?php if(!empty($newsLunbo2)){
                                		?>
                                	    <div class="image_background">
                                           <img src='<?php echo $newsLunbo2; ?>' alt="" class="img-responsive">
                                        </div>	
                                		<?php	
                                	}?>
                                	<?php if(!empty($newsLunbo3)){
                                		?>
                                	    <div class="image_background">
                                           <img src='<?php echo $newsLunbo3; ?>' alt="" class="img-responsive">
                                        </div>	
                                		<?php	
                                	}?>
                              
                                    
                                </div>
                                <!--gallery/slider variation3 ends--->
                                <div class="content-dv rte_atag rte_img">
                                    <h1 class="common_heading "><?php echo $post->post_title;?></h1>
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
    
     <?php get_footer();?>
    </body>

    </html>

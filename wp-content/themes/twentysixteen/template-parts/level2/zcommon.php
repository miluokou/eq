<?php
$url=home_url();
global $cat;
$c = get_category($cat);
$headImageUrl = z_taxonomy_image_url($c->term_id);

?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <!-- This website is powered by TYPO3 - inspiring people to share! TYPO3 is a free open source Content Management Framework initially created by Kasper Skaarhoj and licensed under GNU/GPL. TYPO3 is copyright 1998-2019 of Kasper Skaarhoj. Extensions are copyright of their respective owners. Information and contribution at https://typo3.org/ -->
    <link hreflang="de" rel="alternate" href="index.htm">
    <link hreflang="en" rel="alternate" href="..\en\single-systems\index.htm">
    <link hreflang="x-default" rel="alternate" href="index.htm">
    <link rel="canonical" href="index.htm">
    <meta name="description" content="KNOLL Einzelanlagen sind z.B. Zubehör für Werkzeugmaschinen und dienen zum Trennen, Transportieren und Aufbereiten von Spänen und Kühlschmierstoffen.">
    <link rel="alternate" href="index.htm" hreflang="x-default">
    <link rel="alternate" href="index.htm" hreflang="de">
    <link rel="alternate" href="<?php echo $url;?>\en\single-systems\index.htm" hreflang="en">
    <meta name="generator" content="TYPO3 CMS">
    <title>KNOLL Maschinenbau GmbH - Einzelanlagen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="robots" content="index,follow ">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $url;?>\fileadmin\knoll\Resources\Public\images\Favicons\appletouchicon180x180.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $url;?>\fileadmin\knoll\Resources\Public\images\Favicons\Favicon16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $url;?>\fileadmin\knoll\Resources\Public\images\Favicons\Favicon32x32.png">
    <link rel="manifest" href="<?php echo $url;?>\fileadmin\knoll\Resources\Public\images\Favicons\manifest.json">
    <link rel="mask-icon" href="<?php echo $url;?>\fileadmin\knoll\Resources\Public\images\Favicons\Pinnedtabicon.svg" color="#005caa ">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $url;?>\fileadmin\knoll\Resources\Public\images\Favicons\favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Knoll">
    <meta name="application-name" content="Knoll">
    <meta name="msapplication-config" content="/fileadmin/knoll/Resources/Public/images/Favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff ">
    <script>var gaProperty = 'UA-113727996-1';
        var disableStr = 'ga-disable-' + gaProperty;
        if (document.cookie.indexOf(disableStr + '=true') > -1) {
            window[disableStr] = true;
        }</script>

    <script>window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-113727996-1', {
            'anonymize_ip': true
        });</script>
    <link rel="stylesheet" type="text/css" href="<?php echo $url;?>\typo3conf\ext\indexed_search_autocomplete\Resources\Public\Css\Indexed_search_autocomplete.css?1528809227" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo $url;?>\fileadmin\knoll\Resources\Public\css\style.css?1548343140" media="all">
    <script src="<?php echo $url;?>\typo3temp\assets\compressed\merged-2f9fa42fcba7a75c5d3b88bde77808ee-763d824cc7edc1a0df2df97769640298.js?1558088697" type="text/javascript"></script>
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
    <div class="main_home_slider">
        <div class="home_slider_item">
            <div class="home_slider ie_hide object_fit_image">
                <picture>
                    <source media="(min-width: 1440px)" data-srcset='<?php echo $headImageUrl;?>'>
                    <source media="(min-width: 1020px)" data-srcset='<?php echo $headImageUrl;?>'>
                    <source media="(min-width: 768px)" data-srcset='<?php echo $headImageUrl;?>'>
                    <source data-srcset='<?php echo $headImageUrl;?>'>
                    <img data-src='<?php echo $headImageUrl;?>' alt="" style="width: 100%;"></source>
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
                                <h1><?php echo $c->name;?></h1></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page_intro_section Page_Introduction no_background" id="">
    <div class="container">
        <div class="common_para common_para_light font_26 rte_atag">
            <p><?php  echo $c->description;?></p>
        </div>
    </div>
</section>

<?php
    get_template_part( 'template-parts/level2/ProductOverview');
    get_footer();
?>
</body>

</html>
<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
        <div class="footj">
            <div class="foot">
                <div class="foot_l">
                    <div class="foot_ll">
                        <img src="/Web/img/flogo.png"/ style="width:159px;height: 45px;;">
                    </div>
                    <div class="foot_lz">
                        <p><img src="/Web/img/foo1.png"/>地址：北京市朝阳区双井富力双子座B座2102</p>
                        <p><img src="/Web/img/foo2.png"/>客服热线：400 010 6886</p>
                    </div>
                </div>
                <div class="foot_z">
                    <ul>
                        <li><a href="/about/introduction/?html=contact">联系我们</a></li>
                        <li><a href="/about/introduction/?post_fl_all=1">关于石垠</a></li>
<!--                         <li><a href="/product/product-product/?post_fl_all=1">母公司石垠</a></li> -->
                        <li><a href="/news/news-news/?post_fl_all=1">石垠动态</a></li>
                        <li><a href="/about/introduction/?html=join">加入我们</a></li>
                        <li><a href="/viewpoint/viewpoint-viewpoint/?post_fl_all=1">石垠观点</a></li>
                        <li><a href="/system/system-system/?post_fl_all=1">会员俱乐部</a></li>
<!--                        <li><a>石垠家人</a></li>-->
                    </ul>
                    <p>Copyright @ 2018 <a href="">shiyinzc.com</a>-STUDIO, All rights reserved.    ICP：京ICP备 1401853</p>
                </div>
                <div class="foot_b">
                    <ul>
                        <li>
                        <a target="_blank" href="http://117.107.131.67/ut_webcall/ut_chat/guest/chat.aspx?cmd=group&uid=4&uname=">
                        <img src="/Web/img/foo5.png"/>
                        <p>咨询</p></a>
                        </li>
                        <li>
                        <span><img src="/Web/img/wxt.jpg"/></span>
                        <img src="/Web/img/foo3.png"/>
                        <p>微信</p>
                        </li>
                        <li>
                        <a target="_blank" href="mailto:marketing@nuoyuan.com.cn">
                        <img src="/Web/img/foo4.png"/>
                        <p>邮箱</p></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!--foot-->
         </div><!--4-->
</div><!---->
 
<script>
    $('.bxslider').bxSlider({
        auto: true
    });
</script>

<script src="/Web/js/scrollReveal.min.js"></script>
<script type="text/javascript">
    (function ($) {

        'use strict';

        window.scrollReveal = new scrollReveal({reset: true, move: '50px'});
    })();
</script>
<script src="/Web/js/uikit.js"></script>
<script src="/Web/js/jquery.min.js"></script>
<script src="/Web/js/jquery.wookmark.js"></script>
<script type="text/javascript">
    (function ($) {
        $(function () {
            var $handler = $('.example-tiles li');

            $handler.wookmark({
                // Prepare layout options.
                autoResize: true, // This will auto-update the layout when the browser window is resized.
                container: $('#main'), // Optional, used for some extra CSS styling
                offset: 25, // Optional, the distance between grid items
                outerOffset: 0, // Optional, the distance to the containers border

            });
        });
    })(jQuery);
</script>
<script>
    $(document).ready(function () {
        $('.m-business-slideset').slick({
            dots: false,
            autoplay: false,
            infinite: false,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [{
                breakpoint: 1200,
                settings: {
                    arrows: true,
                    slidesToShow: 2,
                    dots: false,
                    autoplay: false,
                    infinite: false,
                }
            }, {
                breakpoint: 960,
                settings: {
                    arrows: true,
                    slidesToShow: 2,
                    dots: false,
                    autoplay: false,
                    infinite: false,
                }
            }, {
                breakpoint: 768,
                settings: {
                    arrows: true,
                    slidesToShow: 2,
                    dots: false,
                    autoplay: false,
                    infinite: false,
                }
            }, {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    dots: false,
                    autoplay: false,
                    infinite: false,
                }
            },]
        });
    });
	
</script>
</body>
</html>

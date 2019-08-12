<?php
$url = home_url();
global $cat;
$c = get_category($cat);
echo '<pre>';
var_dump($c);
die;
?>

<a id="c2720"></a>
<section class="page_intro_section Page_Introduction no_background" id="">
    <div class="container">
        <h2 class="common_heading">
            <p><?php echo $posts[0]->post_title; ?></p>
        </h2>
        <div class="common_para common_para_light font_26 rte_atag">
            <p><?php echo $posts[0]->post_content; ?></p>
        </div>
    </div>
</section>
<a id="c2721"></a>
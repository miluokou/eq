
<?php
$guanli = get_cat_ID('运输系统');
$guanliPosts = get_posts("category=" . $guanli . "&order=DESC&numberposts=5");
?>
<section class="Headline_Copy_Image secdv background_grey remove_bottom_padding " id="management-board">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2 class='big remove_margin_header_top hyphenate'>
                    <!--TYPO3SEARCH_begin--><?php echo $guanli->name;?>
                    <!--TYPO3SEARCH_end--></h2></div>
            <div class="col-sm-6">
                <div class="headline_copy_image_common_para common_para common_para_light rte_atag">
                    <p><?php echo $guanli->descrition?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
foreach ($guanliPosts as $guanliPost) {
    $lingdao_url = 'javascript::void(0);';
    if (!empty($guanliPost)) {
        $guanliargs = get_metadata('post', $guanliPost->ID, $key, false);
        $lingdao_url = emptyAdjustment($guanliargs['领导的照片url']);
    }
    ?>
    <section class="Headline_Copy_Image secdv background_grey remove_bottom_padding " id="">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class='small remove_margin_header_top hyphenate'>
                        <!--TYPO3SEARCH_begin--><?php echo $guanliPost->post_title; ?>
                        <!--TYPO3SEARCH_end--></h3>
                    <div class="headline_copy_image_common_para common_para common_para_light rte_atag">
                        <!--TYPO3SEARCH_begin-->
                        <p><?php echo $guanliPost->post_content; ?></p>
                        <!--TYPO3SEARCH_end--></div>
                    <!--contacts_headline-->
                    <!--contacts_headline-->
                </div>
                <div class="col-sm-6">
                    <div class='right_image'>
                        <picture>
                            <!--source media="(min-width: 1024px)" srcset="/fileadmin/_processed_/1/9/csm_knoll-juergen-knoll_644x644_01_4a3435743d.png"><source media="(min-width: 768px)" srcset="/fileadmin/_processed_/1/9/csm_knoll-juergen-knoll_644x644_01_ce497ff60d.png"-->
                            <img data-src="<?php echo $lingdao_url; ?>" alt=""></picture>
                        <!--img src='/fileadmin/Home/Unternehmen/knoll-juergen-knoll_644x644_01.png' class='img-responsive' /-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
}
?>
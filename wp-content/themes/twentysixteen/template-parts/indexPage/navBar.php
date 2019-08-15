<?php
$getNavigationBar = getNavigationBar();
$url=site_url();
?>

<div class="header_div">
<nav class="navbar">
    <div class="navbar-header">
        <a class="navbar-brand-logo" href="<?php echo $url; ?>\">
            <img src="<?php echo $url; ?>\fileadmin\knoll\Resources\Public\images\KNOLL-Logo_4c.svg" alt="" class="img-responsive"></a>
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
                        if(!empty($lv1title['child'])){
                            echo '<li class="active current sub"><a title="'.$lv1title['name'].'" href="'.get_category_link($term_id).'">'.$lv1title['name'].'</a>';
                            echo '<ul class=""><div class="ulwrapper">';
                            foreach ($lv1title['child'] as $lv2term_id => $lv2title){
                                echo '<li class="visible-xs visible-sm"><a title="'.$lv2title['name'].'" href="'.get_category_link($lv2term_id).'">'.$lv2title['name'].'</a>';
                                if(!empty($lv2title['child'])){
                                    echo '<ul ><div class="ulwrapper">';
                                    foreach ($lv2title['child'] as $lv3term_id => $lv3title){
                                        echo '<li class="visible-xs visible-sm"><a title="'.$lv3title['name'].'" href="'.get_category_link($lv3term_id).'">'.$lv3title['name'].'</a></li>';
                                    }
                                    echo '</div></ul>';
                                }
                                echo '</li>';
                            }
                            echo ' </div></ul>';
                        }else{
                            echo '<li class="active current"><a title="'.$lv1title['name'].'" href="'.get_category_link($term_id).'">'.$lv1title['name'].'</a>';
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
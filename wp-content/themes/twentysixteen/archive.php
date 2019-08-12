<?php
    $level = get_level();
    if($level ==3){
        get_template_part( 'template-parts/level3/zcommon');
    }else if($level ==2){
        global $cat;
        $c=get_category($cat);
        if($c->parent == 1){
            $cateLink = get_category_link($c->parent);
            wp_redirect($cateLink);
        }else{
            get_template_part( 'template-parts/level2/zcommon');
        }
    }else if($level ==1){
        get_template_part( 'template-parts/level1/zcommon');
    }

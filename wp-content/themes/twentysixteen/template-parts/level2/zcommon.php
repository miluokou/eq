<?php
$url=home_url();
global $cat;
$c = get_category($cat);
$posts = get_posts("category=" . $c->term_id . "&order=ASC&numberposts=1000");

?>
<!DOCTYPE html>
<html lang="de">
<?php
    get_template_part( 'template-parts/level2/lv2HeadCsssAndScript');
    get_template_part( 'template-parts/indexPage/navBar');
    get_template_part('template-parts/indexPage/rightIconList');
    get_template_part('template-parts/level2/lv2HeadImageAndProductDescription');

    if($c->name =="训练"){
        get_template_part( 'template-parts/level2/ProductOverview');
    }else if(get_category($c->parent)->name != '中央系统'){
    
        get_template_part( 'template-parts/level2/OldProductOverview');
    }
    if(get_category($c->parent)->name == '中央系统'){
    	get_template_part('template-parts/level3/lv3NoUseSection');
    
		echo $posts[0]->post_content;
		echo '<a id="c2721"></a>';
		get_template_part('template-parts/common/downloadSection');
    }
  
    get_footer();
?>
</body>

</html>
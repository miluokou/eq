<?php
$url=home_url();
global $cat;
$c = get_category($cat);

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
    }else{
        get_template_part( 'template-parts/level2/OldProductOverview');
    }
    get_footer();
?>
</body>

</html>
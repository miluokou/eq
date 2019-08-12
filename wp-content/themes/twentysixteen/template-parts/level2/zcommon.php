<?php
$url=home_url();
global $cat;
$c = get_category($cat);
$headImageUrl = z_taxonomy_image_url($c->term_id);

?>
<!DOCTYPE html>
<html lang="de">
<?php
    get_template_part( 'template-parts/level2/lv2HeadCsssAndScript');
    get_template_part( 'template-parts/indexPage/navBar');
    get_template_part('template-parts/indexPage/rightIconList');
    get_template_part('template-parts/level2/lv2HeadImageAndProductDescription');
    get_template_part( 'template-parts/level2/ProductOverview');
    get_footer();
?>
</body>

</html>
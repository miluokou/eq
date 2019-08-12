<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
$url=home_url();
global $cat;
$c=get_category($cat);
$posts=get_posts( "category=" . $c->term_id . "&order=ASC&numberposts=1000");
echo '<pre>';
var_dump($posts);
die;
//$headImageUrl = z_taxonomy_image_url($c->term_id);

function emptyAdjustment($canshu){
    if(empty($canshu)){
        return '';
    }else{
        return $canshu[0];
    }
}
//获取post的arg参数
if(!empty( $posts[0] )){
    $args = get_metadata('post', $posts[0]->ID, $key, false);

    if(!empty($args)){

        $headImageUrl = emptyAdjustment($args['头部大图片网址']);

        $fujian1 = emptyAdjustment($args['下载附件1']);
        $fujian2= emptyAdjustment($args['下载附件2']);


    }else{
        echo '这篇介绍没有设置头部大的图片,请联系管理员'; die;
    }
}else{
    echo '这个分类下面没有写post页面,请联系编辑人员编写'; die;
}
die;
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

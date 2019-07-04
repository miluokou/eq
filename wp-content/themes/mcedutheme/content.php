<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

	get_header(); 
	session_start();
	
//	die('123');
	
	$args = array(
		'show_option_all'    => '',
		'orderby'            => 'name',
		'order'              => 'ASC',
		'style'              => 'list',
		'show_count'         => 0,
		'hide_empty'         => 0,
		'use_desc_for_title' => 1,
		'child_of'           => 0,
		'feed'               => '',
		'feed_type'          => '',
		'feed_image'         => '',
		'exclude'            => '',
		'exclude_tree'       => '',
		'include'            => '',
		'hierarchical'       => 1,
		'title_li'           => __( 'Categories' ),
		'show_option_none'   => __('No categories'),
		'number'             => null,
		'echo'               => 1,
		'depth'              => 0,
		'current_category'   => 0,
		'pad_counts'         => 0,
		'taxonomy'           => 'category',
		'walker'             => null
	);
	$args_archive= array(
						'type' => 'post',
						'child_of' => 0,
						'parent' => '',
						'orderby' => 'name',
						'order' => 'ASC',
						'hide_empty' => 0,
						'hierarchical' => 1,
						'exclude' => '',
						'include' => '',
						'number' => '',
						'taxonomy' => 'category',
						'pad_counts' => false
					);
	global $wp_query;
	$cate_ID=get_query_var('cat');
	
//	$this_category = get_category($cat); 
	
	
	 function get_level($i=1){
	 	global $cat;
		$c = get_category($cat); //获取当前分类

		while($c -> category_parent){  //当前分类存在上级分类时，执行循环
		
		$c = get_category($c -> category_parent); //获取上级分类
		$i=$i+1;
		}
		return $i;
	}
//	echo '<pre>';
//	var_dump(get_level());
//var_dump($this_category);
//	die;
//wp_list_categories( $args );
?>

<script>
	$(document).ready(function(){
		$('.page-header').remove();
		$book = $('#book_display').html();
		$("#book_cate").html($book);
		
//		$('#two_level_title').html($('#two_level_display').html());
		
	})
</script>
<style>
	#form_content_table h4{
		color:green;
	}
</style>
<?php
session_start();
	
	$blog_id = get_the_ID();
	$contents = file_get_contents("http://wordpress/byget/");
	$access=get_post_meta($blog_id);
//	$access_right=$access['access_right'][0];
//	echo '<pre>';
//	var_dump(json_decode($contents));
//	die;
	$access_right = (int)$access['access_right'][0];
//	echo '<pre>';
//	var_dump($access['role'][0]);
//	die;
	$minView = $_SESSION['login']['minView'];
	$maxView = $_SESSION['login']['maxView'];

	if($access_right<$minView || $access_right>$maxView){
//		echo '<script> alert("你没有权限");window.location="http://wordpress/";</script>';
	}
		
	?>	


<div id="main">	
	<picture>
		<source srcset="images/sub_bar.jpg 1x" media="(min-width: 768px)">
		<source srcset="images/sub_bar.jpg 1x">
		<img src="<? echo get_stylesheet_directory_uri();?>/images/sub_bar.jpg" alt="" width="100%">
	</picture>
</div>

<div id="content">
	<div class="container">
		<div class="row">	  
	  		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
	  			<div id="side">
	  				<ul class="side_menu">
	  					<?php 
	  						foreach (get_categories($args_archive) as $key => $cat0) {
	  						?>
	  					<li class="n<?php echo $key+1;?>">
	  						<a href="javascript:void(0);" class="targ">
		  						<abbr class="s<?php echo $key+1;?>"></abbr>
		  						<span><?php echo $cat0->cat_name; ?></span>
	  						</a>
	  						<dl>
		  						<?php 
		  							if($cat0->category_parent==0){
		  						foreach(get_categories($args_archive) as $key2=>$cat2){
		  							if($cat2->category_parent!=0){
			  							if($cat2->category_parent==$cat0->term_id){
			  								$categories = get_categories( array(
											    'term_id' => $cat0->term_id,
											) );
											$html="";
											foreach($categories as $keys =>$values){
												if($cat2->category_parent != 0){
													if($values->category_parent == $cat2->term_id){
														$categories4 = get_categories( array(
												   		 'term_id' => $values->cat_ID,
													) );
														$html.='<li><a href="'.get_category_link( $values->term_id ).'">'.$values->cat_name.'</a></li>';
													}
												}else{
													break;
												}
											}
											
													$args3 = array(
															'type' => 'post',
															'child_of' => $cat2->term_id,
															'parent' => '',
															'orderby' => 'name',
															'order' => 'ASC',
															'hide_empty' => 0,
															'hierarchical' => 1,
															'exclude' => '',
															'include' => '',
															'number' => '',
															'taxonomy' => 'category',
															'pad_counts' => false
														);
															$c = get_categories( $args3 );
											if(get_level()==1){
												echo '<div id="book_display" style="display:none;">';
												if(get_category_children($cat2->term_id)){
													
												}
												echo '</div>';
												
			  									echo '<dd><a href="'.get_category_link( $cat2->term_id ).'">'.$cat2->cat_name.'</a></dd>';
											}
//											
											if(get_level()==2){
												echo '<div id="book_display" style="display:none;">';
//												echo $cate_ID;
//												echo '<br>';
//												var_dump(get_level());
												echo wp_list_categories("hide_empty=0&title_li=0&depth=1&child_of=".$cate_ID);
												echo '</div>';
			  									echo '<dd><a href="'.get_category_link( $cat2->term_id ).'">'.$cat2->cat_name.'</a></dd>';
												
											}
											if(get_level()==3){
												echo '<div id="book_display" style="display:none;">';
//												echo $cate_ID;
//												echo '<br>';
//												var_dump(get_level());
												echo wp_list_categories("hide_empty=0&title_li=0&depth=1&child_of=".get_category($cat)->category_parent);
												echo '</div>';
//			  									echo '<dd><a href="'.get_category_link( $c[0]->term_id ).'">'.$cat2->cat_name.'</a></dd>';
			  									echo '<dd><a href="'.get_category_link( $cat2->term_id ).'">'.$cat2->cat_name.'</a></dd>';
											}
			  							}
		  							}
		  						}
		  						
		  						
		  						?>
		  							
	  						</dl>
	  					</li>
	  					<?php 
	  							}
	  						} 
	  					?>
	  				</ul>
	  			</div>
	  			
	  		</div>
	  		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
	  			<div id="main">
	  				<div class="row">
	  					<div class="col-xs-12 col-sm-12 col-md-5 col-md-push-7 col-lg-5 col-lg-push-8">
	  						<div class="m_search"><input type="text" class="input_search" placeholder="Search"><button type="button" class="btn_search"></button></div>
	  					</div>
	  					<div class="col-xs-12 col-sm-12 col-md-7 col-md-pull-5 col-lg-7 col-lg-pull-5">
	  						
	  						

	  						<h2 id="two_level_title"><?php 
	  							
	  								echo get_category($cat)->cat_name;

	  							?></h2>
	  						<!--<header class="entry-header">-->
								<!--<?php
									if ( is_single() ) :
										the_title( '<h1 class="entry-title">', '</h1>' );
									else :
										the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
									endif;
								?>-->
							<!--</header>--> 
	  					</div>
	  				</div>	
	  				
	  				<ul class="m_link1" id="book_cate">
	  					<!--<?php wp_list_categories('depth=1&child_of='.$cate_ID);?>-->
	  					<!--<li><a href="#">Book2</a></li>
	  					<li><a href="#">Book3</a></li>
	  					<li><a href="#">Book4</a></li>
	  					<li><a href="#">Book5</a></li>
	  					<li><a href="#">Book6</a></li>
	  					<li><a href="#">Book7</a></li>-->
	  				</ul>
	  				<table class="table1">
	  					<tbody id="form_content_table">
	  						
								<script>
									$(document).ready(function(){
										$('.navigation').remove();	
									})
									
								</script>
								<!--<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>-->
									<?php
										// Post thumbnail.
										twentyfifteen_post_thumbnail();
									?>
								
									<header class="entry-header">
										<?php
								//			if ( is_single() ) :
								//				the_title( '<h1 class="entry-title">', '</h1>' );
								//			else :
								//				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
								//			endif;
										?>
									</header><!-- .entry-header -->
								
									<div class="entry-content">
										<?php
											/* translators: %s: Name of current post */
											the_content( sprintf(
												__( 'Continue reading %s', 'twentyfifteen' ),
												the_title( '<span class="screen-reader-text">', '</span>', false )
											) );
								
								//			wp_link_pages( array(
								//				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
								//				'after'       => '</div>',
								//				'link_before' => '<span>',
								//				'link_after'  => '</span>',
								//				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
								//				'separator'   => '<span class="screen-reader-text">, </span>',
								//			) );
										?>
									</div>
	
	  					</tbody>
	  				</table>
	  			</div>
	  		</div>
		</div>
	</div>
</div>
<nav class="navbar navbar-default navbar-mobile bootsnav">
	<div class="collapse navbar-collapse" id="navbar-menu">
		<ul class="nav navbar-nav" data-in="fadeInDown" data-out="fadeOutUp">
			<li class="dropdown m">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">STEM Resources</a>
				<ul class="dropdown-menu">
					<li><a href="#">Teaching scheme</a></li>
					<li><a href="#">Workbook answer</a></li>
				</ul>
			</li>
			<li class="dropdown m">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Unifying concept and Scientific Investigation</a>
				<ul class="dropdown-menu">
					<li><a href="#">Teaching scheme</a></li>
					<li><a href="#">Workbook answer</a></li>
				</ul>
			</li>
			<li class="dropdown m">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Science and Career</a>
				<ul class="dropdown-menu">
					<li><a href="#">Teaching scheme</a></li>
					<li><a href="#">Workbook answer</a></li>
				</ul>
			</li>
			<li class="dropdown m">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Singapore learning materials</a>
				<ul class="dropdown-menu">
					<li><a href="#">Teaching scheme</a></li>
					<li><a href="#">Workbook answer</a></li>
				</ul>
			</li>
			<li class="dropdown m">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Classroom Preparation</a>
				<ul class="dropdown-menu">
					<li><a href="#">Teaching scheme</a></li>
					<li><a href="#">Workbook answer</a></li>
				</ul>
			</li>
			<li class="dropdown m">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Interactive Resources</a>
				<ul class="dropdown-menu">
					<li><a href="#">Teaching scheme</a></li>
					<li><a href="#">Workbook answer</a></li>
				</ul>
			</li>
			<li class="dropdown m">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Virtual Learning Experience</a>
				<ul class="dropdown-menu">
					<li><a href="#">Teaching scheme</a></li>
					<li><a href="#">Workbook answer</a></li>
				</ul>
			</li>
			<li class="dropdown m">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Learning Tools</a>
				<ul class="dropdown-menu">
					<li><a href="#">Teaching scheme</a></li>
					<li><a href="#">Workbook answer</a></li>
				</ul>
			</li>
			<li class="dropdown m">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Ebook</a>
				<ul class="dropdown-menu">
					<li><a href="#">Teaching scheme</a></li>
					<li><a href="#">Workbook answer</a></li>
				</ul>
			</li>
			<li class="dropdown m">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Assessment and Self-Directed Learning Center</a>
				<ul class="dropdown-menu">
					<li><a href="#">Teaching scheme</a></li>
					<li><a href="#">Workbook answer</a></li>
				</ul>
			</li>
		</ul>
	</div>
</nav>


<?php get_footer(); ?>

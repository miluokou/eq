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
	$cate_ID=get_query_var('cat');
	$level = get_level_pro($cate_ID);
	$canshu = get_canshu();
//	var_dump($canshu);
//	die;
	?>
	<div class="banner">
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/Web/images/about.jpg">
	</div>
<div class="c"></div>
<div class="about">
	<?php 
		if(!empty($canshu['html'])){
    				get_template_part($canshu['html']);
		}else{
		?>
	<div class="about_l">
    		<ul>
    			<?php 
				if(is_category($cate_ID) && $level==2){
					$category_parent = get_category($cate_ID)->category_parent;
					$dang_name = get_category($cate_ID)->name;
					$cate_child = get_term_children($category_parent,'category');
					foreach($cate_child as $id){
						$cate_id_detail = get_category($id);
						if($dang_name == $cate_id_detail->name){
							echo '<li id="ab_lli"><a href="'.get_category_link($id).'">'.$cate_id_detail->name.'</a><p>'.$cate_id_detail->slug.'</p></li>';
						}else{
							echo '<li><a href="'.get_category_link($id).'">'.$cate_id_detail->name.'</a><p style="display:none;">'.$cate_id_detail->slug.'</p></li>';
						}
					}
				}
    			?>
        </ul>
    </div>
    
    <?php
    		get_template_part('honour');
		}
    		
    	?>
</div><!---->
<div class="c" style="height:100px;"></div>
<?  get_footer(); ?>
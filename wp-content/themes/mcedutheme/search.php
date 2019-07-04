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
	$host =  curPageURL();
	$get_categories_all=get_categories_all();
	if(constant("SEARCH")===false){
		$search_bool = constant("SEARCH");
	}else{
		$search_bool=true;
	}
	global $wp_query;
	$cate_ID=get_query_var('cat');
	$houzhui=get_houzhui();
	$all_cate_args = get_all_cate_args();
	$cate_args = get_cate_args();
	foreach($cate_args as $v){
		$new_cate_bool[$v['term_id']]=$v['show_first_post'];
		if(isset($v['subtitle'])){
			$new_cate_bool2[$v['term_id']]['subtitle']=$v['subtitle'];
		}
	}
	foreach($all_cate_args as $v){
		$all_cate_order[$v['term_id']]=(int)$v['term_id']+$v['order'];
		if(isset($v['dictionary'])){
			$new_cate_bool3[$v['term_id']]['dictionary']=$v['dictionary'];
		}
	}
	
	if(empty($_SESSION['login'])){
	$img_host =  constant("img_host");
		echo "<script>var redi= $('.logo').find('a').attr('href');
				window.location.href=redi;</script>";
	}
?>

<div id="content">
	<div class="container">
		<div class="row">	  
	  		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	  			<p><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/sub_bar.jpg" alt="" width="100%"></p>
	  		</div>
  		</div>
		<div class="row">	  
	  		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
	  			<div id="side">
	  					<?php 
	  					$i=0;
	  					$cate_list_lv2_m = cate_list_lv2_m();
	  					foreach($cate_list_lv2_m as $lk =>$lv){
							$arr12[$i][$lk]=$lv;
							$keys[$i]=$lk;
							$i++;
//							$arr12[][$lk]['v']=$lv;
						}
						echo '<ul class="side_menu" id="web_tab">';
						foreach($arr12 as $k10 =>$v10){
							echo '<li class="n'.($k10+1).'">';
							if(!is_array($v10[$keys[$k10]])){
  							    echo '<a href="'.$v10[$keys[$k10]].'" class="targ">';
							}else{
  								echo '<a href="javascript:void(0);" class="targ">';
							}

							echo 	'<abbr class="s'.($k10+1).'"></abbr>
						  			<span>'.$keys[$k10].'</span>
						  			</a>
						  			<dl>';
							foreach($v10 as $name=>$name2){
								if(!is_array($name2)){
//									echo '<dd><a href="'.$name2.'">'.$name.'</a></dd>';
								}else{
									foreach($name2 as $kn2 =>$kv2){
										echo '<dd><a href="'.$kv2.'">'.$kn2.'</a></dd>';
//										echo '<li><a href="'.$kv2.'">'.$kn2.'</a>&nbsp;&nbsp;&nbsp;</li>';
									}
								}
							}
							echo '</dl></li>';
						}
						echo '</ul>';
	  					?>
	  			</div>
	  			
	  		</div>

	  		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
	  			<div id="main">
	  				<div class="row">
	  					<div class="col-xs-12 col-sm-12 col-md-5 col-md-push-7 col-lg-5 col-lg-push-8">
	  						<div class="m_search">
		  						<form method="get" id="searchform" action="<?php 

									
		  							if(!$newb3[$cate_ID]){
										echo icon_lv3_first()[1]['link'];
									}else{
										$host ="";
										echo $host;
									}
		  							?>">
		  							<?php
		  								if($houzhui=='_zh'){
	//	  									echo '<input name="s" id="s" type="text" placeholder="搜索" class="text input_search" data-pure-clear-button/>';
		  									echo '<div class="form-group has-feedback pull-left" id="page2_search">
											        <input type="text" name="s" id="s" class="text input_search"  placeholder="搜索">
											        <span aria-hidden="true" id="remove_icon"></span>
											        <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true" style="vertical-align:middle;"></span>
											      </div>';
		  								}else{
		  									echo '<div class="form-group has-feedback pull-left" id="page2_search">
											        <input type="text" name="s" id="s" class="text input_search"  placeholder="Search">
											        <span aria-hidden="true" id="remove_icon"></span>
											        <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true" style="vertical-align:middle;"></span>
											      </div>';
		  								}
		  							?>	
									<input id="searchsubmit" type="submit" class="submit btn_search1" value=" " />
		  							<!--<button type="button" class="btn_search"></button>-->
								</form>
	  						</div>
	  					</div>
	  					<div class="col-xs-12 col-sm-12 col-md-7 col-md-pull-5 col-lg-7 col-lg-pull-5">
	  						<?php
	  							if($houzhui=="_en"){
//	  								$abc = get_dictionary();
//	  								$ddd = get_category($cat)->term_id;
//	  								var_dump($ddd);
	  								if(!get_dictionary()[get_category($cat)->term_id]){
	  									echo '<h2 id="two_level_title" style="color:blue">Search Results:</h2>';
	  								}else{
	  									echo '<h2 id="two_level_title" style="color:blue">Related Vocabulary:</h2>';
	  								}
	  							}else{
	  								if(!get_dictionary()[get_category($cat)->term_id]){
	  									echo '<h2 id="two_level_title" style="color:blue">搜索結果:</h2>';
	  								}else{
	  									echo '<h2 id="two_level_title" style="color:blue">相關詞彙:</h2>';
	  								}
	  							}
	  							?>
	  							
	  						<h2 id="two_level_small_title" style="display: none;">
	  							<?php
	  								echo get_category($cat)->name;
	  								
	  							?>
	  						</h2>
	  						<h2 id="cate_parent" style="display: none;"><?php echo get_category($cat)->parent;?></h2>
	  							<?php
									$i=0;
	  								foreach($new_cate_bool as $k=>$v){
	  									if($v){
	  										echo '<div id="posts_special_'.$k.'"  class="posts_special_'.$i.'" style="display: none;" >';
	  										$post_c = "category=".$k."&order=DESC&numberposts=1000";
											$posts_special = get_posts($post_c);
											echo '<h2>'.$posts_special[0]->post_title.'</h2>';
											echo '<p>'.$posts_special[0]->post_content.'</p>';
											echo '</div>';
	  									}
	  								 $i++;
	  								}
	  								?>
	  					</div>
	  				</div>
	  				<!--<ul class="m_link1" id="book_cate"></ul>-->
	  				<table class="table1">
	  					<tbody id="form_content_table">
	  						<?php
	  							$keys = $_GET['s'];
	  							if(isset($keys)){
	  								search_v2($keys);
	  								
	  							}else{
	  								echo 'NOT FOUND';
	  							}

	  						?>
	  					</tbody>
	  				</table>
	  			</div>
	  		</div>
		</div>
	</div>
</div>
<?php  echo '<div class="book_display" style="display:none">';
//	echo '<pre>';
		foreach($get_categories_all as $allk=>$allv){
			if($allv->category_parent==get_category($cat)->category_parent){
				$arr=description_split($allv->description);
				if(is_array($arr) && isset($arr['order'])){
					$new_arr_x[$arr['order']][$allv->name]=$allv->term_id;
				}else{
					$new_arr_x[10000+$allv->term_id][$allv->name]=$allv->term_id;
				}
			}
		}
		ksort($new_arr_x);
		foreach($new_arr_x as $v){
			$new_arr[]=$v;
		}
		foreach($new_arr as $new_k =>$new_v){
			foreach($new_v as $new_v_k =>$new_v_v){
					echo '<li class="cat-item cat-item-'.$new_v_v.'"><a href="'.get_category_link($new_v_v).'">'.$new_v_k.'</a></li>';
			}
		}
	echo '</div>';
?>
<div id="book_cate" style="display: none;"></div>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/archive.js"></script>
	<div id="relativ_path2" style="display: none;"><?php  echo constant('img_host');?></div>


<?php get_footer(); ?>


<?php
/**
 * Twenty Fifteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Twenty Fifteen 1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 660;
}

/**
 * Twenty Fifteen only works in WordPress 4.1 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.1-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'twentyfifteen_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since Twenty Fifteen 1.0
 */

function twentyfifteen_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyfifteen
	 * If you're building a theme based on twentyfifteen, use a find and replace
	 * to change 'twentyfifteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'twentyfifteen' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'twentyfifteen' ),
		'social'  => __( 'Social Links Menu', 'twentyfifteen' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

	/*
	 * Enable support for custom logo.
	 *
	 * @since Twenty Fifteen 1.5
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 248,
		'width'       => 248,
		'flex-height' => true,
	) );

	$color_scheme  = twentyfifteen_get_color_scheme();
	$default_color = trim( $color_scheme[0], '#' );

	// Setup the WordPress core custom background feature.

	/**
	 * Filter Twenty Fifteen custom-header support arguments.
	 *
	 * @since Twenty Fifteen 1.0
	 *
	 * @param array $args {
	 *     An array of custom-header support arguments.
	 *
	 *     @type string $default-color     		Default color of the header.
	 *     @type string $default-attachment     Default attachment of the header.
	 * }
	 */
	add_theme_support( 'custom-background', apply_filters( 'twentyfifteen_custom_background_args', array(
		'default-color'      => $default_color,
		'default-attachment' => 'fixed',
	) ) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', 'genericons/genericons.css', twentyfifteen_fonts_url() ) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // twentyfifteen_setup
add_action( 'after_setup_theme', 'twentyfifteen_setup' );

/**
 * Register widget area.
 *
 * @since Twenty Fifteen 1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function twentyfifteen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'twentyfifteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'twentyfifteen_widgets_init' );

if ( ! function_exists( 'twentyfifteen_fonts_url' ) ) :
/**
 * Register Google fonts for Twenty Fifteen.
 *
 * @since Twenty Fifteen 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function twentyfifteen_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Noto Sans, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Noto Sans font: on or off', 'twentyfifteen' ) ) {
		$fonts[] = 'Noto Sans:400italic,700italic,400,700';
	}

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Noto Serif, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Noto Serif font: on or off', 'twentyfifteen' ) ) {
		$fonts[] = 'Noto Serif:400italic,700italic,400,700';
	}

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Inconsolata, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'twentyfifteen' ) ) {
		$fonts[] = 'Inconsolata:400,700';
	}

	/*
	 * Translators: To add an additional character subset specific to your language,
	 * translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language.
	 */
	$subset = _x( 'no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', 'twentyfifteen' );

	if ( 'cyrillic' == $subset ) {
		$subsets .= ',cyrillic,cyrillic-ext';
	} elseif ( 'greek' == $subset ) {
		$subsets .= ',greek,greek-ext';
	} elseif ( 'devanagari' == $subset ) {
		$subsets .= ',devanagari';
	} elseif ( 'vietnamese' == $subset ) {
		$subsets .= ',vietnamese';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * JavaScript Detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Fifteen 1.1
 */
function twentyfifteen_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'twentyfifteen_javascript_detection', 0 );

/**
 * Enqueue scripts and styles.
 *
 * @since Twenty Fifteen 1.0
 */
function twentyfifteen_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'twentyfifteen-fonts', twentyfifteen_fonts_url(), array(), null );

	// Add Genericons, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.2' );

	// Load our main stylesheet.
	wp_enqueue_style( 'twentyfifteen-style', get_stylesheet_uri() );

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'twentyfifteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentyfifteen-style' ), '20141010' );
	wp_style_add_data( 'twentyfifteen-ie', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'twentyfifteen-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'twentyfifteen-style' ), '20141010' );
	wp_style_add_data( 'twentyfifteen-ie7', 'conditional', 'lt IE 8' );

	wp_enqueue_script( 'twentyfifteen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20141010', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'twentyfifteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20141010' );
	}

	wp_enqueue_script( 'twentyfifteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20150330', true );
	wp_localize_script( 'twentyfifteen-script', 'screenReaderText', array(
		'expand'   => '<span class="screen-reader-text">' . __( 'expand child menu', 'twentyfifteen' ) . '</span>',
		'collapse' => '<span class="screen-reader-text">' . __( 'collapse child menu', 'twentyfifteen' ) . '</span>',
	) );
}
add_action( 'wp_enqueue_scripts', 'twentyfifteen_scripts' );

/**
 * Add preconnect for Google Fonts.
 *
 * @since Twenty Fifteen 1.7
 *
 * @param array   $urls          URLs to print for resource hints.
 * @param string  $relation_type The relation type the URLs are printed.
 * @return array URLs to print for resource hints.
 */
function twentyfifteen_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'twentyfifteen-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '>=' ) ) {
			$urls[] = array(
				'href' => 'https://fonts.gstatic.com',
				'crossorigin',
			);
		} else {
			$urls[] = 'https://fonts.gstatic.com';
		}
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'twentyfifteen_resource_hints', 10, 2 );

/**
 * Add featured image as background image to post navigation elements.
 *
 * @since Twenty Fifteen 1.0
 *
 * @see wp_add_inline_style()
 */
function twentyfifteen_post_nav_background() {
	if ( ! is_single() ) {
		return;
	}

	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );
	$css      = '';

	if ( is_attachment() && 'attachment' == $previous->post_type ) {
		return;
	}

	if ( $previous &&  has_post_thumbnail( $previous->ID ) ) {
		$prevthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $previous->ID ), 'post-thumbnail' );
		$css .= '
			.post-navigation .nav-previous { background-image: url(' . esc_url( $prevthumb[0] ) . '); }
			.post-navigation .nav-previous .post-title, .post-navigation .nav-previous a:hover .post-title, .post-navigation .nav-previous .meta-nav { color: #fff; }
			.post-navigation .nav-previous a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
	}

	if ( $next && has_post_thumbnail( $next->ID ) ) {
		$nextthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $next->ID ), 'post-thumbnail' );
		$css .= '
			.post-navigation .nav-next { background-image: url(' . esc_url( $nextthumb[0] ) . '); border-top: 0; }
			.post-navigation .nav-next .post-title, .post-navigation .nav-next a:hover .post-title, .post-navigation .nav-next .meta-nav { color: #fff; }
			.post-navigation .nav-next a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
	}

	wp_add_inline_style( 'twentyfifteen-style', $css );
}
add_action( 'wp_enqueue_scripts', 'twentyfifteen_post_nav_background' );

/**
 * Display descriptions in main navigation.
 *
 * @since Twenty Fifteen 1.0
 *
 * @param string  $item_output The menu item output.
 * @param WP_Post $item        Menu item object.
 * @param int     $depth       Depth of the menu.
 * @param array   $args        wp_nav_menu() arguments.
 * @return string Menu item with possible description.
 */
function twentyfifteen_nav_description( $item_output, $item, $depth, $args ) {
	if ( 'primary' == $args->theme_location && $item->description ) {
		$item_output = str_replace( $args->link_after . '</a>', '<div class="menu-item-description">' . $item->description . '</div>' . $args->link_after . '</a>', $item_output );
	}
	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'twentyfifteen_nav_description', 10, 4 );

/**
 * Add a `screen-reader-text` class to the search form's submit button.
 *
 * @since Twenty Fifteen 1.0
 *
 * @param string $html Search form HTML.
 * @return string Modified search form HTML.
 */
function twentyfifteen_search_form_modify( $html ) {
	return str_replace( 'class="search-submit"', 'class="search-submit screen-reader-text"', $html );
}
add_filter( 'get_search_form', 'twentyfifteen_search_form_modify' );

/**
 * Modifies tag cloud widget arguments to display all tags in the same font size
 * and use list format for better accessibility.
 *
 * @since Twenty Fifteen 1.9
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array The filtered arguments for tag cloud widget.
 */
function twentyfifteen_widget_tag_cloud_args( $args ) {
	$args['largest']  = 22;
	$args['smallest'] = 8;
	$args['unit']     = 'pt';
	$args['format']   = 'list';
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'twentyfifteen_widget_tag_cloud_args' );


/**
 * Implement the Custom Header feature.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/customizer.php';


function get_houzhui(){
	$host =  $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$position= strpos($host,'_en');
	$position2= strpos($host,'/en');
	$position3= strpos($host,'_zh');
	$position4= strpos($host,'/zh');

	if($position || $position2){
		$houzhui='_en';
	}
	if($position3 || $position4){
		$houzhui='_zh';
	}
	return $houzhui;
}
//为分类排序
function category_sort($args,$all_cate_args){
	foreach($args as $v){
		if(is_numeric($v->description)){
			$all_cate_order[$v->term_id]=(int)$v->category_parent+(int)$v->description;
		}
	}
	foreach($all_cate_args as $v){
		$all_cate_order[$v['term_id']]=(int)$v['category_parent']+$v['order'];
	}
	asort($all_cate_order);
		foreach($all_cate_order as $o_k => $o_v){
			foreach($args as $v){
				if($o_k==$v->term_id){
					$new_catess[$v->term_id]=$v;
				}
			}
		}
	
	foreach($args as $v){
		if(!isset($all_cate_args[$v->term_id])){
			if(!isset($new_catess[$v->term_id])){
//				unset($new_catess[$v->term_id]);
				$new_catess[$v->term_id]=$v;
			}
		}
	}
	return $new_catess;
}

function term_id_sort($args){
	foreach($args as $v){
		$sort[]=$v->term_id;
	}
	sort($sort);
	foreach($sort as $v2){
		foreach($args as $v3){
				if($v2 == $v3->term_id){
					$new_args[]= $v3;
				}
			}
	}
	if(isset($new_args)){
		return $new_args;
		
	}else{
		return false;
	}
}

function  picture_list($icon_array_2){
	$lalala = cate_list_lv2_m();
	foreach($icon_array_2 as $k=>$vv){
		$sdf = get_category($k)->name;
		$icon_array[get_category($k)->name]=$vv;
	}
	foreach($lalala as $title=>$t_l){
		if(is_array($t_l)){
			foreach($icon_array as $title2=>$il){
				if($title==$title2){
					$html='';
					foreach($t_l as $ttk =>$ttv){
						if(isset($ttk)){
							$html.='<a href="'.$ttv.'">'.$ttk.'</a>';
						}
//						$html.='<li>'.$ttk.'</li>';
					}
		 			echo '<li><img src="'.$il['image_src'].'"><span>'.$html.'</span></li>';
				}
			}

		}else{
			foreach($icon_array as $title2=>$il){
				if($title==$title2){
   					echo '<li><a href="'.$t_l.'"><img src="'.$il['image_src'].'"><span></span></a></li>';
// 					echo '<li><a href="javascript:void(0);"><img src="'.$il['image_src'].'"><span></span></a></li>';
				}
			}
		}
	}
}

function get_canshu(){
			$host =  $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
			$last_count= strrpos($host,'?');

			$canshu = substr($host,$last_count+1);
			$fensan = explode("&",$canshu);
			foreach($fensan as $v){
				$new_arr2 = explode('=',$v);
				$new_arr[$new_arr2[0]]=$new_arr2[1];
			}
			return $new_arr;
}

function curPageURL() 
{
  $pageURL = 'http';
	 if(isset($_SERVER["HTTPS"])){
	 	if ($_SERVER["HTTPS"] == "on") 
		 {
		    $pageURL .= "s";
		 }
	 }
	  
  $pageURL .= "://";
 
  if ($_SERVER["SERVER_PORT"] != "80") 
  {
    $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"];
  } 
  else
  {
    $pageURL .= $_SERVER["SERVER_NAME"];
  }
  return $pageURL;
}
function show_category(){
    global $wpdb;
    $request = "SELECT $wpdb->terms.term_id, name FROM $wpdb->terms ";
    $request .= " LEFT JOIN $wpdb->term_taxonomy ON $wpdb->term_taxonomy.term_id = $wpdb->terms.term_id ";
    $request .= " WHERE $wpdb->term_taxonomy.taxonomy = 'category' ";
    $request .= " ORDER BY term_id asc";
    $categorys = $wpdb->get_results($request);
    foreach ($categorys as $category) { //调用菜单
        $output = '<span>'.$category->name."(<em>".$category->term_id.'</em>)</span>';
        echo $output;
    }
}
function show_banners(){
    global $wpdb;
	$request = "select * from $wpdb->posts where post_type='banner' and post_status='publish'";
    $categorys = $wpdb->get_results($request);

	$houzhui = get_houzhui();
    foreach($categorys as $v){

			if($v->menu_order==0){
    				$category_new[$v->ID]['id']=$v;
    				$sql2 = "select * from $wpdb->posts where post_parent='".$v->ID."'";
   				 $res2 = $wpdb->get_results($sql2);
    				if(isset($res2)){
    					$category_new[$v->ID]['img_src']=$res2[0]->guid;
    				}
			}else{
    				$category_new[$v->menu_order]['id']=$v;
    				$category_new[$v->menu_order]['img_src']=$v;
    				$sql2 = "select * from $wpdb->posts where post_parent='".$v->ID."'";
   				 $res2 = $wpdb->get_results($sql2);
    				if(isset($res2)){
    					$category_new[$v->menu_order]['img_src']=$res2[0]->guid;
    				}
			}
    }
    ksort($category_new);
	return $category_new;
}

function huanyuming($jiuwangzhi,$xinwangzhi){
	$str = "UPDATE wp_term_taxonomy SET description = replace(description, '$jiuwangzhi', '$xinwangzhi');
	UPDATE wp_options SET option_value = replace(option_value, '$jiuwangzhi', '$xinwangzhi');";
	return $str;
}

function footer_sitmap(){
		$cate_args = get_cate_args();
		$m_all_categories=get_categories_all();
		$parent0=get_parent0();
	  	$get_categories_improve_parent0= term_id_sort($parent0);
		$zhouzhui = get_houzhui();
		if($zhouzhui=="_en"){
			foreach($get_categories_improve_parent0 as $v){
				foreach($cate_args as $k1 =>$v1){
					if($k1 == $v->term_id){
						$new_cateargs[$k1]=$v1;
					}
				}
			}
		}else{
			$new_cateargs=$cate_args;
		}
			$get_cate_asc= category_sort($m_all_categories,$cate_args);
		
		foreach($new_cateargs as $k =>$v){
				foreach($get_cate_asc as $mv){
				if($mv->parent==$k){
						$xinded[$v['name']][$mv->name]=get_category_link($mv->term_id);
						$chidren_ids = get_category_children($mv->term_id);
						$arr = explode('/',$chidren_ids);
						if(count($arr)>1){
							$xinded[$v['name']][$mv->name]=get_category_link($arr[1]);
					}
				}
			}
		}
	return $xinded;
}

function cate_list(){
	$args= array(
				'number' =>'',
			);
	$cates = get_parent0();
	foreach($cates as $v){
		if($v->parent==0){
			$fenlei[$v->term_id]=$v->name;
		}
	}
	ksort($fenlei);
//	get_cate_args()
	foreach($fenlei as $k=>$v){
		foreach($cates as $v2){
			if($k ==$v2->term_id ){
				$new_cates[]=$v2;
			}
		}
	}
	$houzhui = get_houzhui();
	if($houzhui=="_en"){
		$new_sort1=array(0,1,2,3,6,4,5,7,8,9);
	}else{
		$new_sort1=array(0,1,3,2,8,4,9,7,6,5);
	}

	foreach($new_sort1 as $v4){
		foreach($new_cates as $k5 =>$v5){
			if($v4==$k5){
				$new_cates2[]=$v5;
			}
		}
	}

	return $new_cates2;
}
function cate_list_lv1(){
	$allcate_arg = get_all_cate_args();
	$cates = get_parent0();
	foreach($cates as $v){
			if($v->parent==0){
				$arr=description_split($v->description);
				if(is_array($arr) && isset($arr['order'])){
					$fenlei[$arr['order']][$v->term_id]=$v;
				}else{
					$fenlei[$v->term_id][$v->term_id]=$v;
				}
			}
	}

	ksort($fenlei);
	foreach($fenlei as $v6){
		foreach($v6 as $v7){
			$new_order[]=$v7;
		}
	}
	return $new_order;
}
function ksort_arr(){
	$cates = get_categories_all();
	$cate_lv1 = cate_list_lv1();
	$cates = order_cate_des($cates);
	foreach($cates as $v2){
		foreach($cate_lv1 as $v){
				if($v2->parent == $v->term_id){
					$arr=description_split($v2->description);
					if(is_array($arr) && empty_replace($arr['order'])){
						$arr1[$v->name][$arr['order']][$v2->term_id]=$v2;
					}else{
						$arr1[$v->name][10000+$v2->term_id][$v2->term_id]=$v2;
					}
				}
			}
			ksort($arr1[$v->name]);
		}
		
		foreach($arr1 as $k=>$v){
			if(isset($v)){
				foreach($v as $k2 =>$v2){
					$arr[$k][]=$v2;
				}
			}else{
				$arr[$k][]=$v2;
			}
			
		}
		
	foreach($cate_lv1 as $v){
		foreach($arr as $k2=>$v2){
			if($k2 == $v->name){
				$new_arr[$v->name]=$v2;
			}
		}
	}
	
	
	return $new_arr;

}
function cate_list_lv2(){
	$arr = ksort_arr();
	foreach($arr as $k8 =>$v8){
		foreach($v8 as $k9=>$v9){
			foreach($v9 as $k10 =>$v10){
				$arr_new[$k8][$v10->name]=get_category_link($k10);
			}
		}
	}
	return $arr_new;
}
function get_cate_asc(){
	$get_categories_improve_asc=get_categories_all();
	$all_cate_args = get_all_cate_args();
	$get_cate_asc= category_sort($get_categories_improve_asc,$all_cate_args);
	return $get_cate_asc;
}
function order_cate_des($get_cate_asc){
	foreach($get_cate_asc as $v){
			$arr=description_split($v->description);
			if(is_array($arr) && isset($arr['order'])){
					$get_cate_asc_new[$arr['order']][]=$v;
			}else{
					$get_cate_asc_new[10000+$v->term_id][]=$v;
					
			}

	}
	ksort($get_cate_asc_new);
	foreach($get_cate_asc_new as $v){
		foreach($v as $v2){
			$get_cate_asc_new_final[]=$v2;
		}
	}
	return $get_cate_asc_new_final;
}
function cate_list_lv2_m1(){
	$get_cate_asc = get_cate_asc();
	$houzhui = get_houzhui();
	if($houzhui=="_en"){
		$arg_key = '?key=A';
	}else{
		$arg_key = '?key=1';
	}
	$arr = ksort_arr();
	echo '<pre>';
	foreach($arr as $k8 =>$v8){
		var_dump($v8);
//		foreach($v8[0] as $k9=>$v9){
////			foreach($v9 as $k10=>$v10){
//				$arr_new[$k8][$v9->name]=get_category_link($k9);
////			}
//		}
	}
//			var_dump($arr);
	
//	var_dump($arr_new);
	die;
//	die;
	return $arr_new;

}
function cate_list_lv2_m(){
	$get_cate_asc = get_cate_asc();
	$get_cate_asc_new=order_cate_des($get_cate_asc);
	$all_cate_args = get_all_cate_args();
	$cate_args = get_cate_args();
	$houzhui = get_houzhui();
	if($houzhui=="_en"){
		$arg_key = '?post_fl_all=1';
	}else{
		$arg_key = '?post_fl_all=1';
	}
	foreach($cate_args as $v){
		if(isset($v['show_first_post'])){
			$new_cate_bool[$v['term_id']]=$v['show_first_post'];
		}
		if(isset($v['subtitle'])){
			$new_cate_bool2[$v['term_id']]['subtitle']=$v['subtitle'];
		}
		if(isset($v['new_url'])){
			$new_cate_bool4[get_category($v['term_id'])->name]['new_url']=$v['new_url'];
		}
	}
	foreach($all_cate_args as $v){
		if(isset($v['dictionary'])){
			$new_cate_bool3[$v['term_id']]['dictionary']=$v['dictionary'];
		}
		if(isset($v['show_lv2'])){
			$show_lv2_bool[$v['term_id']]['show_lv2']=$v['show_lv2'];
		}
	}
	$arr = ksort_arr();
	foreach($arr as $k8 =>$v8){
			
			if(!is_array($v8) || !isset($v8[0])){
				$arr_new[$k8]='#';
			}else{
				
					foreach($v8 as $k9=>$v9){
						if(is_array($v9)){
							
							foreach($v9 as $k10 =>$v10){
								$level_2_first_id=0;
								foreach($get_cate_asc_new as $gcik => $gciv){
									if(isset($v10->term_id)){
										if($gciv->parent==$v10->term_id){
											$level_2_first_id = (int)$gciv->term_id;
											break;
										}
									}
								}
								if(isset($v10->name)){
									
									if(!isset($level_2_first_id) || $level_2_first_id==0){
											$arr_new[$k8][$v10->name]=get_category_link($k10).$arg_key;
											
									}else{
//										if($v10->name=='每日分類新聞'){
//											////var_dump($level_2_first_id);
//										}
											$arr_new[$k8][$v10->name]=get_category_link($level_2_first_id).$arg_key;
									}
								}
							}
						}
					}
					foreach($v8 as $k9=>$v9){
						if(isset($v9)){
							foreach($v9 as $k10 =>$v10){
							if(@$new_cate_bool[$v10->parent]){
								if(!isset($arr_new2[$k8]['first'])){
									$arr_new2[$k8]['first'] = $k10;
								}
								$arr_new[$k8]=get_category_link($arr_new2[$k8]['first']).$arg_key;
							}
							if(@$show_lv2_bool[$v10->parent]['show_lv2']===false){
								if(!isset($arr_new2[$k8]['first'])){
//									$kid = @;
									if(isset(get_term_children($k10,'category')[0])){
										$kid=get_term_children($k10,'category')[0];
									}else{
										$kid=$k10;
									}
//									if(get_level_pro($k10)==3){
//										
//									}
									$arr_new2[$k8]['first'] = $kid;
//									if($k8=='模擬試卷'){
//										//var_dump($kid);
//									}
								}
								$arr_new[$k8]=get_category_link($arr_new2[$k8]['first']).$arg_key;
								
							}
						}
					}
				}
		}
		if(@$new_cate_bool4[$k8]['new_url']){
			$arr_new[$k8]=$new_cate_bool4[$k8]['new_url'];
		}
	}
//	echo '<pre>';
//	var_dump($arr_new);
//	die;
	return $arr_new;
}

function icon_lv3_first(){
	$cate_list_lv1 = cate_list_lv1();
	foreach($cate_list_lv1 as $ak =>$av){
		$names[$av->name]=$av->term_id;
		$arr[$av->term_id]['image_src']=description_split($av->description)['image_url'];
	}
	
	
	$arr_new = cate_list_lv2_m();
	foreach($arr_new as $k =>$v){
		if(is_array($v)){
			foreach($v as $k1 => $v2){
				if(!isset($arr[$names[$k]]['link'])){
					$arr[$names[$k]]['link']=$v2;
				}
			}
		}else{
			$arr[$names[$k]]['link']=$v;
		}
	}
	return $arr;
}
function post_id_parent($obj){
}
function search($args){
//	wp_get_post_parent_id(
	preg_match_all('/[\s]/',$args,$arr);
	global $wpdb;
	if(!preg_match_all('/[\s]/',$args)){
		if(isset($args)){
			$request1 = "select * from $wpdb->terms where term_group=0 and name like '%".$args."%'";
			$request2 = "select * from $wpdb->posts where post_type='post' and post_title like '%".$args."%'";
		}else{
			return false;
		}
	}else{
		foreach($arr as $v){
			foreach($v as $v2){
				$content[]=explode($v2,$args);
			}
		}
		$w_sql1='';
		$w_sql2='';
		$quchong=array();
		if(isset($content)){
			foreach($content as $words){
				foreach($words as $word){
					if(isset($word)){
						if(!isset($quchong[$word])){
							$w_sql1.=" and name like '%".$word."%'";
							$w_sql2.=" and post_title like '%".$word."%'";
						}
						$quchong[$word]=$word;
					}
				}
			}
			if(isset($w_sql1)){
				$request1 = "select * from $wpdb->terms where term_group=0".$w_sql1;
				if(isset($w_sql2)){
					$request2 = "select * from $wpdb->posts where post_type='post'".$w_sql2;
				}
			}else{
				return false;
			}
		}
	}
	  if(isset($request1)){
		$categorys = $wpdb->get_results($request1);
		foreach($categorys as $v){
			$posts=get_posts( "category=".$v->term_id."&order=ASC&numberposts=1000");
			foreach($posts as $vv){
				$attach = get_attached_media( '', $vv->ID );
				if(isset($attach)){
					$categorysf[$v->term_id]=$v;
				}
			}
		}
		
		if(isset($request2)){
			$categorys2 = $wpdb->get_results($request2);
			foreach($categorys2 as $cv){
				$content = get_the_category($cv->ID);
				foreach($content as $co){
					$categorysf[$co->term_id]->term_id=$co->term_id;
					$categorysf[$co->term_id]->name=$co->name;
				}
			}
		}
////534
//		die;
			
		foreach($categorysf as $v1){
////			$v1->from='terms';
			$posts=get_posts( "category=".$v1->term_id."&order=ASC&numberposts=1000");
			
			foreach($posts as $vv){
				$attach[$vv->ID] = get_attached_media('', $vv->ID);
//				get_the_category($vv->ID);
//				die;
//				if(isset($attach[$vv->ID]) && !empty_replace($attach[$vv->ID])){
//					foreach($attach[$vv->ID] as $v11){
//						if(isset($v11)){
//							$new_$vv->arrr[$vv->ID][$v11->guid]=$v11->guid;
//						}
//						die;
//					}
//					foreach($attach as $k14 =>$v14){
//						foreach($v14 as $k15=>$v15){
//							$new_arrr[$vv->ID][$v15->guid]=$v15->guid;
//						}
//					}
					foreach($attach[$vv->ID] as $k15 =>$v15){
						$new_arrr[$vv->ID][$k15]=$v15->guid;
					}
					
//					die;
					if(isset($new_arrr[$vv->ID])){
						$categorysf[$v1->term_id]->child[$vv->post_title]=$new_arrr[$vv->ID];
					}else{
						$categorysf[$v1->term_id]->child[$vv->post_title]='';
					}
//				}
			}
		}
		
		foreach($categorysf as $v){
				if(get_houzhui()=="_zh"){
					if(preg_match('/[\x{4e00}-\x{9fa5}]/u', $v->name)>0){
					$cates = get_all_cate_parent($v->term_id);
					krsort($cates);
					$titles="";
					$nbsp="&nbsp;";
					foreach($cates as $k16=> $v16){
//						foreach($k16 as $v){
//							$nbsp.=
//						}
						for($i=0;$i<=$k16;$i++){
							$nbsp.="&nbsp;";
						}
						if($v16!='No categories'){
							$titles.=$v16.'<br>'.$nbsp.'->';
						}
					}
					echo '<tr><th class="entry-title" ><a href="'.get_category_link(get_the_category($v->term_id)->parent).'" rel="bookmark" style="color:green;">'.$titles.$v->name.'</a></th></tr>';
					if(isset($v->child)){
						foreach($v->child as $title => $guid){
							echo '<tr>';
								echo '<td class="entry-title"><a href="#" rel="bookmark">'.$title.'</a></td>';
									$i=0;
									foreach($guid as $gu){
										$i++;
										$type = substr($gu,-3);
										if($i<=4){
											if(isset($gu)){
												if($type=="ocx"){
														$type='doc';
													}
												echo '<td style="color:red;"><center><a href="'.$gu.'" download="">';
													echo '<img class="attachment-icon" src="../../../../wp-content/plugins/download-attachments/images/ext/'.$type.'.gif" alt="'.$type.'">';
												echo '</a></center></td>';
											}
										}
									}
							echo '</tr>';
						}
					}
				}
			}else{
				if(!preg_match('/[\x{4e00}-\x{9fa5}]/u', $v->name)>0){
					$cates = get_all_cate_parent($v->term_id);
					krsort($cates);
					$titles="";
					$nbsp="&nbsp;";
					foreach($cates as $k16=> $v16){
//						foreach($k16 as $v){
//							$nbsp.=
//						}
						for($i=0;$i<=$k16;$i++){
							$nbsp.="&nbsp;";
						}
						if($v16!='No categories'){
							$titles.=$v16.'<br>'.$nbsp.'->';
						}
					}
					echo '<tr><th class="entry-title" ><a href="'.get_category_link(get_the_category($v->term_id)->parent).'" rel="bookmark" style="color:green;">'.$titles.$v->name.'</a></th></tr>';
					if(isset($v->child)){
						foreach($v->child as $title => $guid){
							echo '<tr>';
								echo '<td class="entry-title"><a href="#" rel="bookmark">'.$title.'</a></td>';
									$i=0;
									foreach($guid as $gu){
										$i++;
										$type = substr($gu,-3);
										if($i<=4){
											if(isset($gu)){
												if($type=="ocx"){
														$type='doc';
													}
												echo '<td style="color:red;"><center><a href="'.$gu.'" download="">';
													echo '<img class="attachment-icon" src="../../../../wp-content/plugins/download-attachments/images/ext/'.$type.'.gif" alt="'.$type.'">';
												echo '</a></center></td>';
											}
										}
									}
							echo '</tr>';
						}
					}
				}
			}

		}
		return $categorys;
	  }else{
	  	return false;
	  }
}

function get_all_cate_parent($term_id){
	$c = get_category($term_id);
	$i=0;
	while($c -> category_parent){  
		$i++;
		
		$c = get_category($c->category_parent); //获取上级分类
		$arr[$i]['name']=$c->name;
		$arr[$i]['id']=$c->term_id;
	}
	if(!isset($arr)){
		$c = get_category($term_id);
		$arr[0]['name']=$c->name;
		$arr[0]['id']=$c->id;
		return $arr;
	}else{
		return $arr;	
	}
}

function get_dictionary(){
	global $wp_query;
	$cate_ID=get_query_var('cat');
	$all_cate_args = get_all_cate_args();
	foreach($all_cate_args as $v){
		if(isset($v['dictionary'])){
			$new_cate_bool3[$v['term_id']]['dictionary']=$v['dictionary'];
		}
	}
	return $new_cate_bool3;
}
function chongfubufen($v,$titles,$quchong){
	$cates = get_all_cate_parent($v->term_id);
	krsort($cates);
	$titles="";
	$id=0;
	$nbsp="&nbsp;";

	foreach($cates as $k16=> $v16){
		for($i=0;$i<=$k16;$i++){
			$nbsp.="&nbsp;";
		}
		if($v16!='No categories'){
			$titles.=$v16['name'].'<br>'.$nbsp.'->';
		}
		if(count($cates)>1){
			$id =$v16['id'];
		}elseif(count($cates)==1){
			$aaa = get_category($v->term_id);
			if($aaa->category_parent==0){
				$id =get_term_children(get_term_children($v->term_id,'category')[0],'category')[0];
			}else{
				$id = get_term_children($v->term_id,'category')[0];
			}
		}
	}
	global $wp_query;
	$cate_ID=get_query_var('cat');
	if($v->term_id==get_category($cate_ID)->term_id){
		if(get_dictionary()[$v->term_id]){
//		echo '<tr><th class="entry-title" ><a href="'.get_category_link($v->term_id).'" rel="bookmark" style="color:green;" >'.keys_highlight($titles.$v->name,$quchong).'</a></th></tr>';
		if(isset($v->child)){
			foreach($v->child as $title => $guid){
				echo '<tr>';
					foreach($v->child2 as $post_id => $guid2){
						if($guid == $guid2){
//							$dq[$title]=$post_id;
//							$post_id
//							if(!isset($dq[$title])){
								$attch_data = get_post_meta($post_id)['glossary_stroke'][0];
								echo '<td class="entry-title"><a class="wulianjie" word-data="'.$attch_data.'">'.keys_highlight($title,$quchong).'</a></td>';
//							}
							if($guid==""){
								break;
							}
						}
					}
//					die;
				echo '</tr>';
				}
			}
		}
	}else{
	 	if(!isset(get_dictionary()[get_category($cate_ID)->term_id])){
			echo '<tr><th class="entry-title" ><a href="'.get_category_link($id).'" rel="bookmark" style="color:green;" >'.keys_highlight($titles.$v->name,$quchong).'</a></th></tr>';
			if(isset($v->child)){
				foreach($v->child as $title => $guid){
					echo '<tr>';
						if(empty_replace($guid)){
							echo '<td class="entry-title"><a href="'.get_category_link($id).'" class="wulianjie">'.keys_highlight($title,$quchong).'</a></td>';
						}else{
							echo '<td class="entry-title"><a href="'.get_category_link($id).'" rel="bookmark">'.keys_highlight($title,$quchong).'</a></td>';
						}
						$i=0;
						foreach($guid as $gu){
							$i++;
							$type = substr($gu,-3);
							if($i<=4){
								if(isset($gu)){
									if($type=="ocx"){
											$type='doc';
										}

									echo '<td style="color:red;"><center><a href="'.$gu.'" download="">';
										echo '<img class="attachment-icon" src="../../../../wp-content/plugins/download-attachments/images/ext/'.$type.'.gif" alt="'.$type.'">';
									echo '</a></center></td>';
								}
							}
						}
					echo '</tr>';
				}
			}
		}
	}

}
function get_banner(){
    global $wpdb;
	$request2 = "select * from $wpdb->posts where post_type='banner'";
	$categorys2 = $wpdb->get_results($request2);
	return $categorys2;
}

function get_categories_all(){
	$args_archive2= array(
						'type' => 'post',
						'parent' => '',
						'orderby' => 'description',
						'order' => 'ASC',
						'hide_empty' => 0,
						'hierarchical' => 1,
						'exclude' => '',
						'include' => '',
						'number' => '',
						'taxonomy' => 'category',
						'pad_counts' => false
					);
	$get_categories_all=get_categories($args_archive2);
	return $get_categories_all;
}
function get_parent0(){
	$args_archive_parent0= array(
						'type' => 'post',
						'parent' => 0,
						'orderby' => 'term_id',
						'order' => 'ASC',
						'hide_empty' => false,
						'hierarchical' => 1,
						'exclude' => '',
						'include' => '',
						'number' => '10',
						'taxonomy' => 'category',
						'pad_counts' => false
					);
	$cates = get_categories($args_archive_parent0);
	return $cates;
}
function get_level($i=1){
	global $cat;
	$c = get_category($cat); 
	while($c -> category_parent){  
		$c = get_category($c -> category_parent); 
		$i=$i+1;
	}
	return $i;
}
function get_level_pro($id){
	$i=1;
//	global $cat;
	$c = get_category($id); 
	while($c -> category_parent){  
		$c = get_category($c -> category_parent); 
		$i=$i+1;
	}
	return $i;
}
function table_template($arg){
	if(get_houzhui()=="_zh"){
		if($arg==1){
			echo '<tr class="template"><th><center>上載日期</center></th><th><center>全部下載</center></th></tr>';
		}else if($arg==2){
			echo '<tr class="template"><th><center>單元</center></th><th style="width:80%;"><center>主題</center></th><th><center></center></th></tr>';
		}else if($arg==3){
			echo '<tr class="template"><th><center>單元</center></th><th style="width:70%;"><center>議題</center></th><th><center>互動遊戲</center></th></tr>';
		}else if($arg==4){
			echo '<tr class="template"><th><center>主題</center></th><th><center>工作紙</center></th><th><center>移動學習</center></th></tr>';
		}else if($arg==5){
			echo '<tr class="template"><th><center>新聞</center></th><th><center>連結</center></th></tr>';
		}else if($arg==6){
			echo '<tr class="template"><th><center>項目</center></th><th><center>檔案</center></th></tr>';
		}else if($arg==7){
			$arg=false;
		}
	}else{
		if($arg==1){
			echo '<tr class="template"><th><center>Upload Date</center></th><th><center>Download All</center></th></tr>';
		}else if($arg==2){
			echo '<tr class="template"><th><center>Module</center></th><th style="width:70%;"><center>Theme</center></th><th><center></center></th></tr>';
		}else if($arg==3){
			echo '<tr class="template"><th><center>Module</center></th><th style="width:65%;"><center>Issue</center></th><th><center>Interactive Game</center></th></tr>';
		}else if($arg==4){
			echo '<tr class="template"><th><center>Title</center></th><th><center>Worksheet</center></th><th><center>Mobile Learning</center></th></tr>';
		}else if($arg==5){
			echo '<tr class="template"><th><center>News</center></th><th><center>Link</center></th></tr>';
		}else if($arg==6){
			echo '<tr class="template"><th><center>Item</center></th><th><center>File</center></th></tr>';
		}else if($arg==7){
			$arg=false;
		}
	}
	return $arg;
}
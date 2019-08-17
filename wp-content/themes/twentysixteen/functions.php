<?php
/**
 * Twenty Sixteen functions and definitions
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
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

/**
 * Twenty Sixteen only works in WordPress 4.4 or later.
 */
if (version_compare($GLOBALS['wp_version'], '4.4-alpha', '<')) {
    require get_template_directory() . '/inc/back-compat.php';
}

if (!function_exists('twentysixteen_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     *
     * Create your own twentysixteen_setup() function to override in a child theme.
     *
     * @since Twenty Sixteen 1.0
     */
    function twentysixteen_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentysixteen
         * If you're building a theme based on Twenty Sixteen, use a find and replace
         * to change 'twentysixteen' to the name of your theme in all the template files
         */
        load_theme_textdomain('twentysixteen');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for custom logo.
         *
         *  @since Twenty Sixteen 1.2
         */
        add_theme_support('custom-logo', array(
            'height' => 240,
            'width' => 240,
            'flex-height' => true,
        ));

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(1200, 9999);

        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'twentysixteen'),
            'social' => __('Social Links Menu', 'twentysixteen'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        /*
         * Enable support for Post Formats.
         *
         * See: https://codex.wordpress.org/Post_Formats
         */
        add_theme_support('post-formats', array(
            'aside',
            'image',
            'video',
            'quote',
            'link',
            'gallery',
            'status',
            'audio',
            'chat',
        ));

        /*
         * This theme styles the visual editor to resemble the theme style,
         * specifically font, colors, icons, and column width.
         */
        add_editor_style(array('css/editor-style.css', twentysixteen_fonts_url()));

        // Load regular editor styles into the new block-based editor.
        add_theme_support('editor-styles');

        // Load default block styles.
        add_theme_support('wp-block-styles');

        // Add support for responsive embeds.
        add_theme_support('responsive-embeds');

        // Add support for custom color scheme.
        add_theme_support('editor-color-palette', array(
            array(
                'name' => __('Dark Gray', 'twentysixteen'),
                'slug' => 'dark-gray',
                'color' => '#1a1a1a',
            ),
            array(
                'name' => __('Medium Gray', 'twentysixteen'),
                'slug' => 'medium-gray',
                'color' => '#686868',
            ),
            array(
                'name' => __('Light Gray', 'twentysixteen'),
                'slug' => 'light-gray',
                'color' => '#e5e5e5',
            ),
            array(
                'name' => __('White', 'twentysixteen'),
                'slug' => 'white',
                'color' => '#fff',
            ),
            array(
                'name' => __('Blue Gray', 'twentysixteen'),
                'slug' => 'blue-gray',
                'color' => '#4d545c',
            ),
            array(
                'name' => __('Bright Blue', 'twentysixteen'),
                'slug' => 'bright-blue',
                'color' => '#007acc',
            ),
            array(
                'name' => __('Light Blue', 'twentysixteen'),
                'slug' => 'light-blue',
                'color' => '#9adffd',
            ),
            array(
                'name' => __('Dark Brown', 'twentysixteen'),
                'slug' => 'dark-brown',
                'color' => '#402b30',
            ),
            array(
                'name' => __('Medium Brown', 'twentysixteen'),
                'slug' => 'medium-brown',
                'color' => '#774e24',
            ),
            array(
                'name' => __('Dark Red', 'twentysixteen'),
                'slug' => 'dark-red',
                'color' => '#640c1f',
            ),
            array(
                'name' => __('Bright Red', 'twentysixteen'),
                'slug' => 'bright-red',
                'color' => '#ff675f',
            ),
            array(
                'name' => __('Yellow', 'twentysixteen'),
                'slug' => 'yellow',
                'color' => '#ffef8e',
            ),
        ));

        // Indicate widget sidebars can use selective refresh in the Customizer.
        add_theme_support('customize-selective-refresh-widgets');
    }
endif; // twentysixteen_setup
add_action('after_setup_theme', 'twentysixteen_setup');

/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_content_width()
{
    $GLOBALS['content_width'] = apply_filters('twentysixteen_content_width', 840);
}

add_action('after_setup_theme', 'twentysixteen_content_width', 0);

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_widgets_init()
{
    register_sidebar(array(
        'name' => __('Sidebar', 'twentysixteen'),
        'id' => 'sidebar-1',
        'description' => __('Add widgets here to appear in your sidebar.', 'twentysixteen'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Content Bottom 1', 'twentysixteen'),
        'id' => 'sidebar-2',
        'description' => __('Appears at the bottom of the content on posts and pages.', 'twentysixteen'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Content Bottom 2', 'twentysixteen'),
        'id' => 'sidebar-3',
        'description' => __('Appears at the bottom of the content on posts and pages.', 'twentysixteen'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'twentysixteen_widgets_init');

if (!function_exists('twentysixteen_fonts_url')) :
    /**
     * Register Google fonts for Twenty Sixteen.
     *
     * Create your own twentysixteen_fonts_url() function to override in a child theme.
     *
     * @return string Google fonts URL for the theme.
     * @since Twenty Sixteen 1.0
     *
     */
    function twentysixteen_fonts_url()
    {
        $fonts_url = '';
        $fonts = array();
        $subsets = 'latin,latin-ext';

        /* translators: If there are characters in your language that are not supported by Merriweather, translate this to 'off'. Do not translate into your own language. */
        if ('off' !== _x('on', 'Merriweather font: on or off', 'twentysixteen')) {
            $fonts[] = 'Merriweather:400,700,900,400italic,700italic,900italic';
        }

        /* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
        if ('off' !== _x('on', 'Montserrat font: on or off', 'twentysixteen')) {
            $fonts[] = 'Montserrat:400,700';
        }

        /* translators: If there are characters in your language that are not supported by Inconsolata, translate this to 'off'. Do not translate into your own language. */
        if ('off' !== _x('on', 'Inconsolata font: on or off', 'twentysixteen')) {
            $fonts[] = 'Inconsolata:400';
        }

        if ($fonts) {
            $fonts_url = add_query_arg(array(
                'family' => urlencode(implode('|', $fonts)),
                'subset' => urlencode($subsets),
            ), 'https://fonts.googleapis.com/css');
        }

        return $fonts_url;
    }
endif;

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_javascript_detection()
{
    echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}

add_action('wp_head', 'twentysixteen_javascript_detection', 0);

/**
 * Enqueues scripts and styles.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_scripts()
{
    // Add custom fonts, used in the main stylesheet.
    wp_enqueue_style('twentysixteen-fonts', twentysixteen_fonts_url(), array(), null);

    // Add Genericons, used in the main stylesheet.
    wp_enqueue_style('genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.4.1');

    // Theme stylesheet.
    wp_enqueue_style('twentysixteen-style', get_stylesheet_uri());

    // Theme block stylesheet.
    wp_enqueue_style('twentysixteen-block-style', get_template_directory_uri() . '/css/blocks.css', array('twentysixteen-style'), '20181230');

    // Load the Internet Explorer specific stylesheet.
    wp_enqueue_style('twentysixteen-ie', get_template_directory_uri() . '/css/ie.css', array('twentysixteen-style'), '20160816');
    wp_style_add_data('twentysixteen-ie', 'conditional', 'lt IE 10');

    // Load the Internet Explorer 8 specific stylesheet.
    wp_enqueue_style('twentysixteen-ie8', get_template_directory_uri() . '/css/ie8.css', array('twentysixteen-style'), '20160816');
    wp_style_add_data('twentysixteen-ie8', 'conditional', 'lt IE 9');

    // Load the Internet Explorer 7 specific stylesheet.
    wp_enqueue_style('twentysixteen-ie7', get_template_directory_uri() . '/css/ie7.css', array('twentysixteen-style'), '20160816');
    wp_style_add_data('twentysixteen-ie7', 'conditional', 'lt IE 8');

    // Load the html5 shiv.
    wp_enqueue_script('twentysixteen-html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3');
    wp_script_add_data('twentysixteen-html5', 'conditional', 'lt IE 9');

    wp_enqueue_script('twentysixteen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20160816', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    if (is_singular() && wp_attachment_is_image()) {
        wp_enqueue_script('twentysixteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array('jquery'), '20160816');
    }

    wp_enqueue_script('twentysixteen-script', get_template_directory_uri() . '/js/functions.js', array('jquery'), '20181230', true);

    wp_localize_script('twentysixteen-script', 'screenReaderText', array(
        'expand' => __('expand child menu', 'twentysixteen'),
        'collapse' => __('collapse child menu', 'twentysixteen'),
    ));
}

add_action('wp_enqueue_scripts', 'twentysixteen_scripts');

/**
 * Enqueue styles for the block-based editor.
 *
 * @since Twenty Sixteen 1.6
 */
function twentysixteen_block_editor_styles()
{
    // Block styles.
    wp_enqueue_style('twentysixteen-block-editor-style', get_template_directory_uri() . '/css/editor-blocks.css', array(), '20181230');
    // Add custom fonts.
    wp_enqueue_style('twentysixteen-fonts', twentysixteen_fonts_url(), array(), null);
}

add_action('enqueue_block_editor_assets', 'twentysixteen_block_editor_styles');

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 * @since Twenty Sixteen 1.0
 *
 */
function twentysixteen_body_classes($classes)
{
    // Adds a class of custom-background-image to sites with a custom background image.
    if (get_background_image()) {
        $classes[] = 'custom-background-image';
    }

    // Adds a class of group-blog to sites with more than 1 published author.
    if (is_multi_author()) {
        $classes[] = 'group-blog';
    }

    // Adds a class of no-sidebar to sites without active sidebar.
    if (!is_active_sidebar('sidebar-1')) {
        $classes[] = 'no-sidebar';
    }

    // Adds a class of hfeed to non-singular pages.
    if (!is_singular()) {
        $classes[] = 'hfeed';
    }

    return $classes;
}

add_filter('body_class', 'twentysixteen_body_classes');

/**
 * Converts a HEX value to RGB.
 *
 * @param string $color The original color, in 3- or 6-digit hexadecimal form.
 * @return array Array containing RGB (red, green, and blue) values for the given
 *               HEX code, empty array otherwise.
 * @since Twenty Sixteen 1.0
 *
 */
function twentysixteen_hex2rgb($color)
{
    $color = trim($color, '#');

    if (strlen($color) === 3) {
        $r = hexdec(substr($color, 0, 1) . substr($color, 0, 1));
        $g = hexdec(substr($color, 1, 1) . substr($color, 1, 1));
        $b = hexdec(substr($color, 2, 1) . substr($color, 2, 1));
    } else if (strlen($color) === 6) {
        $r = hexdec(substr($color, 0, 2));
        $g = hexdec(substr($color, 2, 2));
        $b = hexdec(substr($color, 4, 2));
    } else {
        return array();
    }

    return array('red' => $r, 'green' => $g, 'blue' => $b);
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array $size Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 * @since Twenty Sixteen 1.0
 *
 */
function twentysixteen_content_image_sizes_attr($sizes, $size)
{
    $width = $size[0];

    if (840 <= $width) {
        $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';
    }

    if ('page' === get_post_type()) {
        if (840 > $width) {
            $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
        }
    } else {
        if (840 > $width && 600 <= $width) {
            $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 61vw, (max-width: 1362px) 45vw, 600px';
        } elseif (600 > $width) {
            $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
        }
    }

    return $sizes;
}

add_filter('wp_calculate_image_sizes', 'twentysixteen_content_image_sizes_attr', 10, 2);

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails
 *
 * @param array $attr Attributes for the image markup.
 * @param int $attachment Image attachment ID.
 * @param array $size Registered image size or flat array of height and width dimensions.
 * @return array The filtered attributes for the image markup.
 * @since Twenty Sixteen 1.0
 *
 */
function twentysixteen_post_thumbnail_sizes_attr($attr, $attachment, $size)
{
    if ('post-thumbnail' === $size) {
        if (is_active_sidebar('sidebar-1')) {
            $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 60vw, (max-width: 1362px) 62vw, 840px';
        } else {
            $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px';
        }
    }
    return $attr;
}

//add_filter( 'wp_get_attachment_image_attributes', 'twentysixteen_post_thumbnail_sizes_attr', 10 , 3 );


function get_houzhui()
{
    $host = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $houzhui = '_zh';
    $position = strpos($host, '_en');
    $position2 = strpos($host, '/en');
    $position2_1 = strpos($host, '?lang=en');


    $position3 = strpos($host, '_zh');
    $position4 = strpos($host, '/zh');
    $position4_1 = strpos($host, '?lang=zh');

    if ($position || $position2 ||$position2_1) {
        $houzhui = '_en';
    }
    if ($position3 || $position4 || $position4_1) {
        $houzhui = '_zh';
    }
    return $houzhui;
}

//为分类排序


function term_id_sort($args)
{
    foreach ($args as $v) {
        $sort[] = $v->term_id;
    }
    sort($sort);
    foreach ($sort as $v2) {
        foreach ($args as $v3) {
            if ($v2 == $v3->term_id) {
                $new_args[] = $v3;
            }
        }
    }
    if (isset($new_args)) {
        return $new_args;

    } else {
        return false;
    }
}

function get_canshu()
{
    $host = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $last_count = strrpos($host, '?');

    $canshu = substr($host, $last_count + 1);
    $fensan = explode("&", $canshu);
    foreach ($fensan as $v) {
        $new_arr2 = explode('=', $v);
        $new_arr[$new_arr2[0]] = $new_arr2[1];
    }
    return $new_arr;
}

function curPageURL()
{
    $pageURL = 'http';
    if (isset($_SERVER["HTTPS"])) {
        if ($_SERVER["HTTPS"] == "on") {
            $pageURL .= "s";
        }
    }

    $pageURL .= "://";

    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"];
    }
    return $pageURL;
}

function show_category()
{
    global $wpdb;
    $request = "SELECT $wpdb->terms.term_id, name FROM $wpdb->terms ";
    $request .= " LEFT JOIN $wpdb->term_taxonomy ON $wpdb->term_taxonomy.term_id = $wpdb->terms.term_id ";
    $request .= " WHERE $wpdb->term_taxonomy.taxonomy = 'category' ";
    $request .= " ORDER BY term_id asc";
    $categorys = $wpdb->get_results($request);
    foreach ($categorys as $category) { //调用菜单
        $output = '<span>' . $category->name . "(<em>" . $category->term_id . '</em>)</span>';
        echo $output;
    }
}

function show_banners()
{
    global $wpdb;
    $request = "select * from $wpdb->posts where post_type='banner' and post_status='publish'";
    $categorys = $wpdb->get_results($request);
    foreach ($categorys as $v) {

        if ($v->menu_order == 0) {
            $category_new[$v->ID]['id'] = $v;
            $sql2 = "select * from $wpdb->posts where post_parent='" . $v->ID . "'";
            $res2 = $wpdb->get_results($sql2);
            if (isset($res2)) {
                $category_new[$v->ID]['img_src'] = $res2[0]->guid;
            }
        } else {
            $category_new[$v->menu_order]['id'] = $v;
            $category_new[$v->menu_order]['img_src'] = $v;
            $sql2 = "select * from $wpdb->posts where post_parent='" . $v->ID . "'";
            $res2 = $wpdb->get_results($sql2);
            if (isset($res2)) {
                $category_new[$v->menu_order]['img_src'] = $res2[0]->guid;
            }
        }
    }
    ksort($category_new);
    return $category_new;
}

function huanyuming($jiuwangzhi, $xinwangzhi)
{
    $str = "UPDATE wp_term_taxonomy SET description = replace(description, '$jiuwangzhi', '$xinwangzhi');
	UPDATE wp_options SET option_value = replace(option_value, '$jiuwangzhi', '$xinwangzhi');";
    return $str;
}

function icon_lv3_first()
{
    $cate_list_lv1 = cate_list_lv1();
    foreach ($cate_list_lv1 as $ak => $av) {
        $names[$av->name] = $av->term_id;
        $arr[$av->term_id]['image_src'] = description_split($av->description)['image_url'];
    }


    $arr_new = cate_list_lv2_m();
    foreach ($arr_new as $k => $v) {
        if (is_array($v)) {
            foreach ($v as $k1 => $v2) {
                if (!isset($arr[$names[$k]]['link'])) {
                    $arr[$names[$k]]['link'] = $v2;
                }
            }
        } else {
            $arr[$names[$k]]['link'] = $v;
        }
    }
    return $arr;
}

function search($args)
{
//	wp_get_post_parent_id(
    preg_match_all('/[\s]/', $args, $arr);
    global $wpdb;
    if (!preg_match_all('/[\s]/', $args)) {
        if (isset($args)) {
            $request1 = "select * from $wpdb->terms where term_group=0 and name like '%" . $args . "%'";
            $request2 = "select * from $wpdb->posts where post_type='post' and post_title like '%" . $args . "%'";
        } else {
            return false;
        }
    } else {
        foreach ($arr as $v) {
            foreach ($v as $v2) {
                $content[] = explode($v2, $args);
            }
        }
        $w_sql1 = '';
        $w_sql2 = '';
        $quchong = array();
        if (isset($content)) {
            foreach ($content as $words) {
                foreach ($words as $word) {
                    if (isset($word)) {
                        if (!isset($quchong[$word])) {
                            $w_sql1 .= " and name like '%" . $word . "%'";
                            $w_sql2 .= " and post_title like '%" . $word . "%'";
                        }
                        $quchong[$word] = $word;
                    }
                }
            }
            if (isset($w_sql1)) {
                $request1 = "select * from $wpdb->terms where term_group=0" . $w_sql1;
                if (isset($w_sql2)) {
                    $request2 = "select * from $wpdb->posts where post_type='post'" . $w_sql2;
                }
            } else {
                return false;
            }
        }
    }
    if (isset($request1)) {
        $categorys = $wpdb->get_results($request1);
        foreach ($categorys as $v) {
            $posts = get_posts("category=" . $v->term_id . "&order=ASC&numberposts=1000");
            foreach ($posts as $vv) {
                $attach = get_attached_media('', $vv->ID);
                if (isset($attach)) {
                    $categorysf[$v->term_id] = $v;
                }
            }
        }

        if (isset($request2)) {
            $categorys2 = $wpdb->get_results($request2);
            foreach ($categorys2 as $cv) {
                $content = get_the_category($cv->ID);
                foreach ($content as $co) {
                    $categorysf[$co->term_id]->term_id = $co->term_id;
                    $categorysf[$co->term_id]->name = $co->name;
                }
            }
        }

        foreach ($categorysf as $v1) {
            $posts = get_posts("category=" . $v1->term_id . "&order=ASC&numberposts=1000");
            foreach ($posts as $vv) {
                $attach[$vv->ID] = get_attached_media('', $vv->ID);
                foreach ($attach[$vv->ID] as $k15 => $v15) {
                    $new_arrr[$vv->ID][$k15] = $v15->guid;
                }

                if (isset($new_arrr[$vv->ID])) {
                    $categorysf[$v1->term_id]->child[$vv->post_title] = $new_arrr[$vv->ID];
                } else {
                    $categorysf[$v1->term_id]->child[$vv->post_title] = '';
                }
            }
        }

        foreach ($categorysf as $v) {
            if (get_houzhui() == "_zh") {
                if (preg_match('/[\x{4e00}-\x{9fa5}]/u', $v->name) > 0) {
                    $cates = get_all_cate_parent($v->term_id);
                    krsort($cates);
                    $titles = "";
                    $nbsp = "&nbsp;";
                    foreach ($cates as $k16 => $v16) {
                        for ($i = 0; $i <= $k16; $i++) {
                            $nbsp .= "&nbsp;";
                        }
                        if ($v16 != 'No categories') {
                            $titles .= $v16 . '<br>' . $nbsp . '->';
                        }
                    }
                    echo '<tr><th class="entry-title" ><a href="' . get_category_link(get_the_category($v->term_id)->parent) . '" rel="bookmark" style="color:green;">' . $titles . $v->name . '</a></th></tr>';
                    if (isset($v->child)) {
                        foreach ($v->child as $title => $guid) {
                            echo '<tr>';
                            echo '<td class="entry-title"><a href="#" rel="bookmark">' . $title . '</a></td>';
                            $i = 0;
                            foreach ($guid as $gu) {
                                $i++;
                                $type = substr($gu, -3);
                                if ($i <= 4) {
                                    if (isset($gu)) {
                                        if ($type == "ocx") {
                                            $type = 'doc';
                                        }
                                        echo '<td style="color:red;"><center><a href="' . $gu . '" download="">';
                                        echo '<img class="attachment-icon" src="../../../../wp-content/plugins/download-attachments/images/ext/' . $type . '.gif" alt="' . $type . '">';
                                        echo '</a></center></td>';
                                    }
                                }
                            }
                            echo '</tr>';
                        }
                    }
                }
            } else {
                if (!preg_match('/[\x{4e00}-\x{9fa5}]/u', $v->name) > 0) {
                    $cates = get_all_cate_parent($v->term_id);
                    krsort($cates);
                    $titles = "";
                    $nbsp = "&nbsp;";
                    foreach ($cates as $k16 => $v16) {
                        for ($i = 0; $i <= $k16; $i++) {
                            $nbsp .= "&nbsp;";
                        }
                        if ($v16 != 'No categories') {
                            $titles .= $v16 . '<br>' . $nbsp . '->';
                        }
                    }
                    echo '<tr><th class="entry-title" ><a href="' . get_category_link(get_the_category($v->term_id)->parent) . '" rel="bookmark" style="color:green;">' . $titles . $v->name . '</a></th></tr>';
                    if (isset($v->child)) {
                        foreach ($v->child as $title => $guid) {
                            echo '<tr>';
                            echo '<td class="entry-title"><a href="#" rel="bookmark">' . $title . '</a></td>';
                            $i = 0;
                            foreach ($guid as $gu) {
                                $i++;
                                $type = substr($gu, -3);
                                if ($i <= 4) {
                                    if (isset($gu)) {
                                        if ($type == "ocx") {
                                            $type = 'doc';
                                        }
                                        echo '<td style="color:red;"><center><a href="' . $gu . '" download="">';
                                        echo '<img class="attachment-icon" src="../../../../wp-content/plugins/download-attachments/images/ext/' . $type . '.gif" alt="' . $type . '">';
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
    } else {
        return false;
    }
}

function search_v2($args)
{
    preg_match_all('/[\s]/', $args, $arr);
    global $wpdb;
    if (!preg_match_all('/[\s]/', $args)) {
        if (isset($args)) {
            $request1 = "select * from $wpdb->terms where term_group=0 and name like '%" . $args . "%'";
            $request2 = "select * from $wpdb->posts where post_type='post' and post_title like '%" . $args . "%'";
        } else {
            return false;
        }
        $quchong[$args] = $args;
    } else {
        foreach ($arr as $v) {
            foreach ($v as $v2) {
                $content[] = explode($v2, $args);
            }
        }
        $w_sql1 = '';
        $w_sql2 = '';
        $quchong = array();
        if (isset($content)) {
            foreach ($content as $words) {
                foreach ($words as $word) {
                    if (isset($word)) {
                        if (!isset($quchong[$word])) {
                            $w_sql1 .= " and name like '%" . $word . "%'";
                            $w_sql2 .= " and post_title like '%" . $word . "%'";
                        }
                        $quchong[$word] = $word;
                    }
                }
            }
            if (isset($w_sql1)) {
                $request1 = "select * from $wpdb->terms where term_group=0" . $w_sql1;
                if (isset($w_sql2)) {
                    $request2 = "select * from $wpdb->posts where post_type='post'" . $w_sql2;
                }
            } else {
                return false;
            }
        }
    }
    if (isset($request1)) {
        $categorys = $wpdb->get_results($request1);

        foreach ($categorys as $v) {
            $posts = get_posts("category=" . $v->term_id . "&order=ASC&numberposts=1000");
            foreach ($posts as $vv) {
                $attach = get_attached_media('', $vv->ID);
                if (isset($attach)) {
                    $categorysf[$v->term_id] = $v;
                }
            }
        }

        if (isset($request2)) {
            $categorys2 = $wpdb->get_results($request2);
            foreach ($categorys2 as $cv) {
                $content = get_the_category($cv->ID);
                foreach ($content as $co) {
                    $categorysf[$co->term_id]->term_id = $co->term_id;
                    $categorysf[$co->term_id]->name = $co->name;
                    $categorysf[$co->term_id]->public = '1';
                }
            }
        }

        foreach ($categorysf as $v1) {
            if (!isset($v1->slug)) {
                $posts = get_posts("category=" . $v1->term_id . "&order=ASC&numberposts=1000");
                foreach ($posts as $vv) {
                    foreach ($categorys2 as $v_s) {
                        if ($v_s->ID == $vv->ID) {
                            $attach[$vv->ID] = get_attached_media('', $vv->ID);
                            foreach ($attach[$vv->ID] as $k15 => $v15) {
                                $new_arrr[$vv->ID][$k15] = $v15->guid;
//								$new_arrr[$vv->ID][$k15]=$v15->guid;
                            }
                            if (isset($new_arrr[$vv->ID])) {
                                $categorysf[$v1->term_id]->child[$vv->post_title] = $new_arrr[$vv->ID];
                                $categorysf[$v1->term_id]->child2[$vv->ID] = $new_arrr[$vv->ID];
                            } else {
                                $categorysf[$v1->term_id]->child[$vv->post_title] = '';
                                $categorysf[$v1->term_id]->child2[$vv->ID] = '';
                            }
                        }
                    }
                }
            }
        }

        foreach ($categorysf as $v) {
            if (get_houzhui() == "_zh") {
                if (preg_match('/[\x{4e00}-\x{9fa5}]/u', $v->name) > 0) {
                    chongfubufen($v, $titles, $quchong);
                }
            } else {
                if (!preg_match('/[\x{4e00}-\x{9fa5}]/u', $v->name) > 0) {
                    chongfubufen($v, $titles, $quchong);
                }
            }

        }

        return $categorys;
    } else {
        return false;
    }

}

function get_all_cate_parent($term_id)
{
    $c = get_category($term_id);
    $i = 0;
    while ($c->category_parent) {
        $i++;

        $c = get_category($c->category_parent); //获取上级分类
        $arr[$i]['name'] = $c->name;
        $arr[$i]['id'] = $c->term_id;
    }
    if (!isset($arr)) {
        $c = get_category($term_id);
        $arr[0]['name'] = $c->name;
        $arr[0]['id'] = $c->id;
        return $arr;
    } else {
        return $arr;
    }
}

function keys_highlight($o, $quchon)
{
    foreach ($quchon as $v) {
        $o = str_replace($v, '<label style="background:lightyellow;cursor: pointer;">' . $v . '</label>', $o);
    }
    return $o;
}

function get_dictionary()
{
    global $wp_query;
    $cate_ID = get_query_var('cat');
    $all_cate_args = get_all_cate_args();
    foreach ($all_cate_args as $v) {
//		$all_cate_order[$v['term_id']]=(int)$v['term_id']+$v['order'];
        if (isset($v['dictionary'])) {
            $new_cate_bool3[$v['term_id']]['dictionary'] = $v['dictionary'];
        }
    }
    return $new_cate_bool3;
}

function chongfubufen($v, $titles, $quchong)
{
    $cates = get_all_cate_parent($v->term_id);
    krsort($cates);
    $titles = "";
    $id = 0;
    $nbsp = "&nbsp;";

    foreach ($cates as $k16 => $v16) {
        for ($i = 0; $i <= $k16; $i++) {
            $nbsp .= "&nbsp;";
        }
        if ($v16 != 'No categories') {
            $titles .= $v16['name'] . '<br>' . $nbsp . '->';
        }
        if (count($cates) > 1) {
            $id = $v16['id'];
        } elseif (count($cates) == 1) {
            $aaa = get_category($v->term_id);
            if ($aaa->category_parent == 0) {
                $id = get_term_children(get_term_children($v->term_id, 'category')[0], 'category')[0];
            } else {
                $id = get_term_children($v->term_id, 'category')[0];
            }
        }
    }
    global $wp_query;
    $cate_ID = get_query_var('cat');
    if ($v->term_id == get_category($cate_ID)->term_id) {
        if (get_dictionary()[$v->term_id]) {
            if (isset($v->child)) {
                foreach ($v->child as $title => $guid) {
                    echo '<tr>';
                    foreach ($v->child2 as $post_id => $guid2) {
                        if ($guid == $guid2) {
                            $attch_data = get_post_meta($post_id)['glossary_stroke'][0];
                            echo '<td class="entry-title"><a class="wulianjie" word-data="' . $attch_data . '">' . keys_highlight($title, $quchong) . '</a></td>';
                            if ($guid == "") {
                                break;
                            }
                        }
                    }
                    echo '</tr>';
                }
            }
        }
    } else {
        if (!isset(get_dictionary()[get_category($cate_ID)->term_id])) {
            echo '<tr><th class="entry-title" ><a href="' . get_category_link($id) . '" rel="bookmark" style="color:green;" >' . keys_highlight($titles . $v->name, $quchong) . '</a></th></tr>';
            if (isset($v->child)) {
                foreach ($v->child as $title => $guid) {
                    echo '<tr>';
                    if (empty_replace($guid)) {
                        echo '<td class="entry-title"><a href="' . get_category_link($id) . '" class="wulianjie">' . keys_highlight($title, $quchong) . '</a></td>';
                    } else {
                        echo '<td class="entry-title"><a href="' . get_category_link($id) . '" rel="bookmark">' . keys_highlight($title, $quchong) . '</a></td>';
                    }
                    $i = 0;
                    foreach ($guid as $gu) {
                        $i++;
                        $type = substr($gu, -3);
                        if ($i <= 4) {
                            if (isset($gu)) {
                                if ($type == "ocx") {
                                    $type = 'doc';
                                }

                                echo '<td style="color:red;"><center><a href="' . $gu . '" download="">';
                                echo '<img class="attachment-icon" src="../../../../wp-content/plugins/download-attachments/images/ext/' . $type . '.gif" alt="' . $type . '">';
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

function get_banner()
{
    global $wpdb;
    $request2 = "select * from $wpdb->posts where post_type='banner'";
    $categorys2 = $wpdb->get_results($request2);
    return $categorys2;
}

function get_categories_all()
{
    $args_archive2 = array(
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
    $get_categories_all = get_categories($args_archive2);
    return $get_categories_all;
}

function get_parent0()
{
    $args_archive_parent0 = array(
        'type' => 'post',
        'parent' => 0,
        'orderby' => 'term_id',
        'order' => 'ASC',
        'hide_empty' => false,
        'hierarchical' => 1,
        'exclude' => '',
        'include' => '',
        'number' => '100',
        'taxonomy' => 'category',
        'pad_counts' => false
    );
    $cates = get_categories($args_archive_parent0);
    return $cates;
}

function get_level($i = 1)
{
    global $cat;
    $c = get_category($cat);
    while ($c->category_parent) {
        $c = get_category($c->category_parent);
        $i = $i + 1;
    }
    return $i;
}

function get_level_pro($id)
{
    $i = 1;
//	global $cat;
    $c = get_category($id);
    while ($c->category_parent) {
        $c = get_category($c->category_parent);
        $i = $i + 1;
    }
    return $i;
}

function getNavigationBar()
{
    $cates = get_categories_all();
    $cateATree = array();
    $parentObjectArray = get_parent0();

    foreach ($parentObjectArray as $parentObject) {
        $cateATree[$parentObject->term_id]['name'] = $parentObject->name;
    }
    foreach ($cates as $cate) {
        if (get_level_pro($cate->term_id) == 2) {
            $cateATree[$cate->parent]['name'] = trim(get_category($cate->parent)->name);
            $cateATree[$cate->parent]['child'][$cate->term_id]['name'] = trim($cate->name);
        }
        if (get_level_pro($cate->term_id) == 3) {
            $cateATree[get_category($cate->parent)->parent]['child'][get_category($cate->parent)->term_id]['name']= trim(get_category($cate->parent)->name);
            $cateATree[get_category($cate->parent)->parent]['child'][get_category($cate->parent)->term_id]['child'][$cate->term_id]['name'] = trim($cate->name);
        }
    }

    return $cateATree;

}
//获取某个分类下的所有子分类
function my_list_categories( $args = '' ) {
    $defaults = array(
        'child_of'            => 0,
        'current_category'    => 0,
        'depth'               => 0,
        'echo'                => 1,
        'exclude'             => '',
        'exclude_tree'        => '',
        'feed'                => '',
        'feed_image'          => '',
        'feed_type'           => '',
        'hide_empty'          => 1,
        'hide_title_if_empty' => false,
        'hierarchical'        => true,
        'order'               => 'ASC',
        'orderby'             => 'name',
        'separator'           => '<br />',
        'show_count'          => 0,
        'show_option_all'     => '',
        'show_option_none'    => __( 'No categories' ),
        'style'               => 'list',
        'taxonomy'            => 'category',
        'title_li'            => __( 'Categories' ),
        'use_desc_for_title'  => 1,
    );

    $r = wp_parse_args( $args, $defaults );

    if ( !isset( $r['pad_counts'] ) && $r['show_count'] && $r['hierarchical'] )
        $r['pad_counts'] = true;

    // Descendants of exclusions should be excluded too.
    if ( true == $r['hierarchical'] ) {
        $exclude_tree = array();

        if ( $r['exclude_tree'] ) {
            $exclude_tree = array_merge( $exclude_tree, wp_parse_id_list( $r['exclude_tree'] ) );
        }

        if ( $r['exclude'] ) {
            $exclude_tree = array_merge( $exclude_tree, wp_parse_id_list( $r['exclude'] ) );
        }

        $r['exclude_tree'] = $exclude_tree;
        $r['exclude'] = '';
    }

    if ( ! isset( $r['class'] ) )
        $r['class'] = ( 'category' == $r['taxonomy'] ) ? 'categories' : $r['taxonomy'];

    if ( ! taxonomy_exists( $r['taxonomy'] ) ) {
        return false;
    }

    $categories = get_categories( $r );

    return $categories;
}
function emptyAdjustment($canshu)
{
    if (empty($canshu)) {
        return '';
    } else {
        return $canshu[0];
    }
}

function get_post_info_byname($name)
{
    return array(
        'id' => get_cat_ID($name),
        'post' => get_posts("category=" . get_cat_ID($name) . "&order=ASC&numberposts=1000"),
        'cate' => get_category(get_cat_ID($name)),
    );
}

function c7sky_get_nav_menu_tree($location) {
    $locations = get_nav_menu_locations();
    echo '<pre>';
    var_dump($locations);
    die;
    $menu_id = $locations[$location] ;
    $menu_object = wp_get_nav_menu_object($menu_id);
    $menu_items = wp_get_nav_menu_items($menu_object->term_id);

    _wp_menu_item_classes_by_context($menu_items);

    $menu = array();
    $submenus = array();

    foreach ($menu_items as $m) {
        $m->children = array();

        if (!$m->menu_item_parent) {
            $menu[$m->ID] = $m;
        } else {
            $submenus[$m->ID] = $m;

            if (isset($menu[$m->menu_item_parent])) {
                $menu[$m->menu_item_parent]->children[$m->ID] = &$submenus[$m->ID];
            } else {
                $submenus[$m->menu_item_parent]->children[$m->ID] = $submenus[$m->ID];
            }
        }
    }

    return $menu;
}
add_filter('widget_tag_cloud_args', 'twentysixteen_widget_tag_cloud_args');

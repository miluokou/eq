<?php
class pw{

var $plugins = array('emoticons','preview','table','textpattern');

public function __construct() {
				 //register_activation_hook( TYPEAHEAD_DIR, array( $this, 'activate' ) );//安装插件时添加设置
				 //register_uninstall_hook(TYPEAHEAD_DIR, array( $this, 'delete_options' ) );//删除插件时删除设置
				 //register_deactivation_hook( TYPEAHEAD_DIR, array( $this, 'delete_options' ) ); 
				 //add_filter('plugin_action_links',array( $this, 'settings_link' ),10,2);
				 add_action('init', array( $this, 'init' )); 
}

public function init(){ 
    if ( !current_user_can('edit_posts') && !current_user_can('edit_pages') ) {   
        return;   
    }   
    if ( get_user_option('rich_editing') == 'true' ) {   
        add_filter( 'mce_external_plugins', array( $this, 'add_plugins' )); //添加插件  
		add_filter('mce_buttons_3', array( $this, 'add_buttons' )); //添加按钮到编辑器的第三行
		add_filter('tiny_mce_before_init', array( $this, 'set_tinymce' )); //改变tinymce默认参数
        } 
}

public function add_plugins($plugins){
	foreach ($this->plugins as $plugin_name) {
	$plugins[$plugin_name] = plugin_dir_url( PW_FILE ).'plugins/'.$plugin_name.'/plugin.min.js'; //myadvert按钮的js路径
	}
   return $plugins;  
}

public function add_buttons($buttons) {
$buttons[] = 'backcolor';
$buttons[] = 'fontsizeselect';
$buttons[] = 'fontselect';
$buttons[] = 'styleselect';
$buttons[] = 'emoticons';
$buttons[] = 'table';
$buttons[] = 'wp_code';
$buttons[] = 'preview';
return $buttons;
}

public function set_tinymce($settings)
{
$settings['font_formats']= 
'宋体=宋体;微软雅黑=微软雅黑;黑体=黑体;仿宋=仿宋_GB2312;楷体=楷体_GB2312;隶书=隶书;幼圆=幼圆;Open Sans=Open Sans;Andale Mono=andale mono,times;Arial=arial,helvetica,sans-serif;Arial Black=arial black,avant garde;Book Antiqua=book antiqua,palatino;Comic Sans MS=comic sans ms,sans-serif;Courier New=courier new,courier;Georgia=georgia,palatino;Helvetica=helvetica;Impact=impact,chicago;Symbol=symbol;Tahoma=tahoma,arial,helvetica,sans-serif;Terminal=terminal,monaco;Times New Roman=times new roman,times;Trebuchet MS=trebuchet ms,geneva;Verdana=verdana,geneva;Webdings=webdings;Wingdings=wingdings,zapf dingbats';
$settings['fontsize_formats']='8px 10px 12px 14px 16px 18px 20px 24px 32px 36px';
return $settings;
}

}
?>
<?php
/*
Plugin Name: Pure Writing
Plugin URI: http://binaryoung.com/pure-writing
Description: 增强Wordpress的编辑器功能，让你享受纯粹的写作。
Author: young
Version: 0.1
Author URI: http://binaryoung.com/
*/

//CODE IS POETRY

define('PW_PLUGIN_VERSION', '0.1');
define('PW_FILE', __FILE__);
define('PW_DIR', __DIR__);

spl_autoload_register('pw_load_class'); 

function pw_load_class($classname){
if($classname=='pw' && is_admin()){
 include_once(plugin_dir_path(PW_FILE).'inc/main.php');
}
}

if (is_admin()) {
 $pw = new pw();
}

?>
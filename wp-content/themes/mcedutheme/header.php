<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <title>北京石垠控股有限公司</title>
    <link rel="stylesheet" type="text/css" href="/Web/css/style.css">
    <link rel="stylesheet" href="/Web/css/uikit.css">
    <link rel="stylesheet" href="/Web/css/style1.css">
    <link rel="stylesheet" href="/Web/css/Bxsilder.css"/>
	<link rel="stylesheet" href="/Web/css/about.css"/>
	<link rel="stylesheet" href="/Web/css/news.css"/>
	<link rel="stylesheet" href="/Web/css/viewpoint.css"/>
	<link rel="stylesheet" href="/Web/css/member.css"/>
	 <script src="/Web/js/jquery.js"></script>
    <script src="/Web/js/Bxslider.js"></script>
    <script type="text/javascript">try {
        Typekit.load();
    } catch (e) {
    }</script>
    
	
<script src="/Web/js/uikit.js"></script>
<script src="/Web/js/jquery.wookmark.js"></script>
   
</head>
<div class="head">
  <nav class="m-navbar uk-navbar uk-navbar-attached">
    <div class="m-login"> 
      <div class="Contentbox">
        <div id="con_one_1" class="hover"> </div>
        <div id="con_one_2" style="display:none"> </div>
      </div>
      <script>
function setTab(name,cursel,n){
	for(i=1;i<=n;i++){
	var menu=document.getElementById(name+i);
	var con=document.getElementById("con_"+name+"_"+i);
	menu.className=i==cursel?"hover":"";
	con.style.display=i==cursel?"block":"none";
	}
}
</script> 
    </div>
    <div> <a href="/" class="m-logo"> <img src="/Web/img/logo.png"/> </a>
      <ul class="m-navbar-nav uk-navbar-nav uk-navbar-flip uk-visible-large">
      	<?php 
      		$list = cate_list_lv2_m();	
      		$i=1;
      		foreach($list as $title => $array){
      			if(is_array($array)){
      			echo '<li class="m-parent-'.$i.' uk-parent" data-uk-dropdown> 
      					<a href="javascript:void(0);">'.$title.'</a>
			          	 <div class="m-dropdown-navbar uk-dropdown uk-dropdown-navbar">
			             <div class="uk-container uk-container-center">
		           	   <ul class="uk-subnav">';
		           	   	foreach($array as $t2 =>$link){
		           	   		echo '<li><a href="'.$link.'">'.$t2.'</a></li>';
		           	   	}
	              echo ' </ul>
			            </div>
			          </div>
			        </li>';
      			}
      			$i++;
      		}
      		?>
       
      </ul>
      <button type="button" class="m-navbar-toggle uk-navbar-toggle uk-hidden-large" data-uk-offcanvas="{target:'.m-navbar-toggle-menu'}" style=" "> <span class="m-navbar-toggle-icon"></span> <span class="m-navbar-toggle-icon"></span> <span class="m-navbar-toggle-icon"></span> </button>
    </div>
  </nav>
</div>
	<body>

	<div class="m-navbar-toggle-menu uk-offcanvas">
<div class="uk-offcanvas-bar uk-offcanvas-bar-flip uk-offcanvas-bar-show">
    <ul class="uk-nav uk-nav-parent-icon uk-nav-offcanvas" data-uk-nav>
	      <li><a href="/">首页</a></li>
	      <?php 
	      	$j=1;
      		foreach($list as $title => $array){
      			if(is_array($array)){
      				if(!empty($title)){
		      			echo '<li class="uk-parent"> 
				      	<a href="javascript:void(0);">'.$title.'</a>
				        <ul class="uk-nav-sub">';
					           	   	foreach($array as $t2 =>$link){
					           	   		if(!empty($link)){
					           	   			echo '<li><a href="'.$link.'">'.$t2.'</a></li>';
					           	   		}
					           	   	}
				              echo ' </ul>
				     	 </li>';
		      			}
		      		}
      			$j++;
      		}
	      	?>
	     
	    </ul>

  </div>
	  <div class="uk-offcanvas-bar uk-offcanvas-bar-flip" style="display: none;">
	    <ul class="uk-nav uk-nav-parent-icon uk-nav-offcanvas" data-uk-nav>
	      <li><a href="/index">首页</a></li>
	      <?php 
	      	$j=1;
      		foreach($list as $title => $array){
      			if(is_array($array)){
      				if(!empty($title)){
		      			echo '<li class="uk-parent"> 
				      	<a href="javascript:void(0);">'.$title.'</a>
				        <ul class="uk-nav-sub">';
					           	   	foreach($array as $t2 =>$link){
					           	   		if(!empty($link)){
					           	   			echo '<li><a href="'.$link.'">'.$t2.'</a></li>';
					           	   		}
					           	   	}
				              echo ' </ul>
				     	 </li>';
		      			}
		      		}
      			$j++;
      		}
	      	?>
	     
	    </ul>
	  </div>
	</div>

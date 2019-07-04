<?php
		$cate_ID=get_query_var('cat');
		$level = get_level_pro($cate_ID);
		$canshu = get_canshu();
		if(is_category($cate_ID) && $level==2){
			$posts = get_posts( "category=".$cate_ID."&order=ASC&numberposts=1000");
		}
		
		echo '<div class="news">	<div id="NewsList" style="min-height: 0px;">';
		$nb = count($posts);
		$page = ceil($nb/5);
		if(empty($canshu['page'])){
			$limit_max = 5;
			$limit_min= 0;
		}else{
			$limit_max = $canshu['page']*5;
			$limit_min = $canshu['page']*5-5;
		}
			$j=1;
			foreach($posts as $p){
				$attachments2 = get_post_meta($p->ID);
				if(isset($attachments2['sub_des'])){
					$des = $attachments2['sub_des'][0];
				}else{
					$des='';
				}
				if(isset($attachments2['sub_image'])){
					$sub_image = $attachments2['sub_image'][0];
				}else{
					$sub_image='/Public/uploads/5a3ccbc3b9157.jpg';
				}
				
				if(isset($attachments2['lv2_id'])){
					$lv2_id = $attachments2['lv2_id'][0];
				}else{
					$lv2_id='';
				}
				if($j<$limit_max && $j>=$limit_min){
					echo '<dl class="animated fadeInRight">
			        	<a href="/system/media?id=204"><img src="'.$sub_image.'"></a>
			        	<dt><span>2018-06-22</span><a href="/system/media?id='.$p->ID.'">'.$p->post_title.'</a></dt>
			            <dd>'.$des.'</dd>
			        </dl>';
				}
	        		$j++;
			}
		echo '</div>
		 <div class="c"></div>
        <div class="page-pagination">';
        	if($canshu['page']==1){
        			echo '<a class="jp-first jp-disabled">首页</a>
        	<a  class="jp-previous jp-disabled">上一页</a>';
        	}else{
        			echo '<a href="?page=1" class="jp-first">首页</a>
        	<a href=?page='.($canshu['page']-1).' class="jp-previous">上一页</a>';
        	}
        
        	
       	for($i=1;$i<=$page;$i++){
       			if(empty($canshu['page'])){
       				$canshu['page']=1;
       			}
       			if($canshu['page'] == $i){
		       		echo '<a href="?page='.$i.'" class="jp-current">'.$i.'</a>';
			    }else{
		       		echo '<a href="?page='.$i.'">'.$i.'</a>';
			    }
       	}
       	if($canshu['page']==$page){
        			echo '<a class="jp-next jp-disabled">下一页</a>
        <a class="jp-last jp-disabled">尾页</a>';
        	}else{
        			echo '<a href=?page='.($canshu['page']+1).' class="jp-next">下一页</a>
        				<a href=?page='.$page.' class="jp-first">尾页</a>';
        	}
       	echo  '</div>
        <div class="c"></div>
		</div>';
		
?>
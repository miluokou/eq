<?php  
			$cate_ID=get_query_var('cat');
			$args = get_all_cate_args();
			$canshu = get_canshu();
//			var_dump($canshu);
			if(empty($canshu['id'])){
				if(isset($args[$cate_ID]['template'])){
	//				var_dump($args[$cate_ID]['template']);
	//				if($args[$cate_ID]['template']=='resposibility'){
	    					get_template_part($args[$cate_ID]['template']);
	//				}
				}else{
					if(isset($posts[0])){
						echo $posts[0]->post_content;
					}else{
						echo '即将上线';
					}
				}
			}else{
				 $post = get_post($canshu['id'], ARRAY_A);
				 if($post['post_status']='publish'){
				 	echo '<div class="news_n">
				    		<div class="news_nh">'.$post['post_title'].'	<p>日期  '.$post['post_date'].'</p></div>
				        <div class="news_nl">
				        		'.$post['post_content'].'
				        	</div>	
				    </div>';
				 }
			}
		?>
   
<style>
	.news_nl span{
		font-family: 微软雅黑,'Microsoft YaHei'; 
		text-indent: 2em;
	}
</style>
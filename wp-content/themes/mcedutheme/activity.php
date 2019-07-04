<?php
	$cate_ID=get_query_var('cat');
		$level = get_level_pro($cate_ID);
		$canshu = get_canshu();
		if(is_category($cate_ID) && $level==2){
			$posts = get_posts( "category=".$cate_ID."&order=ASC&numberposts=1000");
		}
					echo '<div class="activity">';
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
								$sub_image='';
							}
							if(isset($attachments2['page'])){
								$page = $attachments2['page'][0];
							}else{
								$page=false;
							}
							if(isset($attachments2['lv2_id'])){
								$lv2_id = $attachments2['lv2_id'][0];
							}else{
								$lv2_id='';
							}
//							if($page=='lv2' && empty($canshu['lv2_id']) && empty($canshu['lv2_id'])){}else{
//							 	if(!empty($canshu['lv2_id'])){
//								 	if($canshu['lv2_id'] ==$lv2_id){
//								 				var_dump($p->ID);
//								 				var_dump($p->post_title);
	
								 			if(empty($html1)){
								 				$unset_id=$p->ID;
//												var_dump($p);
								 				$html1='<a href="/news/activity?id=23"><img src="'.$sub_image.'"></a>
									            <dl>
									            <a href="/news/activity?id='.$p->ID.'">
									            	<dt>'.$p->post_title.'</dt>
									                <dd>
									                <span></span>
									                '.$des.'
									                </dd>
									            </a>
									            </dl>';
								 			}else if($unset_id!=$p->ID){
								 				$html = '<li>
											            		<a href="/news/activity?id='.$p->ID.'">
											            			<img src="'.$sub_image.'">
											            			<p>'.$p->post_title.'</p>
											            		</a>
											            	</li>';
								 			}
//								 	}
//							 	}
//							 }
						    unset($attachments2['sub_des']);
						    unset($attachments2['sub_image']);
						    unset($html_bool[$p->ID]);
						}
					echo '</div>';
					
					if(empty($html1) && empty($html)){
					}else{
						echo '<div class="activity">
							<div class="activity_l">'.$html1.'</div>
							 <div class="activity_z" id="NewsList" style="min-height: 435px;">
        	<ul class="animated fadeInRight">'.$html.'</ul>
        </div></div>';
					}

?>

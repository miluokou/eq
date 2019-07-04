<?php
		$cate_ID=get_query_var('cat');
		$level = get_level_pro($cate_ID);
		$canshu = get_canshu();
		if(is_category($cate_ID) && $level==2){
			$posts = get_posts( "category=".$cate_ID."&order=ASC&numberposts=1000");
		}
					echo '<div class="society">';
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
							if($page=='lv2' && empty($canshu['lv2_id']) && empty($canshu['lv2_id'])){
								echo '<dl><a href="?lv2_id='.$p->ID.'"><img src="'.$sub_image.'"></a><a href="?lv2_id='.$p->ID.'">
						            <div>
						        	<dt>'.$p->post_title.'<span></span></dt>
						            <dd>'.$des.'</dd>
						            </div>
						            </a>
						        </dl>';
							 }else{
							 	if(!empty($canshu['lv2_id'])){
								 	if($canshu['lv2_id'] ==$lv2_id){
								 			if(empty($html1)){
								 				$unset_id=$p->ID;
								 				$html1='<a href="/about/resposibility_n?id=12"><img src="/Public/uploads/592641125c3dc.jpg"></a>
									            <dl>
									            <a href="/about/resposibility_n?id=12">
									            	<dt>签署“少年硅谷”战略合作协议</dt>
									                <dd>
										                <span></span>
										                11月30日，汉富控股与中国下一代教育基金会就双方共同推出的“少年硅谷”公益项目，在厦门举行战略合作协议签约仪式。                
									                </dd>
									            </a>
									            </dl>';
								 			}else if($unset_id!=$p->ID){
								 				$html .= '<li><a href="?id='.$p->ID.'">
									            		<img src="'.$sub_image.'">
									            			<p>'.$p->post_title.'</p>
									            		</a>
									            </li>';	
								 			}
								 	}
							 	}
							 }
						    unset($attachments2['sub_des']);
						    unset($attachments2['sub_image']);
						    unset($html_bool[$p->ID]);
						}
					echo '</div>';
					
					if(empty($html1) && empty($html)){
					}else{
						echo '<div class="activity">
							<div class="activity_l">'.$html1.'</div>
							 <div class="activity_z">'.$html.'</div>
						</div>';
					}
				
?>
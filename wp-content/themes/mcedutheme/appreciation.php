<?php
		$cate_ID=get_query_var('cat');
		$level = get_level_pro($cate_ID);
		$canshu = get_canshu();
		if(is_category($cate_ID) && $level==2){
			$posts = get_posts( "category=".$cate_ID."&order=ASC&numberposts=1000");
		}
		echo '<div class="appreciation">
        <div class="appre_z">';
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
//			        echo ' <li class="animated fadeInRight">
//      		<a href="/member/member_n?id='.$p->ID.'"><img src="'.$sub_image.'"></a>
//      	<dl>
//      	<dt><p><a href="/member/member_n?id='.$p->ID.'">'.$p->post_title.'</a></p><span></span></dt>
//          <dd>'.$des.'</dd>
//      	</dl>
//      	</li>';
				if($j==2){
					echo '<div class="app_dl" id="app_dz">
		            <img src="'.$sub_image.'">
		            <div class="app_p">
		            	<a href="/member/appreciation?id='.$p->ID.'">
		            	<div class="app_dt"><p>'.$p->post_title.'</p><span></span></div>
		                <div class="app_dd">'.$des.'</div>
		                </a>
		            </div>
		            </div>';
				}else{
					echo '<div class="app_dl">
		            <img src="'.$sub_image.'">
		            <div class="app_p">
		            	<a href="/member/appreciation?id='.$p->ID.'">
		            	<div class="app_dt"><p>'.$p->post_title.'</p><span></span></div>
		                <div class="app_dd">'.$des.'</div>
		                </a>
		            </div>
		            </div>';
				}
        			
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
<div class="appreciation" style="display: none;">
        <div class="appre_z">
        	<!---->
           	<div class="app_dl">
            <img src="/Public/uploads/58771a4a15428.jpg">
            <div class="app_p">
            	<a href="/member/appreciation?id=34">
            	<div class="app_dt"><p>投资咨询</p><span></span></div>
                <div class="app_dd">诺远甄选顶级优势资源，与国内外知名机构合作，为会员提供优质、专业的咨询服务，包括投资方案咨询及制定、个人及企业税务筹划等，满足会员在企业发展及私人咨询方面的需求。</div>
                </a>
            </div>
            </div>
            
            
            <div class="app_dl" id="app_dz">
            <img src="/Public/uploads/58771a1a67869.jpg">
            <div class="app_p">
            	<a href="/member/appreciation?id=33">
            	<div class="app_dt"><p>家族服务</p><span></span></div>
                <div class="app_dd">诺远集合全球顶级财富管理专家组成团队，提供真正私人化的家族财富管理方案，管理和保护家族的财富和广泛的商业利益，以全球资产配置方案满足客户不同阶段的财务所需并实现财富的积累与保障。</div>
                </a>
            </div>
            </div>
            <div class="app_dl">
            <img src="/Public/uploads/587719de788d4.jpg">
            <div class="app_p">
            	<a href="/member/appreciation?id=32">
            	<div class="app_dt"><p>健康管理</p><span></span></div>
                <div class="app_dd">诺远除了帮您实现财富增值，也始终关爱您和家人的健康，为此诺远精选国内外顶尖医疗机构，全情全力为会员提供各生命周期的健康保障服务，满足高净值会员自身及家庭成员身体健康的需求。
</div>
                </a>
            </div>
            </div>
            <div class="app_dl">
            <img src="/Public/uploads/587719b218fa7.jpg">
            <div class="app_p">
            	<a href="/member/appreciation?id=31">
            	<div class="app_dt"><p>海外服务</p><span></span></div>
                <div class="app_dd">诺远甄选顶级优势资源，与国内外知名顶尖教育、移民机构合作，为会员提供优质海外服务。</div>
                </a>
            </div>
            </div>
            <div class="app_dl">
            <img src="/Public/uploads/5877197dd848e.jpg">
            <div class="app_p">
            	<a href="/member/appreciation?id=30">
            	<div class="app_dt"><p>高端定制</p><span></span></div>
                <div class="app_dd">诺远联合顶级的服务机构，为会员提供高端定制游、奢侈品及艺术品定制以及全球采酒服务，凸显会员尊贵身份与高端品味，畅享华美尚品生活。</div>
                </a>
            </div>
            </div>
           <!---->
        </div>
    </div>
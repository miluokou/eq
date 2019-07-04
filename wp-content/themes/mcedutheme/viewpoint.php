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
					if(empty($html1)){
		 				$unset_id=$p->ID;
//		 				$html1='	<div class="news_l"><dl class="animated fadeInRight">
//				        	<a href="/news/news_n?id=204"><img src="'.$sub_image.'"></a>
//				        	<dt><span>2018-06-22</span><a href="/news/news_n?id='.$p->ID.'">'.$p->post_title.'</a></dt>
//				            <dd>'.$des.'</dd>
//				        </dl></div>';
				        $html1='	<div class="news_l">
					        		<dl>
					            	<dt>
					             <p><span>2017-05-18</span><a href="/viewpoint/viewpoint_n?id='.$p->ID.'">'.$p->post_title.'</a></p></dt>
					                <dd><a href="/viewpoint/viewpoint_n?id=91"><img src="'.$sub_image.'"></a>
					                  '.$des.'</dd>
					            </dl>
					    </div>';
				        echo $html1;
		 			}else if($unset_id!=$p->ID){
		 				echo '<dl class="animated fadeInRight">
				        	<a href="/news/news_n?id=204"><img src="'.$sub_image.'"></a>
				        	<dt><span>2018-06-22</span><a href="/news/news_n?id='.$p->ID.'">'.$p->post_title.'</a></dt>
				            <dd>'.$des.'</dd>
				        </dl>';
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
<div class="news" style="display: none;">
    	<div class="news_l">
        		<dl>
            	<dt>
             <p><span>2017-05-18</span><a href="/viewpoint/viewpoint_n?id=91">经济日报：“一带一路”倡议成世界合作蓝图</a></p></dt>
                <dd><a href="/viewpoint/viewpoint_n?id=91"><img src="/Public/uploads/591d07ab97a03.jpg"></a>
                  首先，论坛的成功举行和联合公报的发布，标志着“一带一路”倡议由中国的愿景和行动，上升为世界各方共同推进的合作蓝图，“这具有阶段性里程碑的意义”。                </dd>
            </dl>
    </div>
    	<div id="NewsList" style="min-height: 0px;">
		<dl class="animated fadeInRight">
        		<a href="/viewpoint/viewpoint_n?id=194"><img src="/Public/uploads/5aaf210db7b30.jpg"></a>
        		<dt><span>2018-03-19</span><a href="/viewpoint/viewpoint_n?id=194">作为投资人，今年政府工作报告你读懂了哪些重要信息？</a></dt>
            	<dd>2018年是全面贯彻党的十九大精神的开局之年，是改革开放40周年。...</dd>
        	</dl><dl class="animated fadeInRight">
        		<a href="/viewpoint/viewpoint_n?id=193"><img src="/Public/uploads/5aaf1f6e1eaa7.jpg"></a>
        		<dt><span>2018-03-19</span><a href="/viewpoint/viewpoint_n?id=193">两会热议资管新规“后资管时代”的格局与转变</a></dt>
            	<dd>资管机构的机遇与转变...</dd>
        	</dl><dl class="animated fadeInRight">
        		<a href="/viewpoint/viewpoint_n?id=192"><img src="/Public/uploads/5aaf1e887976c.jpg"></a>
        		<dt><span>2018-03-19</span><a href="/viewpoint/viewpoint_n?id=192">两会再发“去杠杆、严监管”信号 汉富控股董事长韩学渊：金融需要更高效创新的运作方式</a></dt>
            	<dd>2017年以来，广义货币M2的增速持续放缓，“去杠杆”对社会资金层面的影响不断显现。...</dd>
        	</dl><dl class="animated fadeInRight">
        		<a href="/viewpoint/viewpoint_n?id=121"><img src="/Public/uploads/5951c07f8a9c0.jpg"></a>
        		<dt><span>2017-06-23</span><a href="/viewpoint/viewpoint_n?id=121">人民日报：A股正式纳入MSCI 资本市场开放又迈一大步</a></dt>
            	<dd>历经多年努力，中国A股终于得到了MSCI指数的“入场券”，这意味着中国资本市场的开放又迈出一大步，意味着将有更多的境外投资者投资中国的A股。...</dd>
        	</dl><dl class="animated jp-hidden">
        		<a href="/viewpoint/viewpoint_n?id=92"><img src="/Public/uploads/591d11ceee7c3.jpg"></a>
        		<dt><span>2017-05-18</span><a href="/viewpoint/viewpoint_n?id=92">人民日报：推动“一带一路”建设行稳致远</a></dt>
            	<dd>“一带一路”建设植根于历史，但面向未来；“一带一路”源自中国，但属于世界。...</dd>
        	</dl><dl class="animated jp-hidden">
        		<a href="/viewpoint/viewpoint_n?id=91"><img src="/Public/uploads/591d07a730ca6.jpg"></a>
        		<dt><span>2017-05-18</span><a href="/viewpoint/viewpoint_n?id=91">经济日报：“一带一路”倡议成世界合作蓝图</a></dt>
            	<dd>首先，论坛的成功举行和联合公报的发布，标志着“一带一路”倡议由中国的愿景和行动，上升为世界各方共同推进的合作蓝图，“这具有阶段性里程碑的意义”。...</dd>
        	</dl><dl class="animated jp-hidden">
        		<a href="/viewpoint/viewpoint_n?id=70"><img src="/Public/uploads/5886c2c3b3090.jpg"></a>
        		<dt><span>2017-01-24</span><a href="/viewpoint/viewpoint_n?id=70">让金融发展“绿”起来</a></dt>
            	<dd>在二十国集团(G20)领导人杭州峰会上，中国首次将绿色金融列入G20议题，倡议发起G20绿色金融研究小组，并形成了G20绿色金融综合报告。...</dd>
        	</dl><dl class="animated jp-hidden">
        		<a href="/viewpoint/viewpoint_n?id=69"><img src="/Public/uploads/5886b7b58b382.jpg"></a>
        		<dt><span>2017-01-24</span><a href="/viewpoint/viewpoint_n?id=69">中国发展是世界的机遇  融入经济全球化</a></dt>
            	<dd>“这是最好的时代，也是最坏的时代。”习近平主席在世界经济论坛2017年年会开幕式的主旨演讲中，引用英国作家狄更斯的名言来描述当前我们生活的这样一个矛盾的世界。...</dd>
        	</dl><dl class="animated jp-hidden">
        		<a href="/viewpoint/viewpoint_n?id=66"><img src="/Public/uploads/5886b8409c9fb.jpg"></a>
        		<dt><span>2017-01-24</span><a href="/viewpoint/viewpoint_n?id=66">推进供给侧结构性改革要处理好四个重大关系</a></dt>
            	<dd>必须把改善供给侧结构作为主攻方向，从生产端入手，提高供给体系质量和效率，扩大有效和中高端供给。...</dd>
        	</dl><dl class="animated jp-hidden">
        		<a href="/viewpoint/viewpoint_n?id=25"><img src="/Public/uploads/5886c34fda9cd.jpg"></a>
        		<dt><span>2016-09-02</span><a href="/viewpoint/viewpoint_n?id=25">让金融力量促进包容增长</a></dt>
            	<dd>9月1日，在二十国集团（G20）杭州峰会新闻中心正式启用后的第二场新闻发布会上，中国人民银行副行长易纲就国际国内热点财金问题进行了介绍。 ...</dd>
        	</dl>        </div>
         <div class="c"></div>
        <div class="page-pagination"><a class="jp-first jp-disabled">首页</a><a class="jp-previous jp-disabled">上一页</a><a class="jp-current">1</a><span class="jp-hidden">...</span><a href="#" class="">2</a><span class="jp-hidden">...</span><a>3</a><a class="jp-next">下一页</a><a class="jp-last">尾页</a></div>
        <div class="c"></div>
    </div>
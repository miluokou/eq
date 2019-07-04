<?php
		$cate_ID=get_query_var('cat');
		$level = get_level_pro($cate_ID);
		$canshu = get_canshu();
		if(is_category($cate_ID) && $level==2){
			$posts = get_posts( "category=".$cate_ID."&order=ASC&numberposts=1000");
		}
		echo '<div class="column">
			<div class="column_l">
    	<img src="/Web/images/cdfe.jpg">
    </div>
			<ul>';
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
//					echo '<li>
//					<a href="/viewpoint/capital_n?id='.$p->ID.'">
//						<img src="'.$sub_image.'">
//						</a></li>';
					echo '<li>
				        	<a href="/viewpoint/column_n?id='.$p->ID.'">
				        		<img src="'.$sub_image.'"></a>
				        	<dl>
				        	<dt>
				        		<p><a href="/viewpoint/column_n?id='.$p->ID.'">'.$p->post_title.'</a></p><span></span></dt>
				            <dd>'.$des.'</dd>
				        	</dl>
				        	</li>';
//					echo '<dl class="animated fadeInRight">
//			        	<a href="/news/news_n?id=204"><img src="'.$sub_image.'"></a>
//			        	<dt><span>'.$p->post_date.'</span><a href="/news/news_n?id='.$p->ID.'">'.$p->post_title.'</a></dt>
//			            <dd>'.$des.'</dd>
//			        </dl>';
				}
	        		$j++;
			}
		echo '  </ul>
		<a href="#top" id="ftop" style="display: none;"><img src="/Web/images/fdgr.jpg"></a>
    		</div>
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
<div class="column" style="display: none;">
    <div class="column_l">
    	<img src="/Web/images/cdfe.jpg">
    </div>
      <ul>
      	<li>
        	<a href="/viewpoint/column_n?id=115">
        		<img src="/Public/uploads/59425f71a4e27.jpg"></a>
        	<dl>
        	<dt>
        		<p><a href="/viewpoint/column_n?id=115">比美联储加息更可怕的一件事来了，和你的钱袋子息息相关！</a></p><span></span></dt>
            <dd>今天凌晨，耶伦大妈的美联储如约加息25个基点，至此联邦基准利率已经上调到了1%-1.25%。在连续三次上调以后，中美之间的基准利率水平差距已经极度缩小，离我们的一年期定期存款基准利率1.5%只有一线之隔。...</dd>
        	</dl>
        	</li>
        	
        	<li>
        	<a href="/viewpoint/column_n?id=114"><img src="/Public/uploads/59425ed7be275.jpg"></a>
        	<dl>
        	<dt><p><a href="/viewpoint/column_n?id=114">现在买什么不是“错”？！</a></p><span></span></dt>
            <dd>过去几年，可谓是中国投资者的春天，股市、债市、楼市你方唱罢我登场，投资者们享受了丰盛的财富盛宴。人们喜欢用以诗人般的浪漫情怀憧憬未来，为自己设计出梦幻般的前程；但更多的时候，明天未必比今天更好。...</dd>
        	</dl>
        	</li>
        	
        	<li>
        	<a href="/viewpoint/column_n?id=49"><img src="/Public/uploads/587c6b38468f7.jpg"></a>
        	<dl>
        	<dt><p><a href="/viewpoint/column_n?id=49">关于楼市，中央给出了新说法！</a></p><span></span></dt>
            <dd>12月9日，中央政治局会议专门部署2017年经济工作。一般情况下，中央政治局会议是为中央经济工作会议定调，因而备受瞩目。本次会议直接点了“房地产”的名字，原文为：“加快研究建立符合国情、适应市场规律的房地产平稳健康发展长效机制。”...</dd>
        	</dl>
        	</li><li>
        	<a href="/viewpoint/column_n?id=27"><img src="/Public/uploads/5876e9159b915.jpg"></a>
        	<dl>
        	<dt><p><a href="/viewpoint/column_n?id=27">爹妈的养老金准备入市了，这意味着什么？</a></p><span></span></dt>
            <dd>人社部新闻发言人李忠近日表示，人社部会同财政部、社保基金理事会一起制定的委托投资合同已经印发，年内将优选出第一批养老基金管理机构，正式启动投资运营...</dd>
        	</dl>
        	</li>      </ul>
<a href="#top" id="ftop" style="display: none;"><img src="/Web/images/fdgr.jpg"></a>
    </div>
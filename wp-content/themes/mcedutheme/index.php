<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
	get_header();
	$as =show_banners();
	$test_mulu =  constant("test_mulu");
	if(!empty($img_host)){
		$host=$test_mulu;
	}else{
		$host='';
	}
	foreach($as as $pv){
		$banner_id_zh[]=$pv->ID;
		$banner_id_en[]=$pv->ID;
	}
	$as =show_banners();
	$i=0;
	foreach($as as $pv){
		$i++;
		$bans[$i]['a_url']=$pv['id']->post_content;
		$bans[$i]['img_src']=$pv['img_src'];
	}
?>

<div class="banner">
    <ul class="bxslider">
      <!--<li>
      	<img class="bannl" src="<?php echo esc_url( get_template_directory_uri() ); ?>/Web/img/004.jpg"/>
      	<img class="bannz" src="<?php echo esc_url( get_template_directory_uri() ); ?>/Web/img/0014.jpg"/>
      </li>-->
      <?php 
      	for($i=0;$i<=count($bans);$i++){
      		if(!empty($bans[$i]['img_src'])){
//    			 var_dump($bans[$i]['img_src']);
//    			$url =  sub_str($bans[$i]['img_src'],-3);
      			$aaa = substr($bans[$i]['img_src'],0,-4);
      			$aaa1 = substr($bans[$i]['img_src'],-4);
      			$m_img= $aaa.'-768x400'.$aaa1;
      			echo '<li>
      					<a href="'.$bans[$i]['a_url'].'" target="_blank">
		      	<img class="bannl" src="'.$bans[$i]['img_src'].'"/>
		      	<img class="bannz" src="'.$m_img.'"/></a>
		      </li>';
      		}
      	}
      	?>
    </ul>
</div>
<div class="c"></div>
<div class="index">
    <div class="index_l">
        <div class="index_ld">
            <div class="inhl" data-scroll-reveal="enter from the top over 1s">
                <a href="/about/introduction/?post_fl_all=1">
                    ABOUT NUOYUAN
                    <p>关于石垠</p>
                    <span></span>
                </a>
            </div>
            <div class="index_ll" data-scroll-reveal="enter from the top over 1s">
                <div class="index_lll">
                    石垠资产依托核心团队在金融服务领域20余年的深厚积淀，<br>通过金融创新，为广大财富群体提供优质、完善的财富管理及资产配置服务，与客户共成长。
                </div>
                <div class="index_llz">
                    Relying on the core team's more than 20 years experience in the financial service field, by our financial innovation,
                    Nuoyuan Holdings provides qualified and complete wealth management plans and asset allocation services to the vast number of the wealth holders.
                    We grow together with our customers.
                </div>
            </div>
        </div>
        <div class="index_lm">
            <div class="inhl">
                <a href="/about/introduction/?post_fl_all=1">
                    ABOUT NUOYUAN
                    <p>关于石垠</p>
                    <span></span>
                </a>
            </div>
            <div class="index_ll">
                <div class="index_lll">
                    石垠控股依托核心团队在金融服务领域20余年的深厚积淀，通过金融创新，为广大财富群体提供优质、完善的财富管理及资产配置服务，与客户共成长。
                </div>
                <div class="index_llz">
                    Relying on the core team's more than 20 years experience in the financial service field, by our financial innovation, Nuoyuan Holdings provides qualified and complete wealth management plans and asset allocation services to the vast number of the wealth holders. We grow together with our customers.
                </div>
            </div>
        </div>
        <div class="index_lz">
            <dl id="inlz1" data-scroll-reveal="after 0.1s enter bottom over 1s">
                <dt></dt>
                <dd>
                    <p>MODEL</p>
                    线上线下结合<br/>创新服务模式
                </dd>
            </dl>
            <div class="index_lzimg" data-scroll-reveal="after 0.2s enter bottom over 1s">
                <img src="/Web/img/asd1.png"/>
            </div>
            <dl id="inlz2" data-scroll-reveal="after 0.3s enter bottom over 1s">
                <dt></dt>
                <dd>
                    <p>TEAM</p>
                    核心团队金融服务领域20余年深厚积淀
                </dd>
            </dl>
            <div class="index_lzimg" data-scroll-reveal="after 0.4s enter bottom over 1s">
                <img src="/Web/img/asd1.png"/>
            </div>
            <dl id="inlz3" data-scroll-reveal="after 0.5s enter bottom over 1s">
                <dt></dt>
                <dd>
                    <p id="indp">MINDSET</p>
                    秉承“稳健安全阳光透明”的理念
                </dd>
            </dl>
            <div class="index_lzimg" data-scroll-reveal="after 0.6s enter bottom over 1s">
                <img src="/Web/img/asd2.png"/>
            </div>
            <dl id="inlz4" data-scroll-reveal="after 0.7s enter bottom over 1s">
                <dt></dt>
                <dd>
                    <p>PARTNER</p>
                    忠实财富<br/>管理伙伴
                </dd>
            </dl>
        </div>
    </div><!--1-->
    <div class="c"></div>
    <div class="index_z">
        <div class="index_ld">
            <div class="inhl" id="inh2" data-scroll-reveal="move 50px enter left over 1s no reset">
                <a href="/about/resposibility/?post_fl_all=1">
                    RESPONSIBILITY
                    <p>社会责任</p>
                    <span></span>
                </a>
            </div>
            <div class="index_zl" data-scroll-reveal="move 50px enter right over 1s no reset">
                <div class="index_zll">
                    石垠在自身发展的同时，积极履行社会责任，<br/>
                    通过 “少年硅谷”等社会责任项目的开展，助力科技创新及创新型人才的培养。
                </div>
                <div class="index_zlz">
                    Nuoyuan actively engaged in social responsibility. Through Youth SiliconValley and other social
                    responsibility projects,<br>Nuoyuan devoted its efforts to support technology innovation and
                    innovative talents development.
                </div>
            </div>
        </div>
        <div class="index_lm">
            <div class="inhl" id="inh2">
                <a href="/about/resposibility/?post_fl_all=1">
                    RESPONSIBILITY
                    <p>社会责任</p>
                    <span></span>
                </a>
            </div>
            <div class="index_zl">
                <div class="index_zll">
                    石垠在自身发展的同时，积极履行社会责任，<br/>
                    通过 “少年硅谷”等社会责任项目的成立，助力科技创新及创新型人才的培养。
                </div>
                <div class="index_zlz">
                    Nuoyuan actively engaged in social responsibility. Through Youth SiliconValley and other social
                    responsibility projects,<br>Nuoyuan devoted its efforts to support technology innovation and
                    innovative talents development.
                </div>
            </div>
        </div>
        <div class="c"></div>
        <div class="index_zz">
            <ul>
                <li><img src="/Web/img/zxc1.png"/></li>
                <li><img src="/Web/img/zxc3.png"/></li>
                <li><img src="/Web/img/zxc2.png"/></li>
            </ul>
        </div>
        <div class="c"></div>
        <div class="index_zb">
            <dl>
                <img src="/Web/img/dfgr1.jpg"/>
                <div class="asb">
                    <dt>
                        <a href="/about/resposibility/">少年硅谷公益项目</a>
                    <p>NAOMI GRAIN</p>
                    </dt>
                    <dd>
                        <span></span>
                        <p>由石垠控股与中国下一代教育基金会共同发起，通过资助全国中小学设立机器人实验室、培训师资力量助力,青少年科技教育。</p>
                        <a href="/about/resposibility/">MORE</a>
                    </dd>
                </div>
            </dl>
            <dl>
                <img src="/Web/img/dfgr2.jpg"/>
                <div class="asb">
                    <dt>
                        <a href="/about/resposibility/">诺米粒运动俱乐部</a>
                    <p>NAOMI GRAIN</p>
                    </dt>
                    <dd>
                        <span></span>
                        <p>诺米粒运动俱乐部由石垠控股发起，对员工和所有社会人士开放，旨在鼓励和倡导健康、活力、快乐的生活方式。</p>
                        <a href="/about/resposibility/">MORE</a>
                    </dd>
                </div>
            </dl>
            <dl>
                <img src="/Web/img/dfgr.jpg"/>
                <div class="asb">
                    <dt>
                        <a href="/about/resposibility/">绿色石垠</a>
                    <p>NAOMI GRAIN</p>
                    </dt>
                    <dd>
                        <span></span>
                        <p>将“绿色环保”的理念贯彻于整个公司经营过程中，坚持以可持续发展为导向，倡导低碳、节约理念，并积极参与旨在保护整个大环境的绿色环保活动。</p>
                        <a href="/about/resposibility/">MORE</a>
                    </dd>
                </div>
            </dl>
        </div>
    </div><!--2-->
    <div class="c"></div>
    <div class="index_b">
        <div class="index_ld">
            <div class="inhl" id="inh3">
                <a href="/news/news-news/?post_fl_all=1">
                    CORPORATE NEWS
                    <p>公司新闻</p>
                    <span></span>
                </a>
            </div>
            <div class="c"></div>
            <!--
            <div class="index_bl">
                <div class="index_bll">
                替代文字：石垠在自身发展的同时，积极履行社会责任，<br/>
    通过 “少年硅谷”等社会责任项目的成立，助力科技创新及创新型人才的培养
                </div>
                <div class="index_blz">
                    Beijing Nuoyuan Holdings Limited Is A Large Comprehensive Third Party Service Company,<br/>
    Business Covers Internet Banking And Wealth Management
                </div>
            </div>-->

        </div>
        <div class="c"></div>
        <div id="main" role="main">
            <ul class="example-tiles" id="nul1">
            	<?php 
            		$cates = get_category_by_slug('news-news');
				$news = $posts =get_posts( "category=".$cates->term_id."&order=ASC&numberposts=6");
				$j=1;
				foreach($news as $p){
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
				        echo '<li>
                    <dl>
                        <img src="'.$sub_image.'">
                        <dt>
                            <a href="/news/news-news/?id='.$p->ID.'">'.$p->post_title.'</a>
                        <p></p>
                        </dt>
                        <dd>
                            <p>'.$des.'</p>
                            <a href="/news/news-news/?id='.$p->ID.'">MORE</a>
                        </dd>
                    </dl>
                </li>';
//					}
		        		$j++;
				}
//				echo '<pre>';
//				var_dump($news);
//				die;
            		?>
                
                  <!--<li>
                        <dl>
                            <img src="/Public/uploads/5b0387f0b2bf3.jpg">
                            <dt>
                                <a href="/news/news_n?id=203">2018清华五道口全球金融论坛开幕 石垠代表资管行业发声</a>
                            <p></p>
                            </dt>
                            <dd>
                                <p>5月19日，以“新时代金融改革开放与稳定发展”为主题的2018清华五道口全球金融论坛在清华大学隆重开幕。</p>
                                <a href="/news/news_n?id=203">MORE</a>
                            </dd>
                        </dl>
                    </li>-->
                    <!--<li>
                        <dl>
                            <img src="/Public/uploads/5afa74601ec9b.jpg">
                            <dt>
                                <a href="/news/news_n?id=202">石垠资产长春分公司三周年庆暨2018投资策略解读会隆重举办</a>
                            <p></p>
                            </dt>
                            <dd>
                                <p>5月13日，恰逢长春分公司成立三周年之际，“创新大时代 财富新视野——石垠资产长春分公司三周年庆暨2018投资策略解读会”在长春市隆重举办。</p>
                                <a href="/news/news_n?id=202">MORE</a>
                            </dd>
                        </dl>
                    </li><li>
                        <dl>
                            <img src="/Public/uploads/5ae293640dd9d.png">
                            <dt>
                                <a href="/news/news_n?id=199">石垠荣登“投中2017年度中国最具竞争力财富管理机构TOP10”榜单</a>
                            <p></p>
                            </dt>
                            <dd>
                                <p>4月24日，由第三方股权投资服务机构投中信息主办的“2017投中榜颁奖盛典”在上海隆重举行。</p>
                                <a href="/news/news_n?id=199">MORE</a>
                            </dd>
                        </dl>
                    </li><li>
                        <dl>
                            <img src="/Public/uploads/5acb0035b0278.jpg">
                            <dt>
                                <a href="/news/news_n?id=195">“新经济加速跑 财富再升级——2018石垠春季投资策略解读会”成功举办</a>
                            <p></p>
                            </dt>
                            <dd>
                                <p>4月1日，“新经济加速跑 财富再升级——2018石垠春季投资策略解读会”在杭州成功举办。</p>
                                <a href="/news/news_n?id=195">MORE</a>
                            </dd>
                        </dl>
                    </li><li>
                        <dl>
                            <img src="/Public/uploads/5acc7457d5267.jpg">
                            <dt>
                                <a href="/news/news_n?id=190">石垠资产董事长崔强：财富管理行业要做好创新与民生联通的桥梁</a>
                            <p></p>
                            </dt>
                            <dd>
                                <p>创新无止境，得益于创新这个强有力的引擎，中国经济再次腾飞已经启动。</p>
                                <a href="/news/news_n?id=190">MORE</a>
                            </dd>
                        </dl>
                    </li>-->
            </ul>
        </div>
        <div class="c"></div>
        <ul id="nul2">
            <li>
                    <dl>
                        <img src="/Public/uploads/5b2c4f6a45775.jpg">
                        <dt>
                            <a href="/news/news_n?id=204">石垠与如是金融研究院签署战略协议 携手深度开展投资者教育及金融投资知识内容孵化合作</a>
                        <p></p>
                        </dt>
                        <dd>
                            <p>未来石垠将以双方深度合作为契机，充分结合自身的投硏专业能力以及如是金融研究院等第三方机构的智力优势，不断提升公司的业务服务水平。</p>
                            <a href="/news/news_n?id=204">MORE</a>
                        </dd>
                    </dl>
                </li><li>
                    <dl>
                        <img src="/Public/uploads/5b0387f0b2bf3.jpg">
                        <dt>
                            <a href="/news/news_n?id=203">2018清华五道口全球金融论坛开幕 石垠代表资管行业发声</a>
                        <p></p>
                        </dt>
                        <dd>
                            <p>5月19日，以“新时代金融改革开放与稳定发展”为主题的2018清华五道口全球金融论坛在清华大学隆重开幕。</p>
                            <a href="/news/news_n?id=203">MORE</a>
                        </dd>
                    </dl>
                </li><li>
                    <dl>
                        <img src="/Public/uploads/5afa74601ec9b.jpg">
                        <dt>
                            <a href="/news/news_n?id=202">石垠资产长春分公司三周年庆暨2018投资策略解读会隆重举办</a>
                        <p></p>
                        </dt>
                        <dd>
                            <p>5月13日，恰逢长春分公司成立三周年之际，“创新大时代 财富新视野——石垠资产长春分公司三周年庆暨2018投资策略解读会”在长春市隆重举办。</p>
                            <a href="/news/news_n?id=202">MORE</a>
                        </dd>
                    </dl>
                </li><li>
                    <dl>
                        <img src="/Public/uploads/5ae293640dd9d.png">
                        <dt>
                            <a href="/news/news_n?id=199">石垠荣登“投中2017年度中国最具竞争力财富管理机构TOP10”榜单</a>
                        <p></p>
                        </dt>
                        <dd>
                            <p>4月24日，由第三方股权投资服务机构投中信息主办的“2017投中榜颁奖盛典”在上海隆重举行。</p>
                            <a href="/news/news_n?id=199">MORE</a>
                        </dd>
                    </dl>
                </li><li>
                    <dl>
                        <img src="/Public/uploads/5acb0035b0278.jpg">
                        <dt>
                            <a href="/news/news_n?id=195">“新经济加速跑 财富再升级——2018石垠春季投资策略解读会”成功举办</a>
                        <p></p>
                        </dt>
                        <dd>
                            <p>4月1日，“新经济加速跑 财富再升级——2018石垠春季投资策略解读会”在杭州成功举办。</p>
                            <a href="/news/news_n?id=195">MORE</a>
                        </dd>
                    </dl>
                </li><li>
                    <dl>
                        <img src="/Public/uploads/5acc7457d5267.jpg">
                        <dt>
                            <a href="/news/news_n?id=190">石垠资产董事长崔强：财富管理行业要做好创新与民生联通的桥梁</a>
                        <p></p>
                        </dt>
                        <dd>
                            <p>创新无止境，得益于创新这个强有力的引擎，中国经济再次腾飞已经启动。</p>
                            <a href="/news/news_n?id=190">MORE</a>
                        </dd>
                    </dl>
                </li>        </ul>
    </div><!--3-->
    <div class="c"></div>
    <div class="index_c">
        <div class="index_ld">
            <div class="inhl" id="inh4" data-scroll-reveal="enter from the top over 1.5s">

                SUNSHINE
                <p>阳光石垠</p>
                <span></span>

            </div>
            <div class="c"></div>
            <div class="index_cl" data-scroll-reveal="enter from the top over 1s">
                <div class="index_cll">
                    石垠始终秉承“阳光、透明、规范”的经营理念，<br/>
                    让承诺有形可见，真正做到对投资者负责。
                </div>
                <div class="index_clz">
                    Following an operational mindset of “bright, transparent, standard”<br>Nuoyuan walk the talk, being
                    responsible to investors in a solid manner.
                </div>
            </div>
        </div>
        <div class="index_lm">
            <div class="inhl" id="inh4">

                SUNSHINE
                <p>阳光石垠</p>
                <span></span>

            </div>
            <div class="c"></div>
            <div class="index_cl">
                <div class="index_cll">
                    石垠始终秉承“阳光、透明、规范”的经营理念，<br/>
                    让承诺有形可见，真正做到对投资者负责。
                </div>
                <div class="index_clz">
                    Following an operational mindset of “sunshine, transparent, standard”<br> Nuoyuan walk the talk,
                    being responsible to investors in a solid manner.
                </div>
            </div>
        </div>
		<?php 
			get_footer();
			?>
   
	<li><a href="http://www.facebook.com/mceducationhk/" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ico1.png"></a></li>
	<li><a href="http://www.youtube.com/channel/UCeHQNH3g5ePJkSUgcknm6mg" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ico2.png"></a></li>
	<li><a href="Mailto:info@mceducation.com.hk"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ico3.png"></a></li>
	<li><a href="#"><img class="muti_language" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ico4.png"></a></li>
	<li>
		<?php
			if(!empty($_SESSION['login'])){
				echo '<a href="javascript:void(0);"><img src="'.get_template_directory_uri().'/images/ico5.png" class="logout"></a>';
			}
		?>
	</li>
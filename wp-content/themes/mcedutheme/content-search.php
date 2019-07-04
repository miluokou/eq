<?php
/**
 * The template part for displaying results in search pages
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	<tr>
	<?php
//		 twentyfifteen_post_thumbnail(); 
//		$blog_id = get_the_ID();
		?>
		
		<?php if ( 'post' == get_post_type() ) :
			?>
			<th>
					<?php 
							twentyfifteen_entry_meta();
					?>
			</th>
	</tr>	
	<tr>		
			<?php
			else :
			endif; 
			?>

		<?php
			 the_title( sprintf( '<td class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></td>' ); 
			 ?>
	</tr>
		
		 
				
			



	

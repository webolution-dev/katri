<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Katri
 */

?>

<div class="main-slider-wrap">
		<div class="main-slider">
			<?php $loop = new WP_Query( array( 'post_type' => 'slider', 'posts_per_page' => 20 ) ); ?>
					<?php while ( $loop->have_posts() ) : $loop->the_post();
					$thumb_id = get_post_thumbnail_id();
					$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true); ?>
					<div class="item" style="background-image: url(<?echo $thumb_url[0];?>)">
						<div class="main-slider-content">
							<div class="main-slider-inner">
								<?the_content();?>
							</div>
						</div>
					</div>
					<?php endwhile; wp_reset_query(); ?>
		</div>
	</div>
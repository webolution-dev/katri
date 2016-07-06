<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Katri
 */

?>

<div class="clients-slider">
<?php $loop = new WP_Query( array( 'post_type' => 'clients', 'posts_per_page' => 20 ) ); ?>
					<?php while ( $loop->have_posts() ) : $loop->the_post();
					$thumb_id = get_post_thumbnail_id();
					$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true); ?>
	<div class="item">
		<a href="<?echo $thumb_url[0];?>" class="gallery-modal" rel="client-gallery"><img src="<?echo $thumb_url[0];?>" alt="<?php the_title(); ?>"></a>	
	</div>
<?php endwhile; wp_reset_query(); ?>	
</div>
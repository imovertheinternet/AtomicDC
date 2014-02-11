<div class="container team-member">
	<div class="col-md-6">
		<?php if (has_post_thumbnail( $post->ID ) ): ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		<div class="team-image" style="background-image: url('<?php echo $image[0]; ?>')">

		</div>
		<?php endif; ?>
	</div>
	<div class="col-md-6">
		<?php get_template_part('templates/content', 'page'); ?>
	</div>
</div>
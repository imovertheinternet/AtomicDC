<div class="su-posts su-posts-projects-loop container">
	<?php
		// Posts are found
		if ( $posts->have_posts() ) {
			while ( $posts->have_posts() ) :
				$posts->the_post();
				global $post;
				?>

				<div id="su-post-<?php the_ID(); ?>" class="su-post col-md-6">
					<div class="col-md-6">
						<h2 class="su-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="su-post-meta"><?php _e( 'Posted', 'su' ); ?>: <?php the_time( get_option( 'date_format' ) ); ?></div>
						<div class="su-post-excerpt">
							<?php the_excerpt(); ?>
						</div>
					</div>
					<div class="col-md-6">
						<?php if ( has_post_thumbnail() ) : ?>
							<a class="su-post-thumbnail" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						<?php endif; ?>
					</div>
				</div>

				<?php
			endwhile;
		}
		// Posts not found
		else {
			echo '<h4>' . __( 'Posts not found', 'su' ) . '</h4>';
		}
	?>
</div>
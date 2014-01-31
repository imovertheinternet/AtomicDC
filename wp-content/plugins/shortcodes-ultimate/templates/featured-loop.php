<div class="su-posts su-posts-featured-loop">
	<?php
		// Posts are found
		if ( $posts->have_posts() ) {
			while ( $posts->have_posts() ) :
				$posts->the_post();
				global $post;
				?>

				<div id="su-post-<?php the_ID(); ?>" class="su-post col-lg-12">
					<div class="col-lg-12 featured-info">
						<h2 class="su-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="su-post-excerpt">
							<p><?php the_excerpt(); ?></p>
						</div>
					</div>
					<div class="col-lg-12 featured-blog-img">
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
<div class="col-lg-12 projects-container">
	<div class="col-md-3 projects-interior">
		<?php query_posts('cat=3&showposts=1'); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h1 class="project-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
			<?php if ( has_post_thumbnail() ) : ?>
				<a class="project-thumbnail" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			<?php endif; ?>
		<?php endwhile; endif; ?>
	</div>

	<div class="col-md-3 projects-interior">
		<?php query_posts('cat=3&showposts=1&offset=1'); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h1 class="project-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
			<?php if ( has_post_thumbnail() ) : ?>
				<a class="project-thumbnail" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			<?php endif; ?>
		<?php endwhile; endif; ?>
	</div>

	<div class="col-md-6 projects-interior">
		<?php query_posts('cat=3&showposts=1&offset=2'); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h1 class="project-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
			<?php if ( has_post_thumbnail() ) : ?>
				<a class="project-thumbnail" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			<?php endif; ?>
		<?php endwhile; endif; ?>
	</div>

	<div class="col-md-4 projects-interior">
		<?php query_posts('cat=3&showposts=1&offset=3'); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h1 class="project-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
			<?php if ( has_post_thumbnail() ) : ?>
				<a class="project-thumbnail" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			<?php endif; ?>
		<?php endwhile; endif; ?>
	</div>

	<div class="col-md-4 projects-interior">
		<?php query_posts('cat=3&showposts=1&offset=4'); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h1 class="project-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
			<?php if ( has_post_thumbnail() ) : ?>
				<a class="project-thumbnail" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			<?php endif; ?>
		<?php endwhile; endif; ?>
	</div>

	<div class="col-md-4 projects-interior">
		<?php query_posts('cat=3&showposts=1&offset=5'); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h1 class="project-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
			<?php if ( has_post_thumbnail() ) : ?>
				<a class="project-thumbnail" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			<?php endif; ?>
		<?php endwhile; endif; ?>
	</div>
</div>

<div class="col-lg-12 container">
	<div class="content row">
		<div class="col-lg-12 container quote-container">
			<div class="col-md-6 col-md-offset-3">
				<h1>AtomicDC is a 360&deg; creative agency with over 12 years under the hood.</h1>
			</div>
		</div>
	</div>
</div>
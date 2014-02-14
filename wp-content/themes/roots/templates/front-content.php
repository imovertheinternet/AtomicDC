<div class="col-lg-12 about-atomic">
	<div class="col-md-4 col-md-offset-2 about-info">
		<p>We are a <strong>Dallas web design</strong> agency focused on design, creativity, strategy, development, and digital marketing. Founded in 2002 with a goal to create amazing digital presense for businesses. </p>
		<p>Constantly keeping up with current design and development trends and paving the way for new ones by offering company based meet-ups and presentations on new digital trends.</p>
	</div>
	<div class="col-md-4 recent-case">
		<h3>Our Recent Case Study</h3>
		<?php dynamic_sidebar('sidebar-footer'); ?>
	</div>
</div>

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

<!-- <div class="col-lg-12 container">
	<div class="content row" style="background-color:#090b0b;height:auto;color:wheat;text-align:center;font-size:20px;">	
	<i class="fa fa-pagelines fa-5x"></i>
	<i class="fa fa-trello fa-5x"></i>
	<i class="fa fa-css3 fa-5x"></i>
	<i class="fa fa-weibo fa-5x"></i>
	<i class="fa fa-dribbble fa-5x"></i>
	<i class="fa fa-adn fa-5x"></i>
		<div class="col-lg-12 container quote-container">			
		</div>
	</div>
</div> -->


<div class="col-lg-12" style="background-color:#ebebeb;height:auto;color:#666;text-align:center;font-size:20px;padding:30px;">
<div class="container" >
<div class="row">	Client List: </div>
	<div class="row" style="padding:25px 0 25px 0;">	
	<i class="fa fa-pagelines fa-5x clientbounce" style="padding:0 50px 0 50px"></i>
	<i class="fa fa-trello fa-5x clientbounce" style="padding:0 50px 0 50px"></i>
	<i class="fa fa-css3 fa-5x clientbounce" style="padding:0 50px 0 50px"></i>
	<i class="fa fa-weibo fa-5x clientbounce" style="padding:0 50px 0 50px"></i>
	<i class="fa fa-adn fa-5x clientbounce" style="padding:0 50px 0 50px"></i>
		</div>
	</div>
</div>
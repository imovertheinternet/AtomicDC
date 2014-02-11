<?php while (have_posts()) : the_post(); ?>
<div class="blog-image-cont">
  <?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
  <div class="blog-image" style="background-image: url('<?php echo $image[0]; ?>')">

  </div>
  <?php endif; ?>
</div>
<div class="container single-post-content">
  <div class="col-md-8">
    <article <?php post_class(); ?>>
      <header>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php get_template_part('templates/entry-meta'); ?>
      </header>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
      <footer>
        <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
      </footer>
      <?php comments_template('/templates/comments.php'); ?>
    </article>
  </div>

   <?php if (roots_display_sidebar()) : ?>
    <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
      <?php include roots_sidebar_path(); ?>
    </aside><!-- /.sidebar -->
  <?php endif; ?>

</div>
<?php endwhile; ?>
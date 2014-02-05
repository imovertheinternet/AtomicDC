<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <div class="masthead">
    <h1>33&deg;4' 42.23" N &#8212; 96&deg; 49' 11.76" W</h1>
    <p>Meet the team to build your next website.</p>
    <a href="<?php echo home_url(); ?>/"><img class="logo" src="/atomic/wp-content/themes/roots/assets/img/atomic-logo-type.png"></a>
  </div>

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>

  <div class="wrap container-fluid" role="document">
    <div class="content row">
      <main class="main <?php echo roots_main_class(); ?>" role="main">
        <?php include roots_template_path(); ?>
      </main><!-- /.main -->
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <?php
    if ( is_front_page() ) {
      get_template_part('templates/front-content');
  
    }

  ?>

  <?php get_template_part('templates/footer'); ?>

</body>
</html>

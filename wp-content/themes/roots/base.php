<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <div class="masthead">
    <h1>33&deg;4' 42.23" N &#8212; 96&deg; 49' 11.76" W</h1>
    <p>Come meet the team that will build your next website.</p>
    <a href="<?php echo home_url(); ?>/"><img class="logo" src='wp-content/themes/roots/assets/img/atomic-logo-type.png'></a>
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







  <div class="wrap container" role="document">
    <div class="content row">
      <main class="main <?php echo roots_main_class(); ?>" role="main">
        <?php include roots_template_path(); ?>
      </main><!-- /.main -->
    </div><!-- /.content -->
  </div><!-- /.wrap -->





<center>
<div class="lightgrayhome">
<div class="container" >
<div class="col-md-6"><img src="img/2.png"><h2>What is this?</h2><p>Primarily my blog/portfolio. I originally created it with the idea of possibily making it into an app to get people involved and go outside but I have a nasty habit of creating 100 projects, and not finishing them. This one will probably be included. </p></div>
<div class="col-md-6"><img src="img/2.png"><h2>Who we are</h2><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
</div></div>
</center>

  <?php
    if ( is_front_page() ) {
      get_template_part('templates/front-content');
    }
  ?>







  <?php get_template_part('templates/footer'); ?>

</body>
</html>

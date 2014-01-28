<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>
  <link rel="stylesheet" type="text/css" href="/atomic/wp-content/themes/roots/assets/css/animate.min.css"/>
  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300|Gloria+Hallelujah' rel='stylesheet' type='text/css'>
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="/atomic/wp-content/themes/roots/assets/img/favicon.ico">
</head>

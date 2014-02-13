<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>
  <script src="/atomic/wp-content/themes/roots/assets/js/plugins/animatedhover.js"></script>
  <link rel="stylesheet" type="text/css" href="/atomic/wp-content/themes/roots/assets/css/animate.min.css"/>
  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">
  <link rel="shortcut icon" type="image/x-icon" href="/atomic/wp-content/themes/roots/assets/img/favicon.ico">
  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300|Gloria+Hallelujah' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Domine:400,700' rel='stylesheet' type='text/css'>
  <!-- Font Awesome Icons -->
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
   
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script>
      function initialize() {
        var map_canvas = document.getElementById('map_canvas');
        var myLatlng = new google.maps.LatLng(33.078219, -96.819380);
        var map_options = {
          center: new google.maps.LatLng(33.078219, -96.819380),
          zoom: 17,
          draggable: true,
          scrollwheel: false,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      icon: 'http://pbs.twimg.com/profile_images/3060812769/d132a7e3e6d0db8af49743a387f19ccf_normal.png',
      title: 'Come visit us at AtomicDC'
         });
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>


  


</head>

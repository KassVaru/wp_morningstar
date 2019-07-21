<!DOCTYPE html>
<html lang="<?php echo get_bloginfo('language'); ?>">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php echo get_bloginfo('description'); ?>">
  <title><?php echo get_bloginfo('name'); ?></title>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <?php wp_head();?>
</head>

<body>
  <nav class="navbar navbar-expand-lg mt-0 mr-auto mb-0 fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img id="logo_img"
              src="<?php echo get_template_directory_uri(); ?>/logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-menu-collapse"
          aria-controls="header-menu-collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
      </button>

      <?php wp_nav_menu(array(
        'menu'              => 'header_menu',
        'theme_location'    => 'header_menu',
        'depth'             => 2,
        'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'header-menu-collapse',
        'menu_class'        => 'navbar-nav ml-auto',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker()));
      ?>
    </div>
  </nav>
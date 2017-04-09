<!DOCTYPE html>
<html>
  <head><?php wp_head(); ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Some wordpress web page test</title>
  </head>
  <body class="container">
    <header>
      <div class="container"><?php wp_nav_menu(array( 'theme_location' => 'principal', 'menu_class' => 'menu-flotante', 'container' => 'nav')) ?></div>
    </header>
  
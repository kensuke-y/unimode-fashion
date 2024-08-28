<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta name="description" content="ユニバーサルファッションサイト">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">    
        <link rel="icon" href="img/favicon.png">
        <title>UniMode-fashion</title>
        <?php wp_head(); ?>
    </head>

    <body>
        <!-- ヘッダー -->
        <header id="header" class="contents">
            <div id="item-1">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <img id="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="UniMode">
                </a>
                <!-- ナビ -->
                <nav id="navi">
                    <ul class="nav-menu">
                      <li><a href="<?php echo home_url(); ?>/category/site">サイト立ち上げについて</a></li>
                      <li><a href="<?php echo home_url(); ?>/category/PICK%20UP">PICK UP</a></li>
                      <li><a href="<?php echo home_url(); ?>/category/snap">SNAP</a></li>
                      <li><a href="<?php echo home_url(); ?>/category/ec">EC</a></li>
                      <li><a href="<?php echo home_url(); ?>/category/ec-collabo">EC-Collabo</a></li>
                      <li><a href="<?php echo home_url(); ?>/category/coordination-make">Coordination-Make</a></li>
                      <li><a href="<?php echo home_url(); ?>/category/feature">Feature</a></li>
                      <li><a href="<?php echo home_url(); ?>/category/idea-notes">Idea-Notes</a></li>
                      <li><a href="<?php echo home_url(); ?>/category/prosthetics">Prosthetics</a></li>
                      <li><a href="<?php echo home_url(); ?>/category/Map">Map</a></li>
                      <li><a href="<?php echo home_url(); ?>/category/sponsors">Sponsors</a></li>
                      <li><a href="<?php echo home_url(); ?>/category/Contact">Contact</a></li>
                    </ul>
                    <ul class="nav-sns">
                      <li><a href="https://twitter.com/" target="_blank">Twitter</a></li>
                      <li><a href="https://www.facebook.com/" target="_blank">facebook</a></li>
                      <li><a href="https://www.instagram.com/" target="_blank">instagram</a></li>
                    </ul>
                  </nav>
            
                  <div class="toggle_btn">
                    <span></span>
                    <span></span>
                    <span></span>
                  </div>
            
                  <div id="mask"></div>
        </header>

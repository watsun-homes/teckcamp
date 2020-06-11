<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns#">
<meta charset="utf-8">
<meta name="viewport"　
content="width=device-width, initial-scale=1.0 ">
   

    
    
<!--css呼び出し-->
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/slick.scss">  
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/slick-theme.css">

<!--fontawwesome-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    
<!--アイコン呼び出し-->
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri() ?>/images/webclipicon.png" />
<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/images/favicon.ico" />

        
<!--jquery読み込み--> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!--js読み込み--> 
<script type='text/javascript' src="<?php echo get_template_directory_uri() ?>/js/main.js"></script>
<script type='text/javascript' src="<?php echo get_template_directory_uri() ?>/js/slick.min.js"></script>
    
    
<!--ヘッダー画像読み込み-->
  <?php if ( get_header_image() ) : ?>
	<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="">
<?php endif; ?>  
    <!--ヘッダー画像読み込み-->
    
    
    
<?php wp_head(); ?>
</head>
    
    
    
<body <?php body_class(); ?>>
<header class="">
    
    <div class="relative">
      
      <!--タイトルを画像にする場合-->
    <div class="site-title-wrap">
        <h1>
        <a href="<?php echo home_url(); ?>">
          <img class="img-1" src="<?php echo get_template_directory_uri() ?>/tech-images/logo-engineer-text-white-1d1ec8e562059813239cb56dd9279f8f.svg">
          <img class="img-2" src="<?php echo get_template_directory_uri() ?>/tech-images/logo-engineer-text-7c65cde11c2832e6d1fcec26aebcf33f.svg">
        </a>
        </h1>
    </div>
      <!--タイトルを画像にする場合-->
        
        
      
    
      <div id="nav-drawer">
          
          <div class="freecauns"><a href="">無料カウンセリング ➔</a></div>
          
      <input id="nav-input" type="checkbox" class="nav-unshown">
      <label id="nav-open" for="nav-input"><span></span></label>
      <label class="nav-unshown" id="nav-close" for="nav-input"></label>
          
          <div id="nav-content">

  <!--ヘッダーメニュー-->
  <?php wp_nav_menu( array(
        'theme_location' => 'header-nav', 
        'container' => 'nav',
        'container_class' => 'header-nav',
        'container_id' => 'header-nav',
        'fallback_cb' => ''
  ) ); ?>
 <!--ヘッダーメニュー-->
              
              
          </div>

      </div>
      
   
      
    
    </div>

</header>
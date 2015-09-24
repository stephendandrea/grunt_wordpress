<!doctype html>
<html>
  <head>
    
    <meta charset="utf-8">
    
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>
  
  </head>

  <?php 
    
    $bodyId= '';
    $bodyClass= '';
    $echoTitle = false;
  
    if ( is_home() ) {

      $bodyId = $bodyClass  ='home';
      
    }else if ( is_category() ) {

      $bodyId = 'category';
      $bodyClass = "category-" . strtolower( preg_replace('/[^A-Za-z0-9\-]/', '', single_cat_title( '', false ) )) ;
      $echoTitle = true;
      $title =  single_cat_title( '', false );

    }else if(is_page() ){    

      $bodyId = 'page';            
      $bodyClass = "page-" . strtolower( preg_replace('/[^A-Za-z0-9\-]/', '', get_the_title( '', false ) )) ;
      // $echoTitle = true;
      $title =  get_the_title( '', false );

    }else if( is_single() ){    
      $bodyId = 'single';
      $bodyClass = "single-" . strtolower( preg_replace('/[^A-Za-z0-9\-]/', '', get_the_title( '', false ) )) ;
      $title  = get_the_title( '', false );

    }
  ?>

  <body id="<?php echo $bodyId ?>" class="<?php echo $bodyClass ?>">
      <div id="navbar" class="navbar-collapse navbar-inverse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div>
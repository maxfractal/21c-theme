<?php

  get_header('ux');



  while(have_posts()) {
    the_post(); ?>
    
    <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/gradient-decay.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title">UX Lorem Ipsum</h1>
      <div class="page-banner__intro">
        <p>Our latest articles:</p>
        <p>Sling TV UX Teardown</p>
      </div>
    </div>  
  </div>

  <div class="container container--narrow page-section">
    
    

    
    
    <?php 
    $testArray = get_pages(array(
      'child_of' => get_the_ID()
    ));

    if ($theParent or $testArray) { ?>
    <div class="page-links">
      <h2 class="page-links__title"><a href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?></a></h2>
      <ul class="min-list">
        <?php
          if ($theParent) {
            $findChildrenOf = $theParent;
          } else {
            $findChildrenOf = get_the_ID();
          }

          wp_list_pages(array(
            'title_li' => NULL,
            'child_of' => $findChildrenOf,
            'sort_column' => 'menu_order'
          ));
        ?>
      </ul>
    </div>
    <h1>Sling TV UX Teardown</h1>
    <?php } ?>
    

    <div class="generic-content">
      <?php the_content(); ?>
    </div>

  </div>
    
  <?php }

  get_footer('ux');

?>
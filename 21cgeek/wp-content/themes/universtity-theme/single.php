<?php 

get_header();

?>
This is single.php.
<div class="box">This is a box.</div>
<?php
    while(have_posts()) {
        the_post(); ?>
        <div class="box"><h2><?php the_title(); ?></h2></div>
        <?php the_content(); ?>
    <?php }

get_footer();    
?>
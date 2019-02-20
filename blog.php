<?php
/*
Template Name: Blog template
*/ 

?>
<?php
    get_header(); ?>

<div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <?php
          get_template_part('/template-parts/content', 'blog');
          
        ?> 
      </div>
      <?php get_sidebar() ?>
      <div class="clr"></div>
    </div>
</div>






<?php
    get_footer(); ?>
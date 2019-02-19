<?php 
/*
Template name: Front-page
*/

?>

<?php
get_header()



?>



<div class="content">
    <div class="content_resize">
      <div class="mainbar">

        <?php
            require get_template_directory() . '/template-parts/content.php';
        ?>

      </div>
      <?php get_sidebar() ?>
      <div class="clr"></div>
    </div>
  </div>

<?php 
    get_footer();
?>
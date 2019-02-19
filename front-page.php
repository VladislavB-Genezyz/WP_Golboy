<?php 
/*
Template name: Front-page tamplate
*/

?>

<?php
get_header()



?>



<div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <?php if(is_front_page() && !is_paged()){ ?>
            <h1>Front page</h1>
        <?php }else{ ?>

            <?php
                get_template_part('/template-parts/content');
            ?>
        <?php } ?>


      </div>
      <?php get_sidebar() ?>
      <div class="clr"></div>
    </div>
  </div>

<?php 
    get_footer();
?>
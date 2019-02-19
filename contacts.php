<?php
/*
Template Name: Contact template
*/ 

?>


<?php 
    get_header();
?>


<div class="content">
    <div class="content_resize">
      <div class="mainbar">

        <div class="article">
          <h2><span>Contact</span></h2>
          <div class="clr"></div>
          <p>Nullapede laorem velit curabitudin enim in nibh ero leo in pede. Semperpurus nibh elit et convallis eu trices congue males monterdum elit.</p>
        </div>
        <div class="article">
          <h2><span>Send us</span> mail</h2>
          <div class="clr"></div>
          <?php if(have_posts()){ // echo of [contact-form-7 id="131" title="ContactForm"]

                while(have_posts()){ ?>
                    <?php the_post()?>
                    <?php the_content()?>
                <?php }?>
            <?php }?>
        </div>

       
      </div>
      <?php get_sidebar() ?>
      </div>
      <div class="clr"></div>
    </div>
</div>


<?php get_footer()?>
<?php /*
Template name : Category
*/

get_header();

?>



<div class="content">
    <div class="content_resize">
      <div class="mainbar">


        <?php if(have_posts()){

            while(have_posts()){ ?>

        <?php the_post()?>
        <div class="article">
            <!-- <h2>
                <span>Excellent Solution</span>
                For Your Business
            </h2> -->
            <h2> <?php the_title()?></h2>
          <p class="infopost">Posted on 
            <span class="date">11 sep 2018</span>
            by
            <a href="<?php the_author_link()?>"><?php the_author()?></a> &nbsp;&nbsp;|&nbsp;&nbsp;
            <?php the_tags()?>
            &nbsp;&nbsp;|&nbsp;&nbsp;
            <a href="#" class="com">Comments <span><?php echo get_comments_number('','|','')?></span></a>
          </p>
          <div class="clr"></div>
          <div class="img">
            <?php the_post_thumbnail('post-thumb') ?>
          </div>
          <div class="post_content">
            <p> <?php the_excerpt()?> </p>

            <p class="spec"><a href="<?php the_permalink()?>" class="rm">Read more...</a></p>
          </div>
          <div class="clr"></div>
        </div>
        <?php } ?>
        <p class="pages"><small>Page 1 of 2</small> <span>1</span> <a href="#">2</a> <a href="#">&raquo;</a></p>
        <?php }?>
       
      </div>
      <?php get_sidebar() ?>
      <div class="clr"></div>
    </div>
  </div>












<?php get_footer()?>
<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Goldbay
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php if(have_posts()){

            while(have_posts()){ ?>

        <?php the_post()?>
        <div class="article">
            <h2> <?php the_title()?></h2>
          <p class="infopost">Posted on 
			<span class="date"><?php echo get_the_date('n-j-Y'); ?></span>
			
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
        <?php wp_bootstrap_pagination_goladbay();?>
        <?php }?>
       
      </div>
      <?php get_sidebar() ?>
      <div class="clr"></div>
    </div>
  </div>
</article>

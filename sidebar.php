<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Goldbay
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>


<?php global $goldbay; ?>
<div class="sidebar">
        <!-- <h2 class="star"><span>Sidebar</span> Menu</h2> -->
        <?php dynamic_sidebar('main-sidebar')?>        
        <div class="gadget">
          <h2 class="star"><span>Sponsors</span></h2>
          <div class="clr"></div>
          <ul class="ex_menu">
            <li><a href="<?php echo $goldbay['sponsor1_href']?>"><?php echo $goldbay['sponsor1_title']?></a><br />
            <?php echo $goldbay['sponsor1_text']?></li>
            <li><a href="<?php echo $goldbay['sponsor2_href']?>"><?php echo $goldbay['sponsor2_title']?></a><br />
              P<?php echo $goldbay['sponsor2_text']?></li>
            <li><a href="<?php echo $goldbay['sponsor3_href']?>"><?php echo $goldbay['sponsor3_title']?></a><br />
            <?php echo $goldbay['sponsor3_text']?></li>
          </ul>
        </div>
        <?php 
        ?>
      </div>

<!-- <aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside> -->
<!-- #secondary -->

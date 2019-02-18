<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Goldbay
 */

?>

	</div>
  <?php if(!isset($goldbay)){
    global $goldbay;
  }?>

	<div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        
        <?php if(isset($goldbay['gallery-title'])){ ?>
          <h2><?php echo $goldbay['gallery-title']?></h2>
        <?php }?> 
        <?php 
          if(isset($goldbay['f-img1-href']) && isset($goldbay['f-img1'])){ ?>
            <a href="<?php echo $goldbay['f-img1-href']?> "><img src="<?php echo $goldbay['f-img1']['url'] ?> " width="75" height="75" alt="<?php echo $goldbay['f-img1']['title'] ?>" class="gal" /></a>
         <?php } ?> 
         <?php 
          if(isset($goldbay['f-img2-href']) && isset($goldbay['f-img2'])){ ?>
            <a href="<?php echo $goldbay['f-img2-href']?> "><img src="<?php echo $goldbay['f-img2']['url'] ?> " width="75" height="75" alt="<?php echo $goldbay['f-img2']['title'] ?>" class="gal" /></a>
         <?php } ?> 
         <?php 
          if(isset($goldbay['f-img3-href']) && isset($goldbay['f-img3'])){ ?>
            <a href="<?php echo $goldbay['f-img3-href']?> "><img src="<?php echo $goldbay['f-img3']['url'] ?> " width="75" height="75" alt="<?php echo $goldbay['f-img3']['title'] ?>" class="gal" /></a>
         <?php } ?> 
         <?php 
          if(isset($goldbay['f-img4-href']) && isset($goldbay['f-img1'])){ ?>
            <a href="<?php echo $goldbay['f-img4-href']?> "><img src="<?php echo $goldbay['f-img4']['url'] ?> " width="75" height="75" alt="<?php echo $goldbay['f-img4']['title'] ?>" class="gal" /></a>
         <?php } ?> 
         <?php 
          if(isset($goldbay['f-img5-href']) && isset($goldbay['f-img5'])){ ?>
            <a href="<?php echo $goldbay['f-img5-href']?> "><img src="<?php echo $goldbay['f-img5']['url'] ?> " width="75" height="75" alt="<?php echo $goldbay['f-img5']['title'] ?>" class="gal" /></a>
         <?php } ?> 
         <?php 
          if(isset($goldbay['f-img6-href']) && isset($goldbay['f-img6'])){ ?>
            <a href="<?php echo $goldbay['f-img6-href']?> "><img src="<?php echo $goldbay['f-img6']['url'] ?> " width="75" height="75" alt="<?php echo $goldbay['f-img6']['title'] ?>" class="gal" /></a>
         <?php } ?> 

      </div>
      <div class="col c2">
         <?php if(isset($goldbay['service-title'])){?> 
          <h2> <?php echo $goldbay['service-title'] ?></h2>
         <?php }?>
         <?php if(isset($goldbay['service-paragraph'])){?> 
          <p> <?php echo $goldbay['service-paragraph'] ?></p>
         <?php }?>

        <ul class="fbg_ul">
          <?php if(isset($goldbay['service-link1-text']) &&  isset($goldbay['service-link1-href'])){?>
            <li><a href="<?php echo $goldbay['service-link1-href'] ?>" target="_blanck"><?php echo $goldbay['service-link1-text']?></a></li>
          <?php }?>
          <?php if(isset($goldbay['service-link2-text']) &&  isset($goldbay['service-link2-href'])){?>
            <li><a href="<?php echo $goldbay['service-link2-href'] ?>" target="_blanck"><?php echo $goldbay['service-link2-text']?></a></li>
          <?php }?>
          <?php if(isset($goldbay['service-link3-text']) &&  isset($goldbay['service-link3-href'])){?>
            <li><a href="<?php echo $goldbay['service-link3-href'] ?>" target="_blanck"><?php echo $goldbay['service-link3-text']?></a></li>
          <?php }?>
        </ul>
      </div>
      <div class="col c3">
      <?php if (isset($goldbay['contact-title'])){?>
        <h2> <?php  echo $goldbay['contact-title'] ?></h2>
      <?php }?> 
      <?php if (isset($goldbay['contact-paragraph'])){?>
        <p> <?php  echo $goldbay['contact-paragraph'] ?></p>
      <?php }?> 

        <p class="contact_info">

          <?php if (isset($goldbay['contact-address'])){?>
            <span> Address: </span> <?php  echo $goldbay['contact-address'] ?><br />
          <?php }?> 
          <?php if (isset($goldbay['contact-telephone'])){?>
            <span> Telephone: </span> <?php  echo $goldbay['contact-telephone'] ?><br />
          <?php }?> 
          <?php if (isset($goldbay['contact-fax'])){?>
            <span> FAX: </span> <?php  echo $goldbay['contact-fax'] ?><br />
          <?php }?> 
          <?php if (isset($goldbay['contact-others'])){?>
            <span> Others: </span> <?php  echo $goldbay['contact-others'] ?><br />
          <?php }?>
          <?php if (isset($goldbay['contact-email'])){?>
            <span> Email: </span> <?php  echo $goldbay['contact-email'] ?><br />
          <?php }?> 

        </p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Copyright <a href="#">MyWebSite</a>.</p>
      <p class="rf">Design by Dream <a href="http://www.dreamtemplate.com/">Web Templates</a></p>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>

<?php wp_footer(); ?>

</body>
</html>

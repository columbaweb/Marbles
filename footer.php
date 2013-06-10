
</div> <!-- wrapper end -->

<div id="wrapper-footer" class="container">
<footer>
   <div class="container">
      <div class="row">
         <div class="span3">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 1') ) : ?><?php endif; ?>
         </div>
         <div class="span4">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 2') ) : ?><?php endif; ?>
         </div>
         <div class="span5">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 3') ) : ?><?php endif; ?>
         </div>
      </div>
   </div>
   
 <div id="footer-copy">
    <div class="container">
      <div class="row">
         <p class="span6">© <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. <a href="http://www.reynoldsdigital.com">Web design</a> by Reynolds Digital</p>
         <div class="span6">
            <?php wp_nav_menu( array( 'theme_location' => 'footnav' ) ); ?>
         </div>
      </div>
   </div>
</footer>
</div>




<?php wp_footer(); ?>
</body>
</html>
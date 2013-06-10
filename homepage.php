<?php /* Template Name: Homepage */  ?>

<?php get_header(); ?>

<div id="content">
<!-- slider -->
   <div class="row" id="slider">
      <div class="span8">
         <?php echo get_new_royalslider(1); ?>
      </div>
      <div class="span4">
         <div class="wrap">
            <h2 class="bg"><span>Request a call back</span></h2>
            <?php if (function_exists('iphorm')) echo iphorm(2); ?>
         </div>   
      </div>
   </div>   
   
<!-- problems -->   
   <div class="row hp-problems">   
      <?php query_posts('post_type=sector'); ?>
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="span2" id="post-<?php the_ID(); ?>">
               <div class="wrap">
                   <?php 
                     $image = wp_get_attachment_image_src(get_field('thumbnail'), 'full'); 
                     if ($image == '')
                     { ?>			
         	    <?php } else { ?>
         	    <img src="<?php echo $image[0]; ?>" alt="<?php get_the_title(get_field('image')) ?>" />
         	 <?php } ?>
                  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  <p><?php the_field('subtitle'); ?></p>
               </div>   
            </div>
         <?php endwhile; endif; wp_reset_query(); ?>
   </div>
   
<!-- sectors -->
   <div class="row hp-sectors">
      <?php query_posts('post_type=sector'); ?>
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="span4" id="post-<?php the_ID(); ?>">
               <div class="wrap">
                  <a class="post-thumbnail" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                  <h2 class="bg"><a href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a></h2>
                  <?php the_excerpt(); ?>
               </div>   
            </div>
         <?php endwhile; endif; wp_reset_query(); ?>
   </div>   

<!-- promo box -->
   <div class="row promo-box"> 
      <div class="span12">
            <h2>Lorem Ipsum dolor sit amet, consecteur elit, sed do eiusmod</h2>
            <p>Lorem Ipsum dolor sit amet, consecteur elit, sed do eiusmod.</p>
            <a class="button" href="">Contact Us</a>
         </div>
   </div>  

<!-- FAQ -->
     <div class="row" id="hp-faq">
        <div class="span6">
           <h2>Why Choose a Part Time Financial Director?</h2>
           <ul class="tick">
              <li class="even"><span>Lorem ipsum dolor sit amet, consectetur adipisicing.</span></li>
              <li><span>Lorem ipsum dolor sit amet, consectetur adipisicing.</span></li>
              <li class="even"><span>Lorem ipsum dolor sit amet, consectetur adipisicing.</span></li>
              <li><span>Lorem ipsum dolor sit amet, consectetur adipisicing.</span></li>
              <li class="even"><span>Lorem ipsum dolor sit amet, consectetur adipisicing.</span></li>
           </ul>
        </div>
        
        <div class="span6">
           <h2>Financial Director FAQ</h2>
           <ul class="bullet">
              <li>Lorem ipsum dolor sit amet, consectetur adipisicing.</li>
              <li>Lorem ipsum dolor sit amet, consectetur adipisicing.</li>
              <li>Lorem ipsum dolor sit amet, consectetur adipisicing.</li>
              <li>Lorem ipsum dolor sit amet, consectetur adipisicing.</li>
              <li>Lorem ipsum dolor sit amet, consectetur adipisicing.</li>
           </ul>
        </div>
      </div>   
   

</div>

<?php get_footer(); ?>

 
<div class="post clearfloat" id="post-<?php the_ID(); ?>">
  <?php if (!is_single() ) { ?>
  <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
    <?php the_title(); ?>
    </a></h3>
  <?php } else { ?>
  
  <?php 
  // so we can exclude the post from related posts in the sidebar
  $GLOBALS['current_id'] = $post->ID; 
  ?>

  <h2>
    <?php the_title(); ?>
  </h2>
  
  <?php } ?>    
 
  <div class="entry clearfloat">
    <?php if (!is_single() && !is_home() ) { ?>
    <?php the_excerpt(); ?>
    <?php } else { ?>
    <?php the_content(); ?>
     
    <br />
	<?php wp_link_pages('before=<p>&after=</p>&next_or_number=number&pagelink=page %'); ?>
	
  <br />
  
   <?php edit_post_link('Edit post', '<p>', '</p>'); ?> 
	
    <?php } ?>
   
  </div>
  
  
   
</div>

<?php get_header();?>

<div class="postContent">
	
        <?php if(have_posts()): while( have_posts() ): the_post(); ?>
		
        
        <?php if (has_post_thumbnail()) : ?>
            <div class="postThumb">
				<div class="postImage">
                    <?php the_post_thumbnail(); ?>
					
                </div>
				<div class="postShort">
				    <p><?php echo get_the_date('l jS F, Y');?></p>
                    <?php  the_title();?>                	     
                	<?php  the_excerpt();?>
                    <a href="<?php the_permalink();?>"> Read more →</a>  					
                </div>
                
                
                
            </div>
	
		<?php else : ?>
            <div class="postThumb">
				
				<div class="postShort">
				    <p><?php echo get_the_date('l jS F, Y');?></p> 
                	<a href="<?php the_permalink();?>"><?php  the_title();?></a>       
                	<?php  the_excerpt();?>
					
                </div>
                
                
                
            </div>
		

        <?php endif;?>  
        <?php endwhile; else: endif;?>  

   
    
</div>

<div class="blogText">
        <?php previous_posts_link();?>
        <?php next_posts_link();?>        
</div>




<?php get_footer();?>




<?php get_header(); ?>

            <div class="wrap">
            <div class="left_side">
                <div class="section_header">
                    <h3>The Result</h3>
                </div>
                <div class="clr"></div><!--Clear-->
                
               <div class="content_wrap">
               <?php 
				if (have_posts()) : 
				while (have_posts()) : the_post();
			   ?>  
                    <div class="content">
                        <span><a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a><a href="<?php the_permalink() ?>" class="overlay"></a></span>                 <div class="title_content">
                        <h2><a href="<?php the_permalink() ?>"><?php echo get_the_title(); ?></a></h2>
                        <p><?php the_time('F j, Y') ?></p>
                            </div>
                    </div><!--End Content-->
                <?php endwhile;
					else :
					echo '<p>No content found</p>';
					endif;
					wp_reset_query();
				?> 
                </div>
                
                 <div class="clr" style="margin-bottom:20px;"></div><!--Clear-->
            <?php get_template_part('nav'); ?>  
			
			<div class="clr" style="margin-bottom:15px;"></div><!--Clear-->
            </div><!--End LeftSide-->
            <div class="620"></div><!--Clear-->    
           <?php get_sidebar(); ?>
		   <?php get_footer(); ?>
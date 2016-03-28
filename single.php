<?php get_header(); ?>
            <div class="wrap">
            <div class="left_side">
                <div class="section_header" style="margin-bottom: 5px;">
                    <h3><?php the_title(); ?></h3>
                </div>
                <div class="clr"></div><!--Clear-->
                
                <div class="content_wrap_single">
				
                    
					<p class="cat_p">Posted in</p><p class="cat_p"><?php the_category('<a>,</a>'); ?></p>
				<div class="sss" style="margin:0 10px;">
		
                <?php while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>


		<?php endwhile; // end of the loop. ?>
				</div>
            
<p class="tags">Tags:</p><p class="tag_p"><?php  the_tags('<p class="tags">','<a>,</a>','</p>');  ?></p>
<div class="clr"></div><!--Clear-->
					
					
					<div class="clr"></div><!--Clear-->
					<!-- Go to www.addthis.com/dashboard to customize your tools -->
					<div class="addthis_native_toolbox" style="margin:0 10px;margin-top:10px;"></div>
					
                </div><!--End Single-->
                <div class="clr" style="margin-bottom:10px;"></div><!--Clear-->
                
                <div class="section_header">
                    <h3>Related Posts</h3>
                </div>
                <div class="clr"></div><!--Clear-->
                <div class="content_wrap">
                    
                    <?php get_template_part('related'); ?>  
                    
                </div>
                
                 <div class="clr" style="margin-bottom:20px;"></div><!--Clear-->
                <div class="section_header">
                    <h3>Please Leave A Reply</h3>
                </div>
                <div class="clr"></div><!--Clear-->
				<div class="content_wrap" style="margin:10px;width:auto;">
					<?php get_template_part('comments'); ?>  
				</div><!--End Cmt-->
            </div><!--End LeftSide-->
            <div class="620"></div><!--Clear-->   
		   <?php setPostViews(get_the_ID()); ?>
           <?php get_sidebar(); ?>
		   <?php get_footer(); ?>
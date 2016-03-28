<?php get_header(); ?>
     
            <div class="wrap">
            <div class="left_side">
                <div class="section_header">
                    <h3>latest Posts</h3>
                </div>
                <div class="clr"></div><!--Clear-->
                
               <div class="content_wrap">
			   
               <?php get_template_part('post'); ?>  
			   
                </div>
                
                 <div class="clr" style="margin-bottom:20px;"></div><!--Clear-->
				 
            <?php get_template_part('nav'); ?>  
			
			<div class="clr" style="margin-bottom:15px;"></div><!--Clear-->
            </div><!--End LeftSide-->
            <div class="620"></div><!--Clear-->    
           <?php get_sidebar(); ?>
		   <?php get_footer(); ?>
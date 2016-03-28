<?php get_header(); ?>
        
            <div class="wrap">
            <div class="left_side">
                <div class="section_header">
                    <h3><?php the_title(); ?></h3>
                </div>
                <div class="clr"></div><!--Clear-->
                
                <div class="content_wrap_single">
                    <h3 style="color:#f6a818;padding:5px 10px;font-size:15px;margin-bottom:15px;">Sorry - 404 Page Not Found ;(</h3>
                </div><!--End Single-->
            </div><!--End LeftSide-->
            <div class="620"></div><!--Clear-->   
		   <?php setPostViews(get_the_ID()); ?>
           <?php get_sidebar(); ?>
		   <?php get_footer(); ?>
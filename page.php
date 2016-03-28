<?php get_header(); ?>
        
            <div class="wrap">
            <div class="left_side">
                <div class="section_header">
                    <h3><?php the_title(); ?></h3>
                </div>
                <div class="clr"></div><!--Clear-->
                
                <div class="content_wrap_single">
					<div style="width:auto;padding:10px;padding-top:0px;">
                    <?php if(have_posts()) : the_post(); the_content(); endif;?>
					</div>
                </div><!--End Single-->
            </div><!--End LeftSide-->
            <div class="620"></div><!--Clear-->   
		   <?php setPostViews(get_the_ID()); ?>
           <?php get_sidebar(); ?>
		   <?php get_footer(); ?>
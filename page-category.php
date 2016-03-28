<?php get_header(); ?>
        
            <div class="wrap">
            <div class="left_side">
                <div class="section_header" style="margin-bottom:0;">
                    <h3><?php the_title(); ?></h3>
                </div>
                <div class="clr"></div><!--Clear-->
                
                <div class="content_wrap_single">
					<div style="width:auto;padding:10px;padding-top:0px;padding-bottom:0px;">
                    <?php if(have_posts()) : the_post(); ?>
					<style>
					ul.name_h li {
					text-align: center;
					border-bottom: 1px solid #DDD;
					height: 38px;
					line-height: 38px;
					overflow: hidden;
					}
					ul.name_h li:last-child {
					border-bottom: none;
					}
					ul.name_h a:hover,ul.name_h a:visited {
					text-decoration: underline;
					}
					</style>
						<ul class="name_h"><?php
$args = array(
  'orderby' => 'name',
  'parent' => 0
  );
$categories = get_categories( $args );
foreach ( $categories as $category ) {
    echo '<li><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a></li>';
}

					endif;?>
					</ul>
					</div>
                </div><!--End Single-->
            </div><!--End LeftSide-->
            <div class="620"></div><!--Clear-->   
		   <?php setPostViews(get_the_ID()); ?>
           <?php get_sidebar(); ?>
		   <?php get_footer(); ?>
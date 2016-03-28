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
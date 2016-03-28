<p class="cat_p">Posted in</p><p class="cat_p"><?php the_category('<a>,</a>'); ?></p>
<?php if ( have_posts() )  : the_post(); ?>
				<div class="sss" style="margin:0 10px;">
                <?php the_content(); ?>
				</div>
            
<?php endif; ?>
<p class="tags">Tags:</p><p class="tag_p"><?php  the_tags('<p class="tags">','<a>,</a>','</p>');  ?></p>
<div class="clr"></div><!--Clear-->
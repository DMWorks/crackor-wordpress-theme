<?php
$tags = wp_get_post_tags($post->ID);
if ($tags) {
$first_tag = $tags[0]->term_id;
$args=array(
'tag__in' => array($first_tag),
'post__not_in' => array($post->ID),
'posts_per_page'=>9,
'caller_get_posts'=>1
);
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
while ($my_query->have_posts()) : $my_query->the_post(); ?>

					<div class="content">
                        <span><a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a><a href="<?php the_permalink() ?>" class="overlay"></a></span>                 <div class="title_content">
                        <h2><a href="<?php the_permalink() ?>"><?php echo get_the_title(); ?></a></h2>
                        <p><?php the_time('F j, Y') ?></p>
                            </div>
                    </div><!--End Content-->
<?php
endwhile;
}
wp_reset_query();
}
?>

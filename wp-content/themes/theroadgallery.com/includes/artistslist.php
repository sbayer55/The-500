<?php
$args = array(
    'post_type' => 'artists',
);
$loop = new WP_Query($args);

while($loop->have_posts()): $loop->the_post(); ?>

<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

<?php 
endwhile;
wp_reset_query();
?>

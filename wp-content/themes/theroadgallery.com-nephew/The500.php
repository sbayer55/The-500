<?php
/* template name: The 500 */
$slug = 'the-500';

$image_attr = array('class' => 'image');

$mete_query = array();

if (isset($_GET['genre'])) {
    array_push($mete_query, array(
        'key' => 'Genre',
        'value' => $_GET['genre'],
        'compare' => 'IN',
    ));
}

if (isset($_GET['color'])) {
    array_push($mete_query, array(
        'key' => 'Color',
        'value' => $_GET['cenre'],
        'compare' => 'IN',
    ));
}

if (isset($_GET['medium'])) {
    array_push($mete_query, array(
        'key' => 'Medium',
        'value' => $_GET['medium'],
        'compare' => 'IN',
    ));
}

if (isset($_GET['type'])) {
    array_push($mete_query, array(
        'key' => 'Type',
        'value' => $_GET['type'],
        'compare' => 'IN',
    ));
}

$args = array(
    'posts_per_page' => 60,
    'orderby' => 'rand',
    'tags' => $slug,
    'post_status' => 'publish',
    'meta_query' => $mete_query
);
$my_query = new WP_Query($args);

get_header(); ?>

<a id="toTop">
    <div class="topbutton ease-slower"></div>
</a>

<div style="height: 120px;"></div>




<div id="container">
    <div class="grid-sizer"></div>


    <?php if ($my_query->have_posts()) : ?>
        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>


            <div class="item">
                <div class="frame">
                    <div class="wrapper">
                        <?php the_post_thumbnail('', $image_attr); ?>
                        <div class="frame-bottom">
                            <h2><?php the_title(); ?></h2>
                            <p>
                                <?php if (strcmp(get_post_meta(get_the_ID(), 'is_sold', true), 'yes') == 0): ?>
                                    Sold
                                <?php else: ?>
                                    <?php echo 'Price: '.get_post_meta(get_the_ID(), 'Price', true) ?>
                                <?php endif; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>


        <?php endwhile; ?>
    <?php endif; ?>
</div>





















<script src="wp-content/themes/theroadgallery.com-nephew/js/masonry.js"></script>
<script type="text/javascript">
    $(window).load( function() {

        $('#container').masonry({
            "itemSelector": ".item",
            "columnWidth": ".grid-sizer",
        });

    });
</script>

<?php wp_reset_query(); ?>
<?php //get_footer(); ?>

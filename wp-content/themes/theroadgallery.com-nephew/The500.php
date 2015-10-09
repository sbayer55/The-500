<?php
/* template name: The 500 */
$slug = 'the-500';

$image_attr = array('class' => 'the-500-image');

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

<div style="height: 100px;"></div>

<div class="the-500-carousel">
    <img src="http://localhost/wp-content/uploads/2015/09/Road-Gallery-Mascot-Simon.jpg" class="the-500-carousel-image" alt="Road-Gallery-Mascot-Simon">
</div>

<div class="the-500-about">
    <h1>The 500</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis maximus urna. Praesent in venenatis nisl, et interdum magna. Morbi pellentesque eleifend urna, sit amet vestibulum nulla laoreet non. Praesent fermentum nisl sit amet lectus finibus rutrum. Donec venenatis, ante quis efficitur molestie, tellus metus commodo nibh, vitae mattis est nunc non nibh. Vivamus malesuada non mauris ut sodales. Maecenas feugiat eget ante non condimentum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
</div>


<div class="collection-row">
    <div class="collection-container">
        <div class="collection-item-wide">
            <h2>Haylee Anne</h2>
            <p>Haylee Anne is an artist living and working between Atlanta and New York. Swooning over lush National Geographic landscapes for years inspired her at an early age, alerting her subconscious that she was to be a photographer. Upon her entrance into the BFA program for Photography at Montclair State University, her intent was to hone her skills and focus successfully on travel imagery. However this training ground sparked her conscious with new ideas, themes, and image making techniques; she was inundated with a zest to create.</p>
            <p>Now, women, water, and special processes are her main dig. It is her desire as a young artist to enhance and support feminist and bodily dialogue with images that interact with people and settings that may at times appear unnerving, but lovely.</p>
        </div>
        <?php if ($my_query->have_posts()) : ?>
            <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <div class="collection-item">

                    <div class="img-frame">
                        <div class="img-wrapper">
                            <?php the_post_thumbnail('', $image_attr); ?>
                            <div class="frame-bottom">
                                <h3><?php the_title(); ?></h3>
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
    <div class="collection-btn collection-btn-left">&laquo;</div>
    <div class="collection-btn collection-btn-right">&raquo;</div>
</div>



<div class="collection-row">
    <div class="collection-container">
        <div class="collection-item-wide">
            <h2>Haylee Anne</h2>
            <p>Haylee Anne is an artist living and working between Atlanta and New York. Swooning over lush National Geographic landscapes for years inspired her at an early age, alerting her subconscious that she was to be a photographer. Upon her entrance into the BFA program for Photography at Montclair State University, her intent was to hone her skills and focus successfully on travel imagery. However this training ground sparked her conscious with new ideas, themes, and image making techniques; she was inundated with a zest to create.</p>
            <p>Now, women, water, and special processes are her main dig. It is her desire as a young artist to enhance and support feminist and bodily dialogue with images that interact with people and settings that may at times appear unnerving, but lovely.</p>
        </div>
        <?php if ($my_query->have_posts()) : ?>
            <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <div class="collection-item">

                    <div class="img-frame">
                        <div class="img-wrapper">
                            <?php the_post_thumbnail('', $image_attr); ?>
                            <div class="frame-bottom">
                                <h3><?php the_title(); ?></h3>
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
    <div class="collection-btn collection-btn-left">&laquo;</div>
    <div class="collection-btn collection-btn-right">&raquo;</div>
</div>


<div class="collection-row">
    <div class="collection-container">
        <div class="collection-item-wide">
            <h2>Haylee Anne</h2>
            <p>Haylee Anne is an artist living and working between Atlanta and New York. Swooning over lush National Geographic landscapes for years inspired her at an early age, alerting her subconscious that she was to be a photographer. Upon her entrance into the BFA program for Photography at Montclair State University, her intent was to hone her skills and focus successfully on travel imagery. However this training ground sparked her conscious with new ideas, themes, and image making techniques; she was inundated with a zest to create.</p>
            <p>Now, women, water, and special processes are her main dig. It is her desire as a young artist to enhance and support feminist and bodily dialogue with images that interact with people and settings that may at times appear unnerving, but lovely.</p>
        </div>
        <?php if ($my_query->have_posts()) : ?>
            <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <div class="collection-item">

                    <div class="img-frame">
                        <div class="img-wrapper">
                            <?php the_post_thumbnail('', $image_attr); ?>
                            <div class="frame-bottom">
                                <h3><?php the_title(); ?></h3>
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
    <div class="collection-btn collection-btn-left">&laquo;</div>
    <div class="collection-btn collection-btn-right">&raquo;</div>
</div>






















<div style="height: 100px;"></div>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>


<script>
    var foo;

    $(function() {
        var container = $('.collection-container');
        var totalWidth = 0;
        var parentWidth = container.parent().innerWidth();

        container.children().each(function(key, value) {
            totalWidth += $(value).outerWidth();
        });
        container.width(totalWidth);

        $('.collection-btn-left').click(function(clicked) {
            var myContainer = $(clicked.toElement).siblings('.collection-container');
            var xOffset = Math.min(800, -myContainer.offset().left);
            myContainer.animate({left: "+=" + xOffset}, 500, "linear");
        })
        $('.collection-btn-right').click(function(clicked) {
            var myContainer = $(clicked.toElement).siblings('.collection-container');
            var xOffset = Math.min(800, totalWidth + myContainer.offset().left - parentWidth);
            myContainer.animate({left: "-=" + xOffset}, 500, "linear");
        })
    })
</script>
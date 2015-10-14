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

<div style="height: 40px;"></div>

<!-- artist and promotions and single artwork -->
<div class="the-500-carousel">
    <div class="the-500-carousel-image" style="background-image: url('http://theroadgallery.com/wp-content/uploads/2013/11/The-Secret-of-Before-and-After-21-e1415715014193.jpg')">
    </div>
</div>

<div class="collection-row collection-row-text">
    <div class="jquery-center-vertically">
        <h1>The 500</h1>
        <!-- change font to match "we are all on a journy size and family -->
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis maximus urna. Praesent in venenatis nisl, et interdum magna. Morbi pellentesque eleifend urna, sit amet vestibulum nulla laoreet non. Praesent fermentum nisl sit amet lectus finibus rutrum. Donec venenatis, ante quis efficitur molestie, tellus metus commodo nibh, vitae mattis est nunc non nibh. Vivamus malesuada non mauris ut sodales. Maecenas feugiat eget ante non condimentum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
    </div>
</div>


<!-- social media row and add mailing list (text bellow buttons)-->


<div class="collection-row collection-row-highlight">
    <div class="jquery-center-vertically">
        <h1>Free ShippingE</h1>
        <p>This week only, if you can find the buy button we are giving the place away</p>
    </div>
</div>

<!-- saatche boxes here -->


<div class="collection-row">
    <div class="collection-container">
        <div class="collection-item-wide">
            <div class="jquery-center-vertically">
                <h2>Haylee Anne</h2>
				<!-- keep body of text to the left -->
                <p>Haylee Anne is an artist living and working between Atlanta and New York. Swooning over lush National Geographic landscapes for years inspired her at an early age, alerting her subconscious that she was to be a photographer. Upon her entrance into the BFA program for Photography at Montclair State University, her intent was to hone her skills and focus successfully on travel imagery. However this training ground sparked her conscious with new ideas, themes, and image making techniques; she was inundated with a zest to create.</p>
				<!-- remove second paragraph pissible to show on the artist page -->
                <p>Now, women, water, and special processes are her main dig. It is her desire as a young artist to enhance and support feminist and bodily dialogue with images that interact with people and settings that may at times appear unnerving, but lovely.</p>
            </div>
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
            <div class="jquery-center-vertically">
                <h2>Haylee Anne</h2>
                <p>Haylee Anne is an artist living and working between Atlanta and New York. Swooning over lush National Geographic landscapes for years inspired her at an early age, alerting her subconscious that she was to be a photographer. Upon her entrance into the BFA program for Photography at Montclair State University, her intent was to hone her skills and focus successfully on travel imagery. However this training ground sparked her conscious with new ideas, themes, and image making techniques; she was inundated with a zest to create.</p>
                <p>Now, women, water, and special processes are her main dig. It is her desire as a young artist to enhance and support feminist and bodily dialogue with images that interact with people and settings that may at times appear unnerving, but lovely.</p>
            </div>
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
            <div class="jquery-center-vertically">
                <h2>Haylee Anne</h2>
                <p>Haylee Anne is an artist living and working between Atlanta and New York. Swooning over lush National Geographic landscapes for years inspired her at an early age, alerting her subconscious that she was to be a photographer. Upon her entrance into the BFA program for Photography at Montclair State University, her intent was to hone her skills and focus successfully on travel imagery. However this training ground sparked her conscious with new ideas, themes, and image making techniques; she was inundated with a zest to create.</p>
                <p>Now, women, water, and special processes are her main dig. It is her desire as a young artist to enhance and support feminist and bodily dialogue with images that interact with people and settings that may at times appear unnerving, but lovely.</p>
                <span class="collection-see-more">See Full Collection ></span>
            </div>
        </div>
        <?php if ($my_query->have_posts()) : ?>
            <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <div class="collection-item">

                    <div class="img-frame">
                        <div class="img-wrapper">
                            <?php the_post_thumbnail('', $image_attr); ?>
                            <div class="frame-bottom">

                                <!-- Make one liners -->

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








<!--- row with 3 columns, each with a header and text -->
<!-- row with background image and text, saatchiart header-->
<!-- row with 2 tile layout, see saatchiart.com, 1 image for now -->













<div style="height: 100px;"></div>
<?php wp_reset_query(); ?>


<!-- Add here go to like and shopping cart -->
<?php get_footer(); ?>


<script>
    var foo;

    $(function() {
        var container = $('.collection-container');
        var totalWidth = 0;
        var parentWidth = container.parent().innerWidth();
        var slideAmount = parentWidth / 2;

        container.children().each(function(key, value) {
            totalWidth += $(value).outerWidth();
        });
        container.width(totalWidth);
        foo = container;

        //Add some code to stop double clicking:

        $('.collection-btn-left').click(function(clicked) {
            var myContainer = $(clicked.toElement).siblings('.collection-container');
            var parentPadding = parseInt(myContainer.parent().css('padding-left').replace('px', ''));
            var xOffset = Math.min(slideAmount, -myContainer.offset().left + parentPadding);
            myContainer.animate({left: "+=" + xOffset}, 500, "linear");
        })
        $('.collection-btn-right').click(function(clicked) {
            var myContainer = $(clicked.toElement).siblings('.collection-container');
            var viewWidth = myContainer.parent().innerWidth();
            var lastChild = myContainer.children().last();
            var parentPadding = parseInt(myContainer.parent().css('padding-left').replace('px', ''));
            var contentWidth = lastChild.position().left + lastChild.outerWidth() + parentPadding;
            var maxOffset = contentWidth - viewWidth;
            var xOffset = Math.min(slideAmount, maxOffset + myContainer.offset().left);
            myContainer.animate({left: "-=" + xOffset}, 500, "linear");
        })

        $('.jquery-center-vertically').each(function(key, value) {
            //$(value).css('background-color', '#F00');
            var parentHeight = $(value).parent().innerHeight() / 2;
            var marginTop = parentHeight - ($(value).innerHeight() / 2);
            console.log('top: ' + marginTop);
            $(value).css('margin-top', marginTop + 'px');
        })
    })
</script>
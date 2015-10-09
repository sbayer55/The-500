<?php
/**
 * Created by PhpStorm.
 * User: steven
 * Date: 9/29/2015
 * Time: 10:36 PM
 */?>

<!--img src="http://placekitten.com/650/450" class="image"-->
                        <a class="overlay" href="#">
                            <h3 class="title"></h3>
                            <div class="description">
                                <p>
                                    <?php if (strcmp(get_post_meta(get_the_ID(), 'is_sold', true), 'yes') == 0): ?>
    Sold
<?php else: ?>
    <?php echo 'Price: '.get_post_meta(get_the_ID(), 'Price', true) ?>
<?php endif; ?>
</p>
</div>
</a>
?>
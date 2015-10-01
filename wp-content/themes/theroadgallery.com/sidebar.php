<!-- sidebar -->

<aside>

<?php if ( is_active_sidebar( 'Widget Area 1' ) ) : ?>
	<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'Widget Area 1' ); ?>
	</div>
<?php endif; ?>

</aside>

<!-- /sidebar -->
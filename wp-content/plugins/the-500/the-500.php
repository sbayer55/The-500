<?php
/*
 * Plugin Name: The 500
 * Plugin URI: www.design-expression.com
 * Description: A customer plug-in to manage The 500 content
 * Author: Steven Bayer
 * Version: 0.0.1
 * Author URI: www.design-expression.com/about
 */
defined('ABSPATH') or die('Security Blocked');

add_action('admin_menu', 'get_menu_item');
function get_menu_item() {
	add_options_page('The 500 Action Page', 'The 500 Content Management', 'manage_options', __FILE__, 'on_load');
}


function on_load() {
	global $wpdb;

	$rows = get_option('the_500_rows');

	if (isset($_POST['row_title']) && $_POST['row_title'] == 'reset') {
		update_option('the_500_rows', [
			['row_type' => 'collection', 'collection_name' => 'Haylee Anne',
				'meta_filters' => ['Color' => '', 'Genre' => '', 'is_sold' => '', 'Medium' => '', 'Price' => '', 'Type' => '']],
			['row_type' => 'collection', 'collection_name' => 'Steven Bayer',
				'meta_filters' => ['Color' => '', 'Genre' => '', 'is_sold' => '', 'Medium' => '', 'Price' => '', 'Type' => '']],
		]);
	}

	if (isset($_POST['selected_row']) && isset($_POST['selected_posts'])) {
		$message = $_POST['selected_row'] . " => " . json_encode($_POST['selected_posts']);
	}

	?>
	<div class="wrap">
		<h2>The 500 content manager</h2>
		<h3><?php echo $message ?></h3>

		<form action="" method="post">
			<input type="text" name="row_title" placeholder="Type 'reset' to reset the plugin options" />
			<input type="submit" name="search" value="Search" class="button-primary" />
		</form>

		<form action="" method="post">
			<table class="widefat" style="margin: 20px 0px;">
				<thead>
				<tr>
					<th>Row Type</th>
					<th>Collection Name</th>
					<th>Selected</th>
				</tr>
				</thead>
				<tfoot>
				<tr>
					<th>Row Type</th>
					<th>Collection Name</th>
					<th>Selected</th>
				</tr>
				</tfoot>
				<tbody>
				<?php

				foreach ($rows as $key => $row) {
					echo "<tr>";
					echo "<td>".$row['row_type']."</td>";
					echo "<td>".$row['collection_name']."</td>"; ?>
					<td><input type="radio" name="selected_row" value="<?php echo $key ?>"></td>
					<?php echo "</tr>";
				}

				?>
				</tbody>
			</table>

			<div style="display: block; font-size: 144px; text-align: center; line-height: 144px; height: 144px">&uArr;</div>

			<table class="widefat" style="margin: 20px 0px;">
				<thead>
				<tr>
					<th>Image</th>
					<th>Post ID</th>
					<th>Post name</th>
					<th>Selected</th>
				</tr>
				</thead>
				<tfoot>
				<tr>
					<th>Image</th>
					<th>Post ID</th>
					<th>Post name</th>
					<th>Selected</th>
				</tr>
				</tfoot>
				<tbody>
				<?php

				$result = $wpdb->get_results("SELECT ID, post_title, post_type FROM $wpdb->posts WHERE post_type = 'post'");

				foreach ($result as $key => $post) {
					echo "<tr>";
					echo "<td>".get_the_post_thumbnail($post->ID, 'thumbnail')."</td>";
					echo "<td>".$post->ID."</td>";
					echo "<td>".$post->post_type."</td>"; ?>
					<td><input type="checkbox" name="selected_posts[]" value="<?php echo $post->ID ?>"> </td>
					<?php echo "</tr>";
				}

				?>
				</tbody>
			</table>

			<input type="submit" name="update_posts" value="Update" class="button-primary" />
		</form>
	</div>
<?php
}
?>



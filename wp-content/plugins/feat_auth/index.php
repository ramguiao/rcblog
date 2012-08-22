<?php

/*
	Plugin Name: Featured Author Plugin
	Description: Manage featured author
	Version: 1.0
	Author: Manila Wev Development Team
*/

class FeatAuth{
	
	static function install(){
		global $wpdb;
		$table_name = $wpdb->prefix."featured_author";
		$sql = "CREATE TABLE $table_name(
				ID int AUTO_INCREMENT NOT NULL PRIMARY KEY,
				author_id int NOT NULL
			);";
		$wpdb->query($sql);
	}
	static function uninstall(){
		global $wpdb;
		$table_name = $wpdb->prefix."featured_author";
		$wpdb->query("DROP TABLE IF EXISTS $table_name");
	}

	function my_plugin_menu() {
		add_options_page( 'Featured Author Options', 'Featured Author Settings', 'manage_options', 'featured-author-settings', array('FeatAuth','my_plugin_options') );
	}

	function my_plugin_options() {
		global $wpdb;
		if ( !current_user_can( 'manage_options' ) )  { 
			wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
		}
		?>
		<link rel="stylesheet" href="../wp-content/plugins/feat_auth/css/style.css" />
		<div class="wrap">
			<h3>Authors</h3>
			<div id="featured">
				<form method="post">
					<ul>
					<?php
						$feat_tbl = $wpdb->prefix."featured_author";
						$table_name = $wpdb->prefix."users";
						$table_name2 = $wpdb->prefix."usermeta";
						$author_res = $wpdb->get_results("SELECT * FROM $table_name");
						$count = 0;
						foreach($author_res as $author){
							$valid = $wpdb->get_row("SELECT * FROM $feat_tbl where author_id = '$author->ID'");
							if(!$valid){
							$pic = $wpdb->get_row("SELECT * FROM $table_name2 where meta_key='userphoto_image_file' and user_id='$author->ID'");
							?>
							<li>
								<label>
								<input type="checkbox" name="author[]" value="<?php echo $author->ID ?>" />
								<?php
								if($pic->meta_value=="" or empty($pic->meta_value)){
									?>
									<img src="../wp-content/uploads/userphoto/default.gif" width="25" height="25" />
									<?php
								}else{
									?>
									<img src="../wp-content/uploads/userphoto/<?php echo $pic->meta_value ?>" width="25" height="25" />
									<?php
								}
								?>
								<?php echo $author->user_nicename; ?>
								<label>
							</li>
							<?php
							 $count++;
						}
					}
						
					?>
					</ul><br />
					<input type="submit" name="set_featured" value="Set as Featured" />
				</form><br />
				<h3>Featured Authors</h3>
				<form method="post">
					<ul>
					<?php
						$feat_tbl = $wpdb->prefix."featured_author";
						$table_name = $wpdb->prefix."users";
						$table_name2 = $wpdb->prefix."usermeta";
						$count2 = 0;
						$author_res = $wpdb->get_results("SELECT *,a.ID as aid FROM $table_name a RIGHT JOIN $feat_tbl b on a.ID=b.author_id");
						foreach($author_res as $author){
							$count2++;
							$pic = $wpdb->get_row("SELECT * FROM $table_name2 where meta_key='userphoto_image_file' and user_id='$author->aid'");
							?>
							<li>
								<label>
								<input type="checkbox" name="author2[]" value="<?php echo $author->aid ?>" />
								<?php
								if($pic->meta_value=="" or empty($pic->meta_value)){
									?>
									<img src="../wp-content/uploads/userphoto/default.gif" width="25" height="25" />
									<?php
								}else{
									?>
									<img src="../wp-content/uploads/userphoto/<?php echo $pic->meta_value ?>" width="25" height="25" />
									<?php
								}
								?>
								<?php echo $author->user_nicename; ?>
								<label>
							</li>
							<?php
						}
					?>
					</ul><br />
					<input type="submit" name="rem_featured" value="Remove as Featured" />
				</form>
			</div>
		</div>
		<?php
		if(isset($_POST['set_featured'])){
			$feat = new FeatAuth();
			echo $feat->set_featured($count);
		}
		if(isset($_POST['rem_featured'])){
			$feat = new FeatAuth();
			echo $feat->remove_featured($count2);
		}
	}
	function set_featured($total = 0){
		global $wpdb;
		$feat_tbl = $wpdb->prefix."featured_author";
		for($x=0;$x<$total;$x++){
			$author_id = $_POST['author'][$x];
			if(!empty($author_id) and $author_id!=""){
				$wpdb->query("INSERT INTO $feat_tbl VALUES ('','$author_id')");
			}
		}
		if($x==$total){
			?>
			<script language="JavaScript">
				alert("Process Successful!");
				window.location.reload(true);
			</script>
			<?php
		}
	}
	function remove_featured($total = 0){
		global $wpdb;
		$feat_tbl = $wpdb->prefix."featured_author";
		for($x=0;$x<$total;$x++){
			$author_id = $_POST['author2'][$x];
			if(!empty($author_id)){
				$wpdb->query($wpdb->prepare("DELETE FROM rc_featured_author where author_id = '$author_id'"));
			}
		}
		if($x==$total){
			?>
			<script language="JavaScript">
				alert("Process Successful!");
				window.location.reload(true);
			</script>
			<?php
		}
	}
}
 // INSTALLATION
register_Activation_hook(__FILE__, array("FeatAuth","install"));
// UNINSTALL
register_Deactivation_hook(__FILE__, array("FeatAuth","uninstall"));
//ADD OPTION TO ADMIN PAGE
add_action('admin_menu', array('FeatAuth','my_plugin_menu'));



?>
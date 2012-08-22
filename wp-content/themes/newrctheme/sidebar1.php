<div class="aside five columns">



	<div class="seven columns">



		<div class="aside1">



			<div class="topics">



				<ul id="topics">



					<?php if ( !function_exists('dynamic_sidebar')



						        || !dynamic_sidebar() ) : ?>



					



					<?php endif; ?>



				</ul>



			</div>



			<!-- eof topics -->



			<!-- helveticaLTStd Light -->



		<div class="contributors">



			<h3><span>Contributors</span></h3>



			<?php



				global $wpdb;



			?>



			<div class="authors">

				<div style="width: 90%; margin: auto">

						<ul>



						<?php



						$feat_res = $wpdb->get_results("SELECT * from wp_featured_author");



							foreach($feat_res as $feat){



							$myrows = $wpdb->get_results("SELECT * from wp_users where ID='$feat->author_id'");



							foreach($myrows as $results){



								?>



								<li>



									<a href="?author=<?php echo $results->ID ?>"><?php userphoto($results->ID); ?></a>



									<div class="username"><?php echo $results->user_nicename;  ?></div>



								</li>



								<?php



							}



							}



						?>



					</ul>

					</div>

				</div>



			</div>



		<!-- eof contributors -->



		</div>



		<div class="aside1a show-on-desktops">



			<div class="banner">



				<img src="<?php bloginfo("template_directory") ?>/images/banner.jpg" alt="banner" />



			</div>



					<!-- eof banner -->



			</div>



		</div>
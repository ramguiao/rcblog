<?php get_header(); ?>

	<!-- start of body -->

	<?php

		global $current_user;

    	global $wp_query;

    	global $post;

	?>

	<div class="row">

		<div class="maincontent seven columns">



			<ul>

			<?php

			$args = array( 'numberposts' => 1, 'category' => 3);

			$myposts = get_posts( $args );

			$feat_id = 0;

			if(!$myposts){

				$args = array( 'numberposts' => 1, 'category' => "-3");

				$myposts = get_posts( $args );

			}

			foreach( $myposts as $post ) : setup_postdata($post); 

				$thePostID = $wp_query->post->ID;

				$postdata = get_post($thePostID, ARRAY_A);

				$authorID = $postdata['post_author'];

				$feat_id = $post->ID;

			?>

			

			<div class="featured featured-homapage-img">

				<a href="<?php the_permalink() ?>">

				<?php

				if ( has_post_thumbnail() ) {

					the_post_thumbnail();

				}else{

					?>

				<img src="<?php bloginfo("template_directory") ?>/images/featuredimage.jpg" alt="feautured image" /> <!-- place featured image here -->



					<?php

				} 

				?>

				</a>

				<h2><a href="<?php the_permalink(); ?>"><?php the_title();  ?></a></h2>

				<div class="metadata">

					<ul>

						<li>

							<?php echo userphoto(get_the_author_id()); ?>

						</li>

						<li class="author">

							<?php the_author_posts_link(); ?>

						</li>

						<li class="date">|  <?php the_date();  ?></li>

					</ul>

				</div>

				<article class="excerpt">

					<p><?php the_content('Read more...'); ?></p>

				</article>

			</div> 

			<div class="content-footer"> </div>	

			<?php endforeach; ?> 

				<!-- eof featured -->

			<div class="homeposts">

			 <?php 

			 if(!$myposts){

				$ar=array(

			 		"category__not_in" => array(3)

				 );

			 }else{

				 $ar=array(

			 		"category__not_in" => array(3),

			 		"post__not_in" => array($feat_id)

				 );

			 }

			 $custom_loop = new WP_Query($ar);

			 if ($custom_loop->have_posts()) : while ($custom_loop->have_posts()) : $custom_loop->the_post();

			 	$thePostID = $wp_query->post->ID;

				$postdata = get_post($thePostID, ARRAY_A);

				$a = $postdata['post_author'];

				

			 ?>



		<section class="posts" id="post-<?php the_ID(); ?>">

					<h2>

						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

					</h2>

					<div class="metadata">

						<ul>

							<li>

								

							<?php echo userphoto(get_the_author_id()); ?>	<!-- place author images here -->

							</li>

							<li class="author">

								<?php the_author_posts_link(); ?>

							</li>

							<li class="date">|

								<?php echo the_date('l, F j, Y');  ?> at <?php the_time() ?>

							</li>

						</ul>

					</div>

					<div class="postimage homepage-post-image">

						<a href="<?php the_permalink() ?>">

				<?php

				if ( has_post_thumbnail() ) {

					the_post_thumbnail();

				}else{

					?>

				<img src="<?php bloginfo("template_directory") ?>/images/featuredimage.jpg" alt="feautured image" /> <!-- place featured image here -->



					<?php

				} 

				?>

				</a><!-- place post image here --> 

					</div>

					<div class="post-footer"> </div>

					<article class="excerpt">

						<p class="readmore">

							<?php the_content('Read more...'); ?>

						</p>

					</article>

					  <footer class="postmetadata">

          <?php the_tags('Tags: ', ', ', '<br />'); ?>

       

        

        </footer>

  

				</section>

		



    <?php endwhile; ?>





    <?php else : ?>

    	<?php

    		if($feat_id==0){

    			?>

    			<div class="error-msg">Error: No posts found</div>

    			<?php

    		}

    	?>



    <?php endif; ?>

			</div>

			<!-- end of homepost --><br><br>

			<?php

			next_posts_link('Go to next page...');

			previous_posts_link('Go to prev page...');  

		?>

		</div>

		<!-- end of main content -->



		<?php get_sidebar(); ?>

<?php get_footer(); ?>
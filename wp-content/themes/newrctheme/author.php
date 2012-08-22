<?php get_header(); ?>
<div class="row">
    <div class="maincontent seven columns">
	<?php
		$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $_GET['author_name']) : get_userdata($_GET['author']);
	?>
    <div class="featured">
        <h2>
        	<a href="">
        		<?php
        			if(!empty($curauth->first_name) and !empty($curauth->last_name)){
        				echo ucwords($curauth->first_name." ".$curauth->last_name);
        			}else{
        				echo ucwords($curauth->nickname);
        			}
        		?>
    	    	</a>
    		</h2>
  	 	    <article class="excerpt author-page-img">
         	 <p> 
         	 	<?php echo get_avatar( $curauth->ID, $size = '100' ); ?>
         	 	<?php
         	 		if(!empty($curauth->description)){
         	 			echo $curauth->description;
         	 		}else{
         	 			echo "<div class='error-msg' style='width: 70%'>No description for this author</div>";
         	 		}
         	 	?>
         	 </p>
        	</article>
        	<hr>
        		<strong>
        		Posts by 
        		<?php if(!empty($curauth->first_name) and !empty($curauth->last_name)){
        			echo ucwords($curauth->first_name." ".$curauth->last_name);
        		}else{
        			echo ucwords($curauth->nickname);
        		} ?> 
        	</strong><br><br>
        		<?php
        		global $post;
				$args = array( 'numberposts' => 5,"author" => $curauth->ID);
				$myposts = get_posts( $args );
				if($myposts){
				?>
				<ul class="ul-author-post">
				<?php
				
				foreach( $myposts as $post ) :	setup_postdata($post); ?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endforeach; ?>
				</ul>
				<?php
				}else{
					?>
					<div class='error-msg'>No posts yet by this author</div>
					<?php
				}
        		?>
        		
    	  </div>
		<div class="content-footer"></div> 
	</div>
	<?php get_sidebar(); ?>
	<?php get_footer();?>
</div>
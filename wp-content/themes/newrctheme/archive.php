<?php get_header(); ?>
 <div class="row">
    <div class="maincontent seven columns">

  <?php if (have_posts()) :  ?>
    <div class="featured">
        <h2><a href="<?php the_permalink(); ?>"><?php single_cat_title(); ?> Posts</a></h2>
        <article class="excerpt">
          <p>
            <ul>
              <?php
              while (have_posts()) : the_post(); ?>
              <article <?php post_class() ?>>
              <li><h6 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h6></li>
              </article>

              <?php endwhile; ?>
            </ul>
          </p>
        </article>
      </div> 
      <div class="content-footer"> </div> 
      <?php  endif; ?>
      </div>
  <?php get_sidebar(); ?>
<?php get_footer(); ?>
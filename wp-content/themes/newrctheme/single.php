<?php get_header(); ?>

<div class="row">

    <div class="maincontent seven columns">

     

  <?php if (have_posts()) : while (have_posts()) : the_post();

        $thePostID = $wp_query->post->ID;

        $postdata = get_post($thePostID, ARRAY_A);

        $authorID = $postdata['post_author'];

  ?>

    <div class="featured">

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <div class="metadata">

          <ul>

            <li>

              <a href="">

                <?php echo userphoto($authorID); ?>

              </a>

            </li>

            <li class="author">

              <?php the_author_posts_link(); ?>

            </li>

            <li class="date"><?php the_date(); ?></li>

          </ul>

        </div>

        <article class="excerpt">

          <p><?php the_content(); ?></p>

        </article>

         <article <?php post_class() ?> id="post-<?php the_ID(); ?>">

      

        <?php comments_template(); ?>

      </div> 

      

   

   

<div class="content-footer"> </div> 

  <?php endwhile; endif; ?>

   </div>

  

<?php get_sidebar(); ?>

 

<?php get_footer(); ?>

 </div>

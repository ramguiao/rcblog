<?php get_header(); ?>
<div class="row">
    <div class="maincontent seven columns">
 <div class="featured">
   <h3>Search Results:</h3><br>
  <?php if (have_posts()){
        while (have_posts()){
          the_post();
  ?>
   
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="metadata">
          <ul>
            <li>
              <a href="">
                <?php echo get_avatar( $authorID, $size = '25' ); ?> <!-- place author image here -->
              </a>
            </li>
            <li class="author">
              <?php the_author_posts_link(); ?>
            </li>
            <li class="date"><?php the_date(); ?></li>
          </ul>
        </div>
        <article class="excerpt">
          <p><?php the_excerpt("read more..."); ?></p>
        </article>
       
    <hr>
  <?php }} else{
    ?>
    <div class="error-msg"><strong><?php echo $_GET['s'] ?></strong> - No results found for this query</div>
    <div class="search">
      <?php
      get_search_form();
      ?>
    </div>
    <?php
  } ?>
    </div> 
      
   
   
<div class="content-footer"> </div> 
   </div>
  
<?php get_sidebar(); ?>
 
<?php get_footer(); ?>
 </div>
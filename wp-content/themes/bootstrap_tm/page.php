
<?php get_header(); ?>

  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <?php if (have_posts()) { 
            while( have_posts() ) : the_post(); ?> 
            <div class="page-header">
              <h1> 
              <?php the_title(); ?>
              </h1>
            </div>
            <?php the_content(); ?>
        <?php endwhile; 
        } else { ?>
        <h3>No content here</h3>
        <?php } ?>
      </div>
    

     <?php get_sidebar(); ?>

  </div> 

<?php get_footer(); ?>



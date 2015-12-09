
<?php get_header(); ?>

  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="page-header">
          <h1> 
          <?php wp_title(''); ?>
          </h1>
        </div>
       
        <?php if (have_posts()) { 
            while( have_posts() ) : 
              the_post(); 
        ?> 
          <article class="post">
             <h2> <a href="<?php the_permalink(); ?>"><?php the_title(); ?>  </a> </h2>
             <p><em>
                By <?php the_author(); ?> 
                on <?php echo the_time('l, F jS, Y'); ?>
                <br>
                <small>in <?php the_category(', ') ?>.</small> 
                <br/>
             </em></p>
             <p class="text-right"> <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></p>

             <?php the_excerpt(); ?>
              <hr>

          </article>
             <?php endwhile; // endwhile ?>
        <?php } else { ?>
        <h3>No content here</h3>
        <?php } ?>
      </div>
    

     <?php get_sidebar('blog'); ?>

  </div> 

<?php get_footer(); ?>



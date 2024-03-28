<?php get_header(); ?>

<div id="primary">
     <div id="main">
          <div class="container">
               <?php 
               while(have_posts() ): 
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header>
                       <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>  
                       <div class="meta-info">
                                   <p>By <span> <?php the_author_posts_link(); ?></span></p>
                                   <p>Categories: <?php echo the_category(' ');  ?> </p>
                                   <p>Tags: <?php the_tags('', ', '); ?></p>
                                   <p><span> <?php get_the_date(); ?></span></p>
                              </div>
                    </header>                      
                    <div class="content">
                         <?php the_excerpt(); ?>
                    </div>  
                    </article>

               <?php

               if (comments_open() || get_comments_number()) {
                    comments_template();
               }

               endwhile;
               ?>
          </div>
     </div>
</div>

<?php get_footer(); ?>
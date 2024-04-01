<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
     <header>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>  
          <?php if('post' == get_post_type()) : ?>
          <div class="meta-info">
                    <p>By <span> <?php the_author_posts_link(); ?></span></p>
                    <p>Categories: <?php echo the_category(' ');  ?> </p>
                    <p>Tags: <?php the_tags('', ', '); ?></p>
                    <p><span> <?php get_the_date(); ?></span></p>
               </div>
               <?php endif; ?>
     </header>      
     <div class="content">
          <?php the_excerpt(); ?>
     </div>                
          
</article>
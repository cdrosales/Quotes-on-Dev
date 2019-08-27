<?php get_header(); ?> 

<section>

<main>
<div class="categoryPageTitle"> Author: <?php echo get_the_author(); ?> </div>

            <?php if( have_posts() ): 

            while ( have_posts() ): 
                the_post();?> 
            

                <div class="journalTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>


                <span class="postAuthor"><?php echo 'by ' . get_the_author(); ?></span>

  
                <?php the_content();?>
 
            <?php endwhile; ?>  
            </div>
</main>
</section>    


        <?php else : ?>
            <p>No posts found</p>
    <?php endif; ?>
    

<?php get_footer(); ?>

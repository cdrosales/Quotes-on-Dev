<?php get_header(); ?> 

<section>

<main>
    <div class="categoryPageTitle"> Tags: <?php echo single_tag_title() ?> </div>

            <?php if( have_posts() ): 

            while ( have_posts() ): 
                the_post();?> 
            

                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

                <span class="postAuthor"><?php echo 'by ' . get_the_author(); ?></span>
          
                <?php the_content();?>
            
            <?php endwhile; ?>  
            <?php else : ?>
            <p>No posts found</p>
             <?php endif; ?>
    </div>
</main>
    

<?php get_footer(); ?>

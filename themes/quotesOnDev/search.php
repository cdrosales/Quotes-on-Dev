<?php get_header('white'); ?> 


<section class="resultsPage">
	<i class="fas fa-quote-left"></i>

    <div class="about">



        <div class="title"> Search results for: </div>


        <div class="searchContent">
            <?php if( have_posts() ): 
            while ( have_posts() ): 
                the_post();?> 

            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> 
            
            <div class="resultsInfo">
            <?php echo wp_trim_words( get_the_content(), 40, ' [...]' );?>
            </div>
            


            <?php endwhile; ?> 

            <?php the_posts_navigation(); ?> 

            <?php else : ?>
                <p>No posts found</p>
            <?php endif; ?>
        </div>    
            
                
		
    </div>

	<i class="fas fa-quote-right"></i>


</section>


    



<?php get_footer(); ?>
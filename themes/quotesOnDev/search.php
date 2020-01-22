<?php get_header('white'); ?> 


<section class="resultsPage">
	<i class="fas fa-quote-left"></i>

    <div class="about">

        <div class="title"> Search results for: <p class="searchValue"></p> </div>

        <div class="searchContent">
            <?php if( have_posts() ): 
            while ( have_posts() ): 
                the_post();?> 
                

            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> 
            
            <div class="resultsInfo">
            <?php echo get_the_content();?>
            </div>
            


            <?php endwhile; ?> 

            <p><?php next_posts_link(); ?></p>
	        <p><?php previous_posts_link(); ?></p> 

            <?php else : ?>
                <p>No posts found</p>
            <?php endif; ?>
        </div>    
            
                		
    </div>

	<i class="fas fa-quote-right"></i>


</section>


<?php get_footer(); ?>
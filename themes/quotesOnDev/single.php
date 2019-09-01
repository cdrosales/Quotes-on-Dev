<?php get_header(); ?> 

<section class="errorPage">
	<i class="fas fa-quote-left"></i>

    <div class="about">

        <div class="title"> Author: <?php echo the_title() ?>  </div>


        <div class="searchContent">
            <?php if( have_posts() ): 
            while ( have_posts() ): 
                the_post();?> 

            
            <div class="catInfo">
                <?php echo get_the_content();?>
                <h3><a href="<?php the_permalink(); ?>">-<?php the_title(); ?></a></h3>

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

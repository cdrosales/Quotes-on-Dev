<?php
/**
 * The main template file.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

    <section class="homePage">



        <div class="quotations">
            <i class="fas fa-quote-left"></i>
            <i class="fas fa-quote-right"></i>
        </div>
        


        <div class="quotesContainer">
            <?php 
            $args = array(
                'orderby' => 'rand',
                'posts_per_page' => '1'
            );
            $the_firstQuote = new WP_Query( $args ); ?>
            
            <?php if ( $the_firstQuote->have_posts() ) : ?>
                <?php while ( $the_firstQuote->have_posts() ) : $the_firstQuote->the_post(); ?>
                <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>

        <div class="quoteData">
            <div class="author"> - <?php the_title(); ?>,</div>
            <div class="source"></div>
            </div>

    <button class="showMeBTN">Show me another!</button> <h2>Most Used Categories</h2>


<ul class="errorCategories">
<?php wp_list_categories( array(
    'title_li'=> __( '' ),
    'orderby'=> 'name',
    'show_count' => true,
)); ?> 
</ul>








<?php get_footer(); ?>

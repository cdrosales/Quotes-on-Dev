<?php
/**
 * The main template file.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>


<section class="homePage">

<i class="fas fa-quote-left"></i>

    <div class="quotes">

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

    </div>

<i class="fas fa-quote-right"></i>


</section>

<?php $custom = get_post_custom();
$quoteSource = $custom[_qod_quote_source][0];
?> 

        <div class="quoteData">
            <span>-</span><div class="author"><?php the_title();?></div>
            <span>,</span><div class="source"><?php echo $quoteSource ?></div>
        </div>

<div class="buttonHome"><button class="showMeBTN">Show me another!</button></div>





<?php get_footer(); ?>

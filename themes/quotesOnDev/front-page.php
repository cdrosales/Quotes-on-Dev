<?php
/**
 * The main template file.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

<div class="logo">
    <img src="<?php echo get_template_directory_uri() . '/assets/qod-logo.svg'; ?>"/>
</div>

<?php 

$args = array(
    'orderby' => 'rand',
    'posts_per_page' => '1'
);
$the_firstQuote = new WP_Query( $args ); ?>
 
<?php if ( $the_firstQuote->have_posts() ) : ?>
 
    <?php while ( $the_firstQuote->have_posts() ) : $the_firstQuote->the_post(); ?>
    <div class="quotesContainer"><?php the_content(); ?></div>
    <?php endwhile; ?>
 
<?php endif; ?>

    <div class="author"> <?php the_title(); ?> </div>
    <div class="source"></div>

<button class="showMeBTN">Show me another!</button>


<?php get_footer(); ?>

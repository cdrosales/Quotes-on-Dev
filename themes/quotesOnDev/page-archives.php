<?php
/**
 * The main template file.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>


        <div class="quotations">
            <i class="fas fa-quote-left"></i>
            <i class="fas fa-quote-right"></i>
        </div>
        

        <div class="quoteData">
            <div class="author"> - <?php the_title(); ?>,</div>
            <div class="source"></div>
            </div>



Quote Authors
<?php
$posts = new WP_Query( array( 
    'post_type' => 'post', 
    'post_status' => 'publish', 
    'posts_per_page' => -1
));

if ( $posts->have_posts() ) :
?>

  <ul>
    <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
      <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endwhile; ?>
  </ul>

<?php endif; ?>




Categories
<ul class="errorCategories">
<?php wp_list_categories( array(
    'title_li'=> __( '' ),
    'orderby'=> 'name',
    'show_count' => true,
)); ?> 
</ul>


Tags
<?php 
echo '<div class="tags">';


$tags = get_tags();
foreach ( $tags as $tag ) {
	$tag_link = get_tag_link( $tag->term_id );
        
	echo '<a href=' . $tag_link . '>';
	echo $tag->slug . '</a>';
}
echo '</div>';
 ?>





<?php get_footer(); ?>

<?php get_header(); ?>

<section class="archivesPage">

<i class="fas fa-quote-left"></i>

    <div class="archives">

        <div class="title"><?php the_title();?></div>

        <div class="subTitles">Quote Authors</div> 

          <div class="archivesAuthors">
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
              </div>




            <div class="subTitles">Categories</div> 

              <ul class="archivesCategories">
              <?php wp_list_categories( array(
                  'title_li'=> __( '' ),
                  'orderby'=> 'name',
              )); ?> 
              </ul>


            <div class="subTitles">Tags</div> 

              <?php 
              echo '<div class="archivesTags">';


              $tags = get_tags();
              foreach ( $tags as $tag ) {
                $tag_link = get_tag_link( $tag->term_id );
                echo '<p>';
                echo '<a href=' . $tag_link . '>';
                echo $tag->slug . '</a>';
                echo '</p>';

              }
              echo '</div>';
              ?>
      </div>


<i class="fas fa-quote-right"></i>


</section>

        
<?php get_footer(); ?>

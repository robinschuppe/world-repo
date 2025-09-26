
<?php get_header();?>

<main>
     <div class = "postContainer">
    <h2>News</h2>
    <?php
              $args = array(
                'post_type' => 'news',
                'post_status' => 'publish',
                'posts_per_page' => 3,
                'paged' => $paged
              );
              $works = new WP_Query($args);

              
            ?>
            <div class="postCard">
                <?php if ($works->have_posts()) :
                while ($works->have_posts()) :
                  $works->the_post();
                ?>
                <div class="postContent"><b class="postTitle"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></b></div>
            <?php
              endwhile;
              else :
              echo '<p class="font-size: 16px; text-align: center">Not Found</p>';
              wp_reset_postdata();
            endif;
            ?>
            </div>
              <a href = "<?php echo home_url('/new');?>" class = "viewMoreBtn">view more</a>
          </div>
<div class = "postContainer">
  <h2>FAQs</h2>
  <?php
              $args = array(
                'post_type' => 'faqs',
                'post_status' => 'publish',
                'posts_per_page' => 3,
                'paged' => $paged
              );
              $works = new WP_Query($args);

              
            ?>
            <div class="postCard">
                <?php if ($works->have_posts()) :
                while ($works->have_posts()) :
                  $works->the_post();
                  ?>
                <div class="postContent"><b class = "postTitle"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></b></div>
            <?php
              endwhile;
              else :
              echo '<p class="font-size: 16px; text-align: center">Not Found</p>';
              wp_reset_postdata();
            endif;
            ?>
            </div>
            <a href = "<?php echo home_url('/faq');?>" class = "viewMoreBtn">view more</a>
          </div>
</main>

<?php get_footer();?>

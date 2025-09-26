<?php get_header(); ?>

<main>
  <section class="section sec-work">
    <div class="h-container">
      <div class="sec-work-main">
        <div class="sec-work-list">
          <?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array(
            'post_type' => 'news',
            'post_status' => 'publish',
            'posts_per_page' => 1,
            'paged' => $paged
          );
          $works = new WP_Query($args);
          if ($works->have_posts()) :
            while ($works->have_posts()) :
              $works->the_post();
          ?>
              <div class="sec-work__elem js-io _fadeup _delay">
                <a href="<?php the_permalink(); ?>">
                
                <div>
                  <p>News</p>
                </div>
              <?php
              $post_id = get_the_ID();
              $category_object = get_the_category($post_id);

              if (!empty($category_object) && !is_wp_error($category_object)) {
                foreach ($category_object as $category) { ?>
                  <span>#<?= esc_html($category->name); ?></span>
              <?php }
              } ?>
              </div>
            </a>
            <div>
                </div>
        </div>
    <?php
            endwhile;
          else :
            echo '<p class="font-size: 16px; text-align: center">投稿がありません。</p>';
            wp_reset_postdata();
          endif;
    ?>
      </div>




      <div class="sec-work-list">
          <?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array(
            'post_type' => 'faqs',
            'post_status' => 'publish',
            'posts_per_page' => 1,
            'paged' => $paged
          );
          $works = new WP_Query($args);
          if ($works->have_posts()) :
            while ($works->have_posts()) :
              $works->the_post();
          ?>
              <div class="sec-work__elem js-io _fadeup _delay">
                <a href="<?php the_permalink(); ?>">
                <div>
                  <p>FAQs</p>
                </div>
              <?php
              $post_id = get_the_ID();
              $category_object = get_the_category($post_id);

              if (!empty($category_object) && !is_wp_error($category_object)) {
                foreach ($category_object as $category) { ?>
                  <span>#<?= esc_html($category->name); ?></span>
              <?php }
              } ?>
              </div>
            </a>
            <div>
                  <a href="<?php echo home_url('/contacts'); ?>">contacts</a>
                </div>
        </div>
    <?php
            endwhile;
          else :
            echo '<p class="font-size: 16px; text-align: center">投稿がありません。</p>';
            wp_reset_postdata();
          endif;
    ?>
      </div>
    </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
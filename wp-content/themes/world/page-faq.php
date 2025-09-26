<?php get_header() ?>
<main>
    <div class="content flex justify">
        <div class="myul">
            <?php
            // Determine current page for a static page template
            // On static pages, pagination var may be in 'page' instead of 'paged'
            $paged = get_query_var('paged') ? intval(get_query_var('paged')) : 1;
            if ($paged < 1) {
                $paged = get_query_var('page') ? intval(get_query_var('page')) : 1;
            }
            if ($paged < 1) {
                $paged = 1;
            }
            echo "<h3 style='text-align:right;padding-right:20px'>Page " . esc_html($paged) . "</h3>";
            $args = array(
                'post_type' => 'faqs',
                'post_status' => 'publish',
                'posts_per_page' => 5,
                'paged' => $paged
            );
            $works = new WP_Query($args);
            if ($works->have_posts()):
                while ($works->have_posts()):
                    $works->the_post();
            ?>
                    <!-- Individual post display -->
                    <a href="<?php the_permalink(); ?>">
                        <?php echo get_the_post_thumbnail(); ?>
                        <p><?php the_title(); ?></p>
                    </a>
                    <!-- // Individual post display -->
                <?php endwhile; ?> <!-- End of while loop -->
            <?php else: ?>
                <p style="text-align:center;">No posts available.</p>
            <?php endif; ?>
            <!-- End of list -->
        </div>
    </div>
    <!-- ////pagination/// -->
    <?php
    // Render pagination that respects permalinks and avoids homepage redirects
    $big = 999999999;
    $base = str_replace($big, '%#%', esc_url(get_pagenum_link($big)));
    $pagination_links = paginate_links(array(
        'base' => $base,
        'format' => (get_option('permalink_structure') ? 'page/%#%/' : '?paged=%#%'),
        'current' => max(1, $paged),
        'total' => isset($works) ? max(1, (int) $works->max_num_pages) : 1,
        'prev_text' => '&laquo; Prev',
        'next_text' => 'Next &raquo;',
        'type' => 'array'
    ));

    if (!empty($pagination_links)) {
        echo '<div class="pagination">';
        foreach ($pagination_links as $link) {
            echo $link;
        }
        echo '</div>';
    }
    wp_reset_postdata();
    ?>
    <!-- // End of pagination -->
</main>
<?php get_footer(); ?>
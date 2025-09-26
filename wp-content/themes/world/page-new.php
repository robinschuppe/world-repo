
<?php get_header() ?>
<style>
     * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }

    .flex {
        display: flex;
    }

    .flex-column {
        flex-direction: column;
    }

    .justify {
        justify-content: center;
    }

    .align {
        align-items: center;
    }

    .space-around {
        justify-content: space-around;
    }

    .space-between {
        justify-content: space-between;
    }

    .page-numbers {
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
        background-color: gray;
    }

    .page-numbers:hover {
        background-color: gray;
        color: white;
    }

    .prev:hover {
        color: white;
        background-color: gray;
    }

    .next:hover {
        color: white;
        background-color: gray;
    }

    .current {
        background-color: gray;
        color: white;
    }

    .prev {
        display: block !important;
        color: white;
        background-color: #c5c5c5;
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
    }

    .next {
        display: block !important;
        color: white;
        background-color: gray;
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;

    }

    .myul {
        list-style-type: circle;
        margin: 0;
        width: 70%;
        text-align: left;
    }

    .myul a {
        border: 1px solid #ddd;
        border-radius: 10px;
        margin-top: -1px;
        margin: 10px;
        background-color: #f6f6f6;
        padding: 30px 30px 10px 40px;
        text-decoration: none;
        font-size: 25px;
        color: black;
        display: block;
        cursor: pointer;
    }

    .w-full {
        width: 100%;
    }

    .w-screen {
        width: 100vw;
    }

    .text-center {
        text-align: center;
    }

    .text-left {
        text-align: left;
    }

    .content {
        width: 100%;
        padding: 40px 40px 20px 40px;

    }

</style>
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
                if ($paged < 1) { $paged = 1; }

                echo "<h3 style='text-align:right;padding-right:20px'>Page " . esc_html($paged) . "</h3>";
                $args = array(
                    'post_type' => 'news',
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
        <div class="flex justify">
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
        </div>
        </main>

<button id="toTopBtn" aria-label="Scroll to top">↑</button>

<!-- To-Top Button -->
            <!-- <script src= "<?php echo get_template_directory_uri();?>/assets/js/index.js"> -->  
<!-- 
  // Dark mode toggle -->


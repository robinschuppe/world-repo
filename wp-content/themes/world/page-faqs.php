<?php get_header(); ?>
<main>
    <div>
        <?php
        global $wpdb;
        echo "<div id='table'>";
        echo "<div id='count' rel='1'>";
        $posts = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}faqs LIMIT 5");
        if ($posts) {

            foreach ($posts as $post) {
                echo "<a href='" . get_template_directory_uri() . "/path-to-your-page'>" .
                    "<div class='title'>" . $post->title . "</div>" .
                    $post->content .
                    $post->data .
                    "</a><br>";
            }
        }
        echo "</div>";
        echo "</div>";

        $table_name = $wpdb->prefix . 'faqs';
        $count = $wpdb->get_var("SELECT COUNT(*) FROM $table_name");
        $i;
        $page_count = ceil($count / 5);
        echo "<div class='pagination' ><button href='#' onclick = 'goto(1)'>&laquo;</button>";
        echo "<button href='#' id='previous'>&lsaquo;</button>";
        for ($i = 0; $i < $page_count; $i++) {
            echo "<button onClick='goto(" . ($i + 1) . ")'>" . ($i + 1) . "</button>";
        }
        echo "<button href='#' id='next'>&rsaquo;</button>";
        echo "<button href='#' onclick = 'goto(" . $page_count . ")'>&raquo;</button></div>";
        ?>
    </div>
</main>

<script src="<?php echo get_template_directory_uri(); ?>/jquery.min.js"></script>
<script>
    function goto(v) {
        $.ajax({
            url: "<?php echo get_template_directory_uri(); ?>/admin-ajax2.php",
            type: 'POST',
            data: {
                action: v
            },
            success: function(response) {
                var data = JSON.parse(response);
                let i;
                $("#table").html("");
                $("#table").append("<div id='count' rel='" + v + "'>");
                for (i = 0; i < data.length; i++) {
                    $("#table").append("<div>" + data[i].title + "</div>");
                }
                $("#table").append("</div>");
            },
            error: function(error) {
                console.error('AJAX Error:', error);
            }
        });
    }
    $("#previous").on('click', function() {
        x = parseInt($("#count").attr("rel"));
        goto(x - 1);
    });
    $("#next").on('click', function() {
        y = parseInt($("#count").attr("rel"));
        goto(y + 1);
    });
</script>
</main>
<?php get_footer(); ?>
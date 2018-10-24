<div class="al-post-data">
    <div class="al-post-author">
        <?php
            echo esc_html__('By ', 'bober');
            echo '<a href="'.get_author_posts_url(get_the_author_meta( 'ID' )).'">';
                echo get_the_author_meta('nickname');
            echo ' </a> ';
        ?>
    </div>
    <?php
        echo esc_html__('in ', 'bober');
        echo bober_post_catogories();
        echo get_the_time( 'M d, Y' );
    ?>
</div>
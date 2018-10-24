<div class="al-controls-portfolio center">
    <ul id="al-control-portfolio" class="text-center">
        <?php
        $filter_cat = array(
            'orderby' => 'ID',
            'order' => 'DESC',
            'hide_empty' => 0,
            'hierarchical' => 1,
            'taxonomy' => 'folio_photos_cat'
        );
        $categories = get_categories($filter_cat);
        if (is_array($categories) && !empty($categories))
        {
            ?>
            <li id="liact" class="filter select-cat active" data-filter="*"><?php echo esc_html('All', 'bober'); ?> </li>
            <?php
            foreach ($categories as $cat)
            {
                ?>
                <li class="filter" data-filter=".<?php echo 'folio-'.esc_js($cat->slug); ?>"><?php echo esc_html($cat->name); ?></li>
                <?php
            }
        }
        ?>
    </ul>
</div>
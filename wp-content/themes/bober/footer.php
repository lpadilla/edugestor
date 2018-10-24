<?php get_template_part('templates/footer/footer', bober_footer_type()); ?>

<?php if(bober_menu_position() === 'left'){
    echo '</div>';
} ?>

<?php wp_footer(); ?>

</body>
</html>


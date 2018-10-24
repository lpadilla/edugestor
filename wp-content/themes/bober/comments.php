<?php

    if ( post_password_required() ) {
        return;
    }

?>

<?php if(have_comments()) : ?>

    <!-- Comments start -->
    <div class="al-comments">
        <div class="al-comments-number">
            <?php comments_number(esc_html__('No Comments', 'bober'), esc_html__('One Comment', 'bober'), esc_html__('% Comments', 'bober')); ?>
        </div>
        <svg class="al-svg-line" fill="red" x="0px" y="0px" viewBox="0 0 100 19.5" ><g><polygon points="79.3,18 69.6,8.3 60,18 50.3,8.3 40.6,18 31,8.3 21.3,18 11.7,8.3 3.4,16.5 0.6,13.7 11.7,2.7 21.3,12.3 31,2.7 40.6,12.3 50.3,2.7 60,12.3 69.6,2.7 79.3,12.3 88.9,2.7 100,13.6 97.2,16.4 89,8.3"/></g></svg>


        <?php if(get_comment_pages_count() > 1 && get_option('page_comments')): ?>
            <nav class="al-comments-navigation">
                <ul>
                    <li><?php previous_comments_link( esc_html__( 'Older Comments', 'bober' ) ); ?></li>
                    <li><?php next_comments_link( esc_html__( 'Newer Comments', 'bober' ) ); ?></li>
                </ul>
            </nav>
         <?php endif; ?>

        <ul class="al-comments-list">
            <?php
                wp_list_comments( array(
                    'style' => 'ul',
                    'callback' => 'bober_comments',
                    'short_ping' => true,
                ) );
            ?>
        </ul>
    </div>
    <!-- Comments end -->
<?php endif; ?>

<?php if(!comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' )) : ?>
    <div class="al-comments">
        <p class="al-no-comments">
            <?php echo esc_html__('Comments are closed', 'bober') ?>
        </p>
    </div>
<?php endif; ?>



<?php if( comments_open() ) : ?>

    <?php
    $fields = array(

        'author'  =>
            '<div class="row">',
            '<div class="col-md-4">',
            '<input  id="name" required="required" placeholder="'.esc_attr__('Your name *', 'bober').'" name="author" type="text" value="' . esc_attr(  $commenter['comment_author'] ) .
            '" size="30" />',
        '</div>',

        'email'  =>
            '<div class="col-md-4">',
            '<input  id="email" required="required" placeholder="'.esc_attr__('Email *', 'bober').'" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
            '" size="30" />',
        '</div>',

        'url'  =>
            '<div class="col-md-4">',
            '<input  id="url" placeholder="'.esc_attr__('Web site', 'bober').'" name="url" type="text" value="' . esc_attr(  $commenter['comment_author_url'] ) .
            '" size="30" />',
        '</div>',
        '</div>',
    );
    $fields = apply_filters('comment_form_default_fields', $fields);
    $args = array(
        'fields'               => $fields,
        'comment_field'        => '<textarea id="comment" name="comment"  placeholder="'.esc_attr__('Comment *', 'bober').'" cols="3" rows="5" required="required"></textarea>',
        'logged_in_as'         => '',
        'id_form'              => 'form-comment',
        'id_submit'            => 'submit',
        'class_form'           => 'al-comment-form',
        'class_submit'         => 'com_submits',
        'name_submit'          => 'submit',
        'title_reply'          => esc_html__( 'Leave a Reply' , 'bober'),
        'title_reply_to'       => esc_html__( 'Leave a Reply to %s' , 'bober'),
        'title_reply_before'   => '<div class="al-comments-title"><h4>',
        'title_reply_after'    => '</h4><svg class="al-svg-line" fill="red" x="0px" y="0px" viewBox="0 0 100 19.5" ><g><polygon points="79.3,18 69.6,8.3 60,18 50.3,8.3 40.6,18 31,8.3 21.3,18 11.7,8.3 3.4,16.5 0.6,13.7 11.7,2.7 21.3,12.3 31,2.7 40.6,12.3 50.3,2.7 60,12.3 69.6,2.7 79.3,12.3 88.9,2.7 100,13.6 97.2,16.4 89,8.3 	"/></g></svg></div>',
        'cancel_reply_before'  => ' <small>',
        'cancel_reply_after'   => '</small>',
        'cancel_reply_link'    => esc_html__( 'Cancel reply' , 'bober'),
        'label_submit'         => esc_html__( 'Submit Reply' , 'bober'),
        'submit_button'        => '<input name="%1$s" type="submit" id="%2$s" class="btn accent-btn" value="'.esc_attr__('Post comment','bober').'" />',
        'submit_field'         => '%1$s %2$s',
    );
    comment_form($args);
    ?>

<?php endif; ?>

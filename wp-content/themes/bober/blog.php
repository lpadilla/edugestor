<?php
  $blog_title = bober_get_option('al-blog-heading', 'Blog');
  $blog_description = get_bloginfo('description');

  if( bober_get_option('al-blog-description') ){
    $blog_description = bober_get_option('al-blog-description');
  }

  if(class_exists('acf')){
    /* Template Name: Blog Template */
    if(!empty(get_field('blog_title'))){
        $blog_title = get_field('blog_title');
    }
    if(!empty(get_field('blog_description'))){
        $blog_description = get_field('blog_description');
    }
  }
?>

<?php get_header(); ?>
<section <?php echo bober_blog_background(); ?> class="display-page al-bg-mask background-image">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-push-2">
        <div class="content">
          <div class="heading-title al-center">
            <h1 class="al-headitg-title"><?php echo esc_html($blog_title); ?></h1>
            <div class="al-line-title">
              <svg class="al-svg-line" fill="red" x="0px" y="0px" viewBox="0 0 100 19.5" ><g><polygon points="79.3,18 69.6,8.3 60,18 50.3,8.3 40.6,18 31,8.3 21.3,18 11.7,8.3 3.4,16.5 0.6,13.7 11.7,2.7 21.3,12.3 31,2.7 40.6,12.3 50.3,2.7 60,12.3 69.6,2.7 79.3,12.3 88.9,2.7 100,13.6 97.2,16.4 89,8.3"/></g></svg>
            </div>
            <div class="al-subtitle">
              <p><?php echo esc_html($blog_description); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="blog">
  <?php if(class_exists('acf')): ?>
    <?php get_template_part('loop/loop-post','default1'); ?>
  <?php endif; ?>
</div>


<ul>
  <?php
  global $post;
  $args = array( 'numberposts' => 3, 'orderby' => 'date', 'category' => 1 );
  $myposts = get_posts($args);   
  wp_reset_postdata();
  ?>
</ul>
</div>

<div class="container pad-cont">
  <div class="row">
    <div class="col-lg-8">
      <?php
        foreach ( $myposts as $post ) : setup_postdata( $post ); 
          $category_arr = get_the_category();
          $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));?>  
          <div class="col-lg-6 pad-bl">
            <div class="col-lg-12 blog-imgss" >
              <img src="<?php echo $image?>" alt="dsadasd" width="350px" height="200px">
            </div>
            <div class="col-lg-12">
              <span class="category"><?php echo $category_arr[0]->name;?></span>
              <span>-</span>
              <span><?php echo get_the_date('d.m.Y'); ?></span>                     
              <h3 style="font-size: 15px; line-height: 17px;"><?php echo get_the_title(); ?></h3>
              <p style="font-size: 15px; line-height: 17px;">
                  <?php echo get_the_content() ?>
              </p>
            </div>
          </div><?php                        
        endforeach; 
      ?>
    </div>
    <div class="col-lg-4" style="padding: 30px 0;">
      <div class="col-lg-12" style="border: 1px solid #000;">
        <h3 style="font-size: 15px; line-height: 17px;">Publicaciones favoritas</h3>
        <ul id="bl-list">
          <?php
            foreach ( $myposts as $post ) : setup_postdata( $post ); 
              $category_arr = get_the_category();
              $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));?>
              <li style="padding: 10px; height: 120px;">
                <a href="" title="">
                  <div style="border-top: 1px solid #000; padding: 5px 0;">   
                    <div class="col-lg-8 fav-flex">
                      <span class="category" style="font-size: 10px; line-height:  12px;"><?php echo $category_arr[0]->name;?></span>
                      <span style="font-size: 10px; line-height: 12px;">-</span>
                      <span style="font-size: 10px; line-height: 12px;"><?php echo get_the_date('d.m.Y'); ?></span>   
                      <h3 class="fav-h3" style="font-size: 13px; line-height: 12px;"><?php echo get_the_title(); ?></h3>
                    </div>
                    <div class="col-lg-4">                                    
                        <img src="<?php echo $image?>" alt="" height="80px" width="80px">
                    </div>
                  </div>
                </a>
              </li>     
            <?php endforeach; 
          ?>
        </ul>
      </div>
    </div>                    
  </div>
</div>
<?php get_footer(); ?>